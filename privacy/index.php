<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Армекс - Политика в отношении обработки персональных данных");
    $APPLICATION->SetTitle("Армекс - Политика в отношении обработки персональных данных");
?>
<main class="privacy">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <span>Политика в отношении обработки персональных данных</span>
        </div>
    </div>
    <section class="privacy__main main__block block-top default-text">
        <div class="top-shadow"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper page-h1">Политика в отношении обработки персональных данных</h1>
            <?php $APPLICATION->IncludeFile(SITE_DIR."include/privacy.php", [], ["MODE" => "html"]) ?>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>