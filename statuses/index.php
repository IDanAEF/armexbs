<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - Статусы и награды");
    $APPLICATION->SetTitle("Армекс - Статусы и награды");
?>
<main class="statuses">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>Статусы и награды</span>
        </div>
    </div>
    <section class="statuses__main block-top">
        <div class="top-shadow"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper page-h1">Статусы и награды</h1>
            <div class="statuses__list main__block">
                <div class="container">
                    <h2 class="text_fz32 text_fw600 text_upper">
                        <img src="<?=$imgPath?>star.svg" alt="">
                        статусы
                    </h2>
                    <?php
                        $stats = CIBlockElement::GetList(
                            ["SORT" => "ASC"],
                            ['IBLOCK_ID' => 51],
                            false,
                            false,
                            ['ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE']
                        );

                        while($stat = $stats->Fetch()) {
                            $itemSerts = [];
                            $sertsClass = CIBlockElement::GetProperty(
                                51,
                                $stat['ID'],
                                [],
                                ['CODE' => 'SERTS']
                            );
                            while ($sert = $sertsClass->Fetch()) {
                                if ($sert['VALUE']) {
                                    $single = CIBlockElement::GetList(
                                        ["SORT" => "ASC"],
                                        ['IBLOCK_ID' => 50, 'ID' => $sert['VALUE']],
                                        false,
                                        false,
                                        ['DETAIL_PICTURE']
                                    )->Fetch();
                                    
                                    $itemSerts[] = CFile::GetPath($single['DETAIL_PICTURE']);
                                }
                            }
                            ?>
                            <div class="benefit__item">
                                <img src="<?=CFile::GetPath($stat['PREVIEW_PICTURE'])?>" alt="" class="benefit__item-image">
                                <div class="benefit__item-info text_fz18">
                                    <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                                        <img src="<?=CFile::GetPath($stat['PREVIEW_PICTURE'])?>" alt="" class="benefit__item-image">
                                        <?=$stat['NAME']?>
                                    </h3>
                                    <?=$stat['PREVIEW_TEXT']?>
                                    <?php if ($itemSerts) : ?>
                                        <br><br>
                                        <span class="statuses__look text_red text_underline gallery-call">
                                            Посмотреть сертификат<?=count($itemSerts) > 1 ? 'ы' : ''?>
                                        </span>
                                        <div class="statuses__item-gallery gallery-items">
                                            <?php
                                                foreach ($itemSerts as $img) {
                                                    ?>
                                                    <span class="statuses__item-gallery-pict gallery-item" data-full="<?=$img?>"></span>
                                                    <?php
                                                }
                                            ?>
                                        </div>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
        </div>
    </section>
    <section class="statuses__serts main__block slider" data-pc-vis="5" data-lap-vis="4" data-tablet-vis="3" data-mob-vis="1">
        <div class="container">
            <h2 class="text_fz32 text_fw600 text_upper">
                <img src="<?=$imgPath?>star.svg" alt="">
                Награды и сертификаты
            </h2>
            <div class="statuses__serts-field">
                <img src="<?=$imgPath?>arrow-circle-right.svg" alt="" class="statuses__serts-arrow left slider-left">
                <div class="statuses__serts-list slider-list">
                    <div class="statuses__serts-track slider-track gallery-items">
                        <?php
                            $serts = CIBlockElement::GetList(
                                ["SORT" => "ASC"],
                                ['IBLOCK_ID' => 50],
                                false,
                                false,
                                ['DETAIL_PICTURE', 'PREVIEW_PICTURE']
                            );

                            while ($sert = $serts->Fetch()) {
                                ?>
                                <img src="<?=CFile::GetPath($sert['PREVIEW_PICTURE'])?>" alt="" class="slider-item gallery-item" data-full="<?=CFile::GetPath($sert['DETAIL_PICTURE'])?>">
                                <?php
                            }
                        ?>
                    </div>
                </div>
                <img src="<?=$imgPath?>arrow-circle-right.svg" alt="" class="statuses__serts-arrow right slider-right">
            </div>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>