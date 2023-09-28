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
            'PROPERTY_FIRST_TEXT', 'PROPERTY_COMMENT', 
            'PROPERTY_COMMENT_AUTHOR', 'PROPERTY_ADDRESS', 'PROPERTY_PHONE', 
            'PROPERTY_EMAIL', 'PROPERTY_WEBSITE', 'PROPERTY_STATE_NAME'
        ]
    )->Fetch();

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

    $stateName = $case['PROPERTY_STATE_NAME_VALUE'] ?: $case['NAME'];

    $APPLICATION->SetPageProperty("title", "Армекс - ".$stateName);
    $APPLICATION->SetTitle("Армекс - ".$stateName);
?>
<main class="state">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <a href="/cases/">Кейсы</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
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
                            <img src="<?=$img?>" alt="">
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
                    <img src="<?=$imgPath?>quot.svg" alt="">
                    <?=$case['PROPERTY_COMMENT_VALUE']['TEXT']?>
                    <img src="<?=$imgPath?>quot.svg" alt="">
                </div>
            </div>
            <?php endif; ?>
            <?php
                $outContacts = $case['PROPERTY_ADDRESS_VALUE'] || $case['PROPERTY_EMAIL_VALUE'] || $case['PROPERTY_PHONE_VALUE'] || $case['PROPERTY_WEBSITE_VALUE'];
            ?>
            <?php if ($outContacts || $case['PREVIEW_TEXT']) : ?>
            <div class="state__company text_fz18 main__block">
                <?php if ($case['PREVIEW_PICTURE']) : ?>
                    <img src="<?=CFile::GetPath($case['PREVIEW_PICTURE'])?>" alt="" class="state__company-image">
                <?php endif; ?>
                <?=$case['PREVIEW_TEXT']?>
                <div class="state__company-info">
                    <?php if ($case['PREVIEW_PICTURE']) : ?>
                        <img src="<?=CFile::GetPath($case['PREVIEW_PICTURE'])?>" alt="">
                    <?php endif; ?>
                    <?php if ($outContacts) : ?>
                    <div class="state__company-contacts">
                        <b>Контактная информация:</b>
                        <div class="state__company-rows">
                            <?php if ($case['PROPERTY_ADDRESS_VALUE']) : ?>
                                <span><?=$case['PROPERTY_ADDRESS_VALUE']?></span>
                            <?php endif; ?>
                            <?php if ($case['PROPERTY_EMAIL_VALUE']) : ?>
                                <span>E-mail: <a href="mailto:<?=$case['PROPERTY_EMAIL_VALUE']?>"><?=$case['PROPERTY_EMAIL_VALUE']?></a></span>
                            <?php endif; ?>
                            <?php if ($case['PROPERTY_PHONE_VALUE']) : ?>
                                <span>Телефон: <a href="tel:<?=str_replace(['(', ')', '-', ' '], '', $case['PROPERTY_PHONE_VALUE'])?>"><?=$case['PROPERTY_PHONE_VALUE']?></a></span>
                            <?php endif; ?>
                            <?php if ($case['PROPERTY_WEBSITE_VALUE']) : ?>
                                <span>Веб-сайт: <a href="<?=$case['PROPERTY_WEBSITE_VALUE']?>" target="_blank"><?=$case['PROPERTY_WEBSITE_VALUE']?></a></span>
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