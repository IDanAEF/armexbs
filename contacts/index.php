<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Армекс - Контакты");
    $APPLICATION->SetTitle("Армекс - Контакты");
?>
<main class="contacts">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
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
                    <?php if ($contacts['phone']) : ?>
                        <span>
                            <img src="<?=$imgPath?>phone-red.svg" alt="Телефон">
                            <span>
                                <a href="tel:<?=str_replace(['(', ')', '-', ' '], '', $contacts['phone'])?>">
                                    <?=$contacts['phone']?>
                                </a>
                                <span class="btn text_fz14 text_underline body-click-target" data-content="feedback-modal">
                                    Заказать звонок
                                </span>
                            </span>
                        </span>
                    <?php endif; ?>
                    <?php if ($contacts['email']) : ?>
                        <a href="mailto:<?=$contacts['email']?>">
                            <img src="<?=$imgPath?>mail-red.svg" alt="E-mail">
                            <?=$contacts['email']?>
                        </a>
                    <?php endif; ?>
                    <?php if ($contacts['address']) : ?>
                        <span>
                            <img src="<?=$imgPath?>map-point-red.svg" alt="Адрес">
                            <?=$contacts['address']?>
                        </span>
                    <?php endif; ?>
                    <?php if ($contacts['time']) : ?>
                        <span>
                            <img src="<?=$imgPath?>clock-red.svg" alt="График">
                            <?=$contacts['time']?>
                        </span>
                    <?php endif; ?>
                </div>
                <div class="contacts__social">
                    <div class="contacts__social-footer">
                        <h3 class="text_fz20 text_fw600 text_upper">связаться с нами</h3>
                        <div class="footer__speak text_fz14">
                            <?php $APPLICATION->IncludeFile(SITE_DIR."include/footer-speak.php", [], ["MODE" => "html"]) ?>
                        </div>
                    </div>
                    <div class="contacts__social-links">
                        <h3 class="text_fz20 text_fw600 text_upper">Наши соцсети</h3>
                        <div class="contacts__social-items">
                            <?php $APPLICATION->IncludeFile(SITE_DIR."include/contacts-social.php", [], ["MODE" => "html"]) ?>
                        </div>
                    </div>
                </div>
                <?php if ($contacts['tech-phone'] || $contacts['tech-mail'] || $contacts['tech-skype-name'] || $contacts['tech-helpdesk']) : ?>
                <div class="contacts__info text_fz20 text_ffIBM">
                    <h3 class="text_fz20 text_fw600 text_upper">Отдел технической поддержки</h3>
                    <?php if ($contacts['tech-phone']) : ?>
                        <a href="tel:<?=str_replace(['(', ')', '-', ' '], '', $contacts['tech-phone'])?>">
                            <img src="<?=$imgPath?>phone-red.svg" alt="Телефон">
                            <?=$contacts['tech-phone']?>
                        </a>
                    <?php endif; ?>
                    <?php if ($contacts['tech-mail']) : ?>
                        <a href="mailto:<?=$contacts['tech-mail']?>">
                            <img src="<?=$imgPath?>mail-red.svg" alt="Почта">
                            <?=$contacts['tech-mail']?>
                        </a>
                    <?php endif; ?>
                    <?php if ($contacts['tech-skype-name']) : ?>
                        <a href="<?=$contacts['tech-skype-link']?>" target="_blank">
                            <img src="<?=$imgPath?>skype-static.svg" alt="Skype">
                            <?=$contacts['tech-skype-name']?>
                        </a>
                    <?php endif; ?>
                    <?php if ($contacts['tech-helpdesk']) : ?>
                        <a href="<?=$contacts['tech-helpdesk']?>" target="_blank" class="text_underline">
                            <img src="<?=$imgPath?>user.svg" alt="Helpdesk">
                            Вход в центр поддержки Helpdesk
                        </a>
                    <?php endif; ?>
                </div>
                <?php endif; ?>
                <?php if ($contacts['garant-mail']) : ?>
                <div class="contacts__info text_fz20 text_ffIBM">
                    <h3 class="text_fz20 text_fw600 text_upper">служба качества</h3>
                    <a href="mailto:<?=$contacts['garant-mail']?>">
                        <img src="<?=$imgPath?>mail-red.svg" alt="E-mail">
                        <?=$contacts['garant-mail']?>
                    </a>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <?php if ($contacts['map']) : ?>
    <section class="contacts__map main__block">
        <div class="container" id="map"></div>
    </section>
    <?php endif; ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php if ($contacts['map']) : ?>
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
<?php endif; ?>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>