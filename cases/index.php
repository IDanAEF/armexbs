<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Армекс - Кейсы");
    $APPLICATION->SetTitle("Армекс - Кейсы");
?>
<main class="cases">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <span>Кейсы</span>
        </div>
    </div>
    <?php
        $cases = CIBlockElement::GetList(
            ["SORT" => "ASC"],
            ['IBLOCK_ID' => 49],
            false,
            false,
            ['ID', 'CODE', 'PREVIEW_PICTURE', 'PROPERTY_CLIENT']
        );
    ?>
    <section class="cases__main main__block block-top">
        <div class="top-shadow short"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper page-h1">Кейсы</h1>
            <div class="main__cases-track not-slider">
                <?php
                    while ($case = $cases->Fetch()) {
                        $client = CIBlockElement::GetList(
                            ["SORT" => "ASC"],
                            ['IBLOCK_ID' => 52, 'ID' => $case['PROPERTY_CLIENT_VALUE']],
                            false,
                            false,
                            ['NAME', 'PREVIEW_PICTURE']
                        )->Fetch();
                        ?>
                        <div class="main__cases-item">
                            <div class="main__cases-left">
                                <?php if ($client['PREVIEW_PICTURE']) : ?>
                                    <img src="<?=CFile::GetPath($client['PREVIEW_PICTURE'])?>" alt="<?=$client['NAME']?>">
                                <?php endif; ?>
                                <span class="text_fz20 text_fw600"><?=$client['NAME']?></span>
                                <a href="/cases/<?=$case['CODE']?>/" class="button text_fz20">
                                    Подробнее
                                    <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                                </a>
                            </div>
                            <div class="main__cases-right text_fz14 text_fw300">
                                <?php
                                    $results = CIBlockElement::GetProperty(
                                        49,
                                        $case['ID'],
                                        [],
                                        ['CODE' => 'RESULTS']
                                    );

                                    while ($result = $results->Fetch()) {
                                        $num = preg_replace('/ \:\: .*/', '', $result['VALUE']);
                                        $name = preg_replace('/.* \:\: /', '', $result['VALUE']);
                                        $offset = strpos($num, '%') === false ? 0 : 170 - (1.7 * (int)str_replace('%', '', $num));
                                        ?>
                                        <div class="main__cases-info">
                                            <div class="main__cases-info-circle text_fz20 text_fw600 text_red">
                                                <svg class="progress-ring" viewBox="0 0 60 60">
                                                    <circle
                                                        stroke="#D7171F"
                                                        stroke-width="6"
                                                        fill="#fff"
                                                        r="27"
                                                        cx="30"
                                                        cy="30"
                                                        style="stroke-dashoffset: <?=$offset?>" />
                                                </svg>
                                                <i class="text_normal"><?=$num?></i>
                                            </div>
                                            <span><?=$name?></span>
                                        </div>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>