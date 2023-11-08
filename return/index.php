<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Армекс - Условия возврата");
    $APPLICATION->SetTitle("Армекс - Условия возврата");
?>
<main class="privacy">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <span>Условия возврата</span>
        </div>
    </div>
    <section class="privacy__main main__block block-top default-text">
        <div class="top-shadow"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper page-h1">Условия возврата программного обеспечения</h1>
            <?php $APPLICATION->IncludeFile(SITE_DIR."include/return.php", [], ["MODE" => "html"]) ?>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>