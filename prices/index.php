<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - Цены");
    $APPLICATION->SetTitle("Армекс - Цены");
?>
<main class="prices">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>Цены</span>
        </div>
    </div>
    <section class="prices__main block-top default-text">
        <div class="top-shadow"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper page-h1">Цены</h1>
            
        </div>
    </section>
    <section class="product__banner red main__block">
        <div class="container">
            <h2 class="text_fz32 text_fw600 text_white text_upper">Приобретайте продукты — получайте подарки</h2>
            <picture>
                <source srcset="<?=$beforePath?>product-banner-mobile.png" media="(max-width: 576px)" />
                <img src="<?=$beforePath?>product-banner.png" alt="Приобретайте продукты — получайте подарки">
            </picture>
            <a href="/gifts/" class="button text_fz24 text_fw700">Подробнее</a>
        </div>
    </section>
    <section class="prices__table main__block text_fz20">
        <div class="container">
            <h2 class="text_fz24 text_fw500 text_upper">стоимость продуктов 1с</h2>
            <?php $APPLICATION->IncludeFile(SITE_DIR."include/prices.php", [], ["MODE" => "html"]) ?>
        </div>
    </section>
    <section class="demo__banner short gold main__block">
        <div class="container">
            <div class="demo__banner-text text_fz20">
                <h2 class="text_fz32 text_fw600 text_upper text_red">поможем с выбором 1с</h2>
                Если вы не знаете, какой продукт подойдет вам больше, наши специалисты проведут для вас консультацию и подберут продукт с учетом особенностей бизнеса
            </div>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-choise">Подобрать продукт 1С</button>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>