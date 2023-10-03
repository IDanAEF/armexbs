<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");

    $prodId = str_replace('/', '', $_GET['productId']);

    $product = CIBlockSection::GetList(
        [],
        ['IBLOCK_ID' => 48, 'ID' => $prodId],
        false,
        [
            'NAME', 'DETAIL_PICTURE', 'DESCRIPTION',
            'UF_PRICE', 'UF_CLIENT', 'UF_PREVIEW'
        ],
        []
    )->Fetch();

    $variants = CIBlockElement::GetList(
        ["SORT"=>"ASC"],
        ['IBLOCK_ID' => 48, 'IBLOCK_SECTION_ID' => $prodId],
        false,
        false,
        ['NAME', 'PREVIEW_TEXT', 'PROPERTY_PRICE']
    );

    $types = [];
    while ($elem = $variants->Fetch()) {
        $types[] = [
            'name' => $elem['NAME'],
            'text' => $elem['PREVIEW_TEXT'],
            'price' => $elem['PROPERTY_PRICE_VALUE']
        ];
    }

    $APPLICATION->SetPageProperty("title", "Армекс - ".$product['NAME']);
    $APPLICATION->SetTitle("Армекс - ".$product['NAME']);
?>
<main class="product">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <a href="/catalog/">каталог</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span><?=$product['NAME']?></span>
        </div>
    </div>
    <section class="product__promo main__block">
        <div class="container">
            <div class="product__promo-text">
                <h1 class="text_fz36 text_upper text_fw400"><?=$product['NAME']?></h1>
                <img src="<?=CFile::GetPath($product['DETAIL_PICTURE'])?>" alt="<?=$product['NAME']?>" class="product__promo-image mobile">
                <div class="product__promo-descr text_fz18 text_fw300">
                    <?=$product['UF_PREVIEW']?>
                </div>
                <div class="product__promo-price text_fz24"><?=$product['UF_PRICE']?></div>
                <div class="product__promo-buttons text_fz20 text_fw700">
                    <button class="body-click-target" data-content="feedback-join">Оставить заявку</button>
                    <button class="border body-click-target" data-content="feedback-quest">Задать вопрос</button>
                </div>
            </div>
            <img src="<?=CFile::GetPath($product['DETAIL_PICTURE'])?>" alt="<?=$product['NAME']?>" class="product__promo-image">
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/usage.php", [], ["MODE" => "html"]) ?>
    <section class="product__banner main__block">
        <div class="container">
            <h2 class="text_fz36 text_fw600 text_white text_upper">Приобретайте продукты — получайте подарки</h2>
            <picture>
                <source srcset="<?=$beforePath?>product-banner-mobile.png" media="(max-width: 576px)" />
                <img src="<?=$beforePath?>product-banner.png" alt="Приобретайте продукты — получайте подарки">
            </picture>
            <a href="/gifts/" class="button text_fz24 text_fw700">Подробнее</a>
        </div>
    </section>
    <section class="product__parts text_fz20 text_fw700">
        <div class="container">
            <?php if ($product['DESCRIPTION']) : ?>
                <a href="#descr" class="button border">Описание</a>
            <?php endif; ?>
            <?php if ($types) : ?>
                <a href="#types" class="button border">Версии продукта</a>
            <?php endif; ?>
            <?php if ($product['UF_CLIENT']) : ?>
                <a href="#clients" class="button border">Уже внедрили</a>
            <?php endif; ?>
        </div>
    </section>
    <?php if ($product['DESCRIPTION']) : ?>
    <section class="product__descr main__block half" id="descr">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Описание</h2>
            <div class="product__descr-text text_fz20 text_fw300">
                <?=$product['DESCRIPTION']?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php if ($types) : ?>
    <section class="product__types main__block" id="types">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Версии продукта</h2>
            <div class="product__types-list">
                <?php
                    foreach($types as $type) {
                        ?>
                        <div class="product__types-item">
                            <div class="product__types-head text_fz24 text_fw600">
                                <div class="name"><?=$type['name']?></div>
                                <div class="price"><?=$type['price']?></div>
                            </div>
                            <div class="product__types-descr text_fz20">
                                <?=$type['text']?>
                            </div>
                            <div class="product__types-price text_fz36 text_fw600"><?=$type['price']?></div>
                            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-join">Оставить заявку</button>
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <section class="demo__banner short gold main__block">
        <div class="container">
            <div class="demo__banner-text text_fz20">
                <h2 class="text_fz32 text_fw600 text_upper text_red">поможем с выбором 1с</h2>
                Если вы не знаете, какой продукт подойдет вам больше, наши специалисты проведут для вас консультацию и подберут продукт с учетом особенностей бизнеса
            </div>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-choise">Подобрать продукт 1С</button>
        </div>
    </section>
    <?php if ($product['UF_CLIENT']) : ?>
    <section class="product__clients main__block" id="clients">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Уже внедрили</h2>
            <div class="product__clients-list">
                <?php
                    foreach($product['UF_CLIENT'] as $client) {
                        $clientPict = CIBlockElement::GetList(
                            ["SORT" => "ASC"],
                            ['IBLOCK_ID' => 34, 'ID' => $client],
                            false,
                            false,
                            ['PREVIEW_PICTURE']
                        )->Fetch();
                        ?>
                        <div class="product__clients-item">
                            <img src="<?=CFile::GetPath($clientPict['PREVIEW_PICTURE'])?>" alt="">
                        </div>
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <?php endif; ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/consult.php", [
        'title' => 'Получите консультацию нашего специалиста',
        'descr' => 'Оставьте заявку и мы свяжемся с вами в ближайшее время для обсуждения деталей'
    ], ["MODE" => "php"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>