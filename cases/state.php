<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

    $caseCode = str_replace('/', '', $_GET['caseCode']);

    $case = CIBlockElement::GetList(
        [],
        ['IBLOCK_ID' => 49, 'CODE' => $caseCode],
        false,
        false,
        [
            'ID', 'NAME', 'PREVIEW_PICTURE', 'PREVIEW_TEXT', 'DETAIL_TEXT',
            'PROPERTY_FIRST_TEXT', 'PROPERTY_COMMENT', 'PROPERTY_CLIENT',
            'PROPERTY_COMMENT_AUTHOR'
        ]
    )->Fetch();

    if (!$case) {
        if (!defined("ERROR_404")) define("ERROR_404", "Y");

        \CHTTP::setStatus("404 Not Found");
        
        if ($APPLICATION->RestartWorkarea()) {
            require(\Bitrix\Main\Application::getDocumentRoot()."/404.php");
            die();
        }
    }

    $caseId = $case['ID'];

    $client = '';
    if ($case['PROPERTY_CLIENT_VALUE']) {
        $client = CIBlockElement::GetList(
            [],
            ['IBLOCK_ID' => 52, 'ID' => $case['PROPERTY_CLIENT_VALUE']],
            false,
            false,
            [
                'NAME',
                'PREVIEW_PICTURE', 'DETAIL_TEXT',
                'PROPERTY_ADDRESS', 'PROPERTY_PHONE', 
                'PROPERTY_EMAIL', 'PROPERTY_WEBSITE'
            ]
        )->Fetch();
    }

    $images = [];
    $imagesClass = CIBlockElement::GetProperty(
        49,
        $caseId,
        [],
        ['CODE' => 'PHOTOS']
    );

    while($image = $imagesClass->Fetch()) {
        $images[] = CFile::GetPath($image['VALUE']);
    }

    $phones = [];
    $phonesClass = CIBlockElement::GetProperty(
        52,
        $case['PROPERTY_CLIENT_VALUE'],
        [],
        ['CODE' => 'PHONE']
    );

    while($phone = $phonesClass->Fetch()) {
        $nums = [];
        $numString = $phone['VALUE'];
        $tit = "Телефон";

        if (strpos($phone['VALUE'], '::') !== false) {
            $tit = preg_replace('/ \:\: .*/', '', $phone['VALUE']);
            $numString = preg_replace('/.* \:\: /', '', $phone['VALUE']);
        }

        if (strpos($numString, ',') === false) $nums[] = $numString;
        else $nums = explode(',', $numString);

        $phones[] = [$tit, $nums];
    }

    $stateName = $case['NAME'];

    $APPLICATION->SetPageProperty("title", "Армекс - ".$stateName);
    $APPLICATION->SetTitle("Армекс - ".$stateName);
?>
<main class="state">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <a href="/cases/">Кейсы</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <span><?=$stateName?></span>
        </div>
    </div>
    <section class="state__main main__block block-top">
        <div class="top-shadow"></div>
        <div class="container">
            <h1 class="text_fz36 text_fw600 text_upper page-h1"><?=$stateName?></h1>
            <div class="state__first text_fz20 text_italic text_center">
                <?=$case['PROPERTY_FIRST_TEXT_VALUE']['TEXT']?>
            </div>
            <div class="state__content">
                <div class="state__text default-text">
                    <?=$case['DETAIL_TEXT'] ?: 'Информация ещё не добавлена'?>
                </div>
                <div class="state__images">
                    <?php
                        foreach($images as $img) {
                            if ($img) {
                                ?>
                                <img src="<?=$img?>" alt="<?=str_replace('"', '', $stateName)?>">
                                <?php
                            }
                        }
                    ?>
                </div>
            </div>
            <?php if ($case['PROPERTY_COMMENT_VALUE']['TEXT']) : ?>
            <div class="state__comment">
                <?php if ($case['PROPERTY_COMMENT_AUTHOR_VALUE']) : ?>
                <div class="state__comment-title text_fz18 text_fw600">
                    <?=$case['PROPERTY_COMMENT_AUTHOR_VALUE']?>
                </div>
                <?php endif; ?>
                <div class="state__comment-text text_fz20 text_italic">
                    <img src="<?=$imgPath?>quot.svg" alt="quot">
                    <?=$case['PROPERTY_COMMENT_VALUE']['TEXT']?>
                    <img src="<?=$imgPath?>quot.svg" alt="quot">
                </div>
            </div>
            <?php endif; ?>
            <?php
                $outContacts = $client['PROPERTY_ADDRESS_VALUE'] || $client['PROPERTY_EMAIL_VALUE'] || $client['PROPERTY_PHONE_VALUE'] || $client['PROPERTY_WEBSITE_VALUE'];
            ?>
            <?php if ($outContacts || $client['DETAIL_TEXT']) : ?>
            <div class="state__company text_fz18 main__block">
                <?php if ($client['PREVIEW_PICTURE']) : ?>
                    <img src="<?=CFile::GetPath($client['PREVIEW_PICTURE'])?>" alt="<?=$client['NAME']?>" class="state__company-image">
                <?php endif; ?>
                <?=$client['DETAIL_TEXT']?>
                <div class="state__company-info">
                    <?php if ($client['PREVIEW_PICTURE']) : ?>
                        <img src="<?=CFile::GetPath($client['PREVIEW_PICTURE'])?>" alt="<?=$client['NAME']?>">
                    <?php endif; ?>
                    <?php if ($outContacts) : ?>
                    <div class="state__company-contacts">
                        <b>Контактная информация:</b>
                        <div class="state__company-rows">
                            <?php if ($client['PROPERTY_ADDRESS_VALUE']) : ?>
                                <div><?=$client['PROPERTY_ADDRESS_VALUE']?></div>
                            <?php endif; ?>
                            <?php if ($client['PROPERTY_EMAIL_VALUE']) : ?>
                                <div>E-mail: <span><a href="mailto:<?=$client['PROPERTY_EMAIL_VALUE']?>"><?=$client['PROPERTY_EMAIL_VALUE']?></a></span></div>
                            <?php endif; ?>
                            <?php foreach ($phones as $elem) : ?>
                                <div>
                                    <?=$elem[0]?>: 
                                    <span>
                                        <?php
                                            foreach($elem[1] as $index => $sing) {
                                                $linkPhone = preg_replace('/\D/', '', str_replace(['(', ')', '-', ' ', '+'], '', $sing));
                                                $isWhatsapp = mb_strtoupper($elem[0]) == 'WHATSAPP';
                                                ?>
                                                <a href="<?=($isWhatsapp ? 'https://api.whatsapp.com/send/?phone='.$linkPhone : 'tel:'.$linkPhone)?>"<?=$isWhatsapp ? ' target="_blank"' : ''?>><?=trim($sing)?></a><?=$index !== count($elem[1]) - 1 ? ', ' : ''?>
                                                <?php
                                            }
                                        ?>
                                    </span>
                                </div>
                            <?php endforeach; ?>
                            <?php if ($client['PROPERTY_WEBSITE_VALUE']) : ?>
                                <div>Веб-сайт: <span><a href="<?=strpos($client['PROPERTY_WEBSITE_VALUE'], 'http') !== false ? $client['PROPERTY_WEBSITE_VALUE'] : 'http://'.$client['PROPERTY_WEBSITE_VALUE']?>" target="_blank"><?=$client['PROPERTY_WEBSITE_VALUE']?></a></span></div>
                            <?php endif; ?>
                        </div>
                    </div>
                    <?php endif; ?>
                </div>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>