<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - Демоверсии 1С");
    $APPLICATION->SetTitle("Армекс - Демоверсии 1С");
?>
<main class="demo">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>демоверсии 1с</span>
        </div>
    </div>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/pages-promo.php", ['id' => 2152], ["MODE" => "php"]) ?>
    <section class="demo__banner">
        <div class="container">
            <h2 class="text_fz32 text_fw600 text_upper text_red">Тест-драйв продуктов 1С на 30 дней</h2>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-test">Попробовать бесплатно</button>
        </div>
    </section>
    <section class="demo__list text_fz20 main__block">
        <div class="container">
            <?php
                $demoItems = [
                    [1, '1С:ERP Управление предприятием'],
                    [2, '1С:Государственные и муниципальные закупки 8'],
                    [3, '1C:Налоговый мониторинг. Бухгалтерия КОРП МСФО'],
                    [4, '1С:ERP. Управление холдингом'],
                    [5, '1С:Договоры'],
                    [6, '1С:Налогоплательщик 8'],
                    [7, '1С:Архив'],
                    [5, '1С:Документооборот 8'],
                    [3, '1С:Предприниматель'],
                    [3, '1С:Бухгалтерия 8'],
                    [8, '1С:Документооборот государственного учреждения 8'],
                    [9, '1С:Рабочее место кассира'],
                    [10, '1С:Бухгалтерия государственного учреждения 8'],
                    [11, '1С:Зарплата и кадры государственного учреждения 8'],
                    [13, '1С:Розница'],
                    [3, '1С:Бухгалтерия некоммерческой организации 8 (НКО)'],
                    [12, '1С:Зарплата и управление персоналом 8'],
                    [14, '1С:Управление нашей фирмой'],
                    [10, '1С:Бюджет муниципального образования 8'],
                    [15, '1С:Касса'],
                    [16, '1С:Управление торговлей 8'],
                    [10, '1С:Бюджет поселения 8'],
                    [17, '1С:Комплексная автоматизация'],
                    [4, '1С:Управление холдингом 8'],
                    [18, '1С:Бюджетная отчетность 8'],
                    [4, '1С:Корпорация'],
                    [3, '1С:Упрощенка 8'],
                ];

                foreach ($demoItems as $item) {
                    ?>
                    <div class="demo__item">
                        <img src="<?=$beforePath?>demo/demo<?=$item[0]?>.png" alt="">
                        <?=$item[1]?>
                    </div>
                    <?php
                }
            ?>
        </div>
    </section>
    <section class="demo__banner short">
        <div class="container">
            <h2 class="text_fz32 text_fw600 text_upper text_red">Тест-драйв продуктов 1С на 30 дней</h2>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-test">Попробовать бесплатно</button>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>