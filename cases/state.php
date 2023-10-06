<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

    $caseId = str_replace('/', '', $_GET['caseId']);

    $case = CIBlockElement::GetList(
        [],
        ['IBLOCK_ID' => 49, 'ID' => $caseId],
        false,
        false,
        [
            'NAME', 'PREVIEW_PICTURE', 'PREVIEW_TEXT', 'DETAIL_TEXT',
            'PROPERTY_FIRST_TEXT', 'PROPERTY_COMMENT', 'PROPERTY_CLIENT',
            'PROPERTY_COMMENT_AUTHOR'
        ]
    )->Fetch();

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
                            ?>
                            <img src="<?=$img?>" alt="<?=$stateName?>">
                            <?php
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
                                <span><?=$client['PROPERTY_ADDRESS_VALUE']?></span>
                            <?php endif; ?>
                            <?php if ($client['PROPERTY_EMAIL_VALUE']) : ?>
                                <span>E-mail: <a href="mailto:<?=$client['PROPERTY_EMAIL_VALUE']?>"><?=$client['PROPERTY_EMAIL_VALUE']?></a></span>
                            <?php endif; ?>
                            <?php if ($client['PROPERTY_PHONE_VALUE']) : ?>
                                <span>Телефон: <a href="tel:<?=str_replace(['(', ')', '-', ' '], '', $client['PROPERTY_PHONE_VALUE'])?>"><?=$client['PROPERTY_PHONE_VALUE']?></a></span>
                            <?php endif; ?>
                            <?php if ($client['PROPERTY_WEBSITE_VALUE']) : ?>
                                <span>Веб-сайт: <a href="<?=$client['PROPERTY_WEBSITE_VALUE']?>" target="_blank"><?=$client['PROPERTY_WEBSITE_VALUE']?></a></span>
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