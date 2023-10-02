<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - Сертификаты сотрудников");
    $APPLICATION->SetTitle("Армекс - Сертификаты сотрудников");
?>
<main class="sertificates">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>Сертификаты сотрудников</span>
        </div>
    </div>
    <section class="sertificates__main main__block block-top text_fz20">
        <div class="top-shadow"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper page-h1">Сертификаты сотрудников</h1>
            <?php $APPLICATION->IncludeFile(SITE_DIR."include/sertificates.php", [], ["MODE" => "html"]) ?>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>