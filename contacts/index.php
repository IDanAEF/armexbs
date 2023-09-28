<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - Контакты");
    $APPLICATION->SetTitle("Армекс - Контакты");
?>
<main class="contacts">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>Контакты</span>
        </div>
    </div>
    <section class="contacts__head main__block block-top">
        <div class="top-shadow"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper">
                Контакты
            </h1>
            <div class="contacts__main">
                <div class="contacts__info text_fz20 text_ffIBM">
                    <a href="tel:<?=str_replace(['(', ')', '-', ' '], '', $contacts['phone'])?>">
                        <img src="<?=$imgPath?>phone-red.svg" alt="">
                        <?=$contacts['phone']?>
                    </a>
                    <a href="mailto:<?=$contacts['email']?>">
                        <img src="<?=$imgPath?>mail-red.svg" alt="">
                        <?=$contacts['email']?>
                    </a>
                    <span>
                        <img src="<?=$imgPath?>map-point-red.svg" alt="">
                        <?=$contacts['address']?>
                    </span>
                    <span>
                        <img src="<?=$imgPath?>clock-red.svg" alt="">
                        <?=$contacts['time']?>
                    </span>
                </div>
                <div class="contacts__social">
                    <div class="footer__speak text_fz14">
                        <?php $APPLICATION->IncludeFile(SITE_DIR."include/footer-speak.php", [], ["MODE" => "html"]) ?>
                    </div>
                    <div class="contacts__social-links">
                        <h3 class="text_fz20 text_fw600 text_upper">Наши соцсети</h3>
                        <div class="contacts__social-items">
                            <?php $APPLICATION->IncludeFile(SITE_DIR."include/contacts-social.php", [], ["MODE" => "html"]) ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="contacts__map main__block">
        <div class="container" id="map"></div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<script src="https://api-maps.yandex.ru/2.1/?apikey=5727f775-e56b-498e-bb2a-a48a1702a7f7&lang=ru_RU" type="text/javascript"></script>
<script>
    ymaps.ready(function () {
        var myMap = new ymaps.Map('map', {
            center: [<?=$contacts['map']?>],
            zoom: 17
        }, {
            searchControlProvider: 'yandex#search'
        });

        myPlacemark = new ymaps.Placemark([<?=$contacts['map']?>], {
            hintContent: 'г. Москва, Марксистская улица, 34 к4',
        }, {
            iconLayout: 'default#image',
            iconImageSize: [35, 48]
        });

        myMap.geoObjects.add(myPlacemark);
    });
</script>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>