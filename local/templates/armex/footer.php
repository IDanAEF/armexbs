<?php if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die(); ?>
    <footer class="footer text_white">
        <div class="container">
            <div class="footer__top">
                <div class="social mobile">
                    <?php $APPLICATION->IncludeFile(SITE_DIR."include/footer-social-reverse.php", [], ["MODE" => "html"]) ?>
                </div>
                <div class="footer__col mobile">
                    <div class="footer__menu">
                        <a href="/catalog/" class="footer__title text_fz20 text_fw600">продукты 1с</a>
                    </div>
                    <div class="footer__menu">
                        <a href="/cases/" class="footer__title text_fz20 text_fw600">кейсы</a>
                    </div>
                    <div class="footer__menu">
                        <a href="/reviews/" class="footer__title text_fz20 text_fw600">отзывы</a>
                    </div>
                    <div class="footer__menu">
                        <a href="/prices/" class="footer__title text_fz20 text_fw600">цены</a>
                    </div>
                    <div class="footer__menu">
                        <a href="/company/" class="footer__title text_fz20 text_fw600">о нас</a>
                    </div>
                    <div class="footer__menu">
                        <a href="/contacts/" class="footer__title text_fz20 text_fw600">контакты</a>
                    </div>
                    <div class="footer__menu">
                        <span class="footer__title text_fz20 text_fw600">попробуйте бесплатно</span>
                        <ul class="footer__menu-under text_fz18">
                            <li><a href="/demoversii-1s/">Демоверсии 1С</a></li>
                            <li><a href="/1s-fresh/">1С:Fresh</a></li>
                            <li><a href="/arenda-1s/">Аренда 1С</a></li>
                            <li><a href="/bitriks24/">Битрикс24</a></li>
                            <li><a href="/1s-grm/">1С:ГРМ</a></li>
                            <li><a href="/1s-dlya-vashey-otrasli/">Демосервис отраслевых продуктов</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__menu mb50">
                        <span class="footer__title text_fz20 text_fw600">о нас</span>
                        <ul class="footer__menu-under text_fz18">
                            <li><a href="/company/">О компании</a></li>
                            <li><a href="/benefit/">Наши преимущества</a></li>
                            <li><a href="/statuses/">Статусы и награды</a></li>
                            <li><a href="/partnership/">Партнерство</a></li>
                        </ul>
                    </div>
                    <div class="footer__menu">
                        <a href="/clients/" class="footer__title text_fz20 text_fw600">клиенты</a>
                    </div>
                    <div class="footer__menu">
                        <a href="/cases/" class="footer__title text_fz20 text_fw600">кейсы</a>
                    </div>
                    <div class="footer__menu">
                        <a href="/reviews/" class="footer__title text_fz20 text_fw600">отзывы</a>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__menu">
                        <a href="/catalog/" class="footer__title text_fz20 text_fw600">продукты 1с</a>
                        <ul class="footer__menu-under text_fz18">
                            <?php
                                $catsClass = CIBlockSection::GetList(
                                    ["SORT" => "ASC"],
                                    ['IBLOCK_ID' => 47, 'SECTION_ID' => 136],
                                    false,
                                    ['ID', 'NAME'],
                                    []
                                );

                                while($cat = $catsClass->Fetch()) {
                                    ?>
                                    <li><a href="/catalog/?cat=<?=$cat['ID']?>"><?=$cat['NAME']?></a></li>
                                    <?php
                                }
                            ?>
                        </ul>
                    </div>
                    <div class="footer__menu">
                        <a href="/prices/" class="footer__title text_fz20 text_fw600">цены</a>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__menu">
                        <span class="footer__title text_fz20 text_fw600">попробуйте бесплатно</span>
                        <ul class="footer__menu-under text_fz18">
                            <li><a href="/demoversii-1s/">Демоверсии 1С</a></li>
                            <li><a href="/1s-fresh/">1С:Fresh</a></li>
                            <li><a href="/arenda-1s/">Аренда 1С</a></li>
                            <li><a href="/bitriks24/">Битрикс24</a></li>
                            <li><a href="/1s-grm/">1С:ГРМ</a></li>
                            <li><a href="/1s-dlya-vashey-otrasli/">1С для вашей отрасли</a></li>
                        </ul>
                    </div>
                </div>
                <div class="footer__col">
                    <div class="footer__menu mb50">
                        <a href="/contacts/" class="footer__title text_fz20 text_fw600">контакты</a>
                        <ul class="footer__menu-under text_fz18">
                            <li>
                                <a href="tel:<?=str_replace(['(', ')', '-', ' '], '', $contacts['phone'])?>">
                                    <img src="<?=$imgPath?>phone.svg" alt="Телефон">
                                    <?=$contacts['phone']?>
                                </a>
                            </li>
                            <li>
                                <a href="mailto:<?=$contacts['email']?>">
                                    <img src="<?=$imgPath?>mail.svg" alt="E-mail">
                                    <?=$contacts['email']?>
                                </a>
                            </li>
                            <li>
                                <img src="<?=$imgPath?>map-point.svg" alt="Адрес">
                                <?=$contacts['address']?>
                            </li>
                        </ul>
                    </div>
                    <div class="footer__speak text_fz14">
                        <?php $APPLICATION->IncludeFile(SITE_DIR."include/footer-speak.php", [], ["MODE" => "html"]) ?>
                    </div>
                    <div class="footer__menu">
                        <span class="footer__title text_fz20 text_fw600">Наши соц сети</span>
                        <div class="footer__menu-under social text_fz18">
                            <?php $APPLICATION->IncludeFile(SITE_DIR."include/footer-social.php", [], ["MODE" => "html"]) ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer__bott">
                <div class="footer__dop text_fz16">
                    <div class="footer__dop-list">
                        <div class="footer__dop-item">
                            Принимаем к оплате
                            <div class="pay">
                                <img src="<?=$beforePath?>pay1.png" alt="Visa">
                                <img src="<?=$beforePath?>pay2.png" alt="MasterCard">
                                <img src="<?=$beforePath?>pay3.png" alt="Яндекс">
                                <img src="<?=$beforePath?>pay4.png" alt="Мир">
                            </div>
                        </div>
                        <a href="/privacy/" class="footer__dop-item">Политика конфиденциальности</a>
                        <a href="/return/" class="footer__dop-item">Условия возврата</a>
                        <span class="footer__dop-item body-click-target" data-content="feedback-error">Сообщить об ошибке</span>
                    </div>
                    <a href="/" class="footer__logo-link">
                        <?php $APPLICATION->IncludeFile(SITE_DIR."include/footer-logo.php", [], ["MODE" => "html"]) ?>
                    </a>
                </div>
                <div class="footer__copy text_fz14">
                    <?php $APPLICATION->IncludeFile(SITE_DIR."include/footer-copy.php", [], ["MODE" => "html"]) ?>
                </div>
            </div>
        </div>
    </footer>
    <div class="cookies-modal text_fz18">
        <span>Мы используем <b>cookies</b>. Продолжая использовать наш сайт, вы соглашаетесь на обработку персональных данных.</span>
        <button class="text_fz20">Согласен</button>
    </div>

    <!-- Modals : Begin -->
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-form-modal.php", [
            'title' => 'Давайте обсудим ваш проект',
            'descr' => 'Оставьте заявку и мы свяжемся с вами в ближайшее время для обсуждения деталей',
            'success' => 'save',
            'name' => 'feedback-modal',
            'section' => '172'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-form-modal.php", [
            'title' => 'Не знаете, какой продукт 1С выбрать?',
            'descr' => 'Оставьте свои данные и мы свяжемся с вами и поможем с выбором',
            'success' => 'thanks',
            'name' => 'feedback-choise',
            'section' => '181'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-form-modal.php", [
            'title' => 'Оставьте заявку и станьте нашим партнером',
            'descr' => 'Оставьте свои данные и мы свяжемся с вами в ближайшее время для обсуждения деталей',
            'success' => 'thanks',
            'name' => 'feedback-partner',
            'section' => '180'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-form-modal.php", [
            'title' => 'Получить 30 дневный пробный доступ',
            'descr' => 'Оставьте свои данные и мы свяжемся с вами в ближайшее время',
            'success' => 'thanks',
            'name' => 'feedback-test',
            'section' => '179'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-form-modal.php", [
            'title' => 'Оставьте заявку на подключение',
            'descr' => 'Оставьте свои данные и мы свяжемся с вами в ближайшее время для обсуждения деталей',
            'success' => 'thanks',
            'name' => 'feedback-join',
            'section' => '178'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-form-modal.php", [
            'title' => 'Остались вопросы?',
            'descr' => 'Оставьте свои данные и мы свяжемся с вами в ближайшее время',
            'success' => 'thanks',
            'name' => 'feedback-quest',
            'section' => '177'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-form-modal.php", [
            'title' => 'Нужна консультация специалиста?',
            'descr' => 'Оставьте свои данные и мы свяжемся с вами в ближайшее время',
            'success' => 'thanks',
            'name' => 'feedback-consult',
            'section' => '176'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-form-modal.php", [
            'title' => 'Оставьте заявку на подключение и получите подарок',
            'descr' => 'Оставьте свои данные и мы свяжемся с вами в ближайшее время для обсуждения деталей',
            'success' => 'thanks',
            'name' => 'feedback-gift',
            'section' => '175'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-form-modal.php", [
            'title' => 'Сообщить об ошибке',
            'success' => 'error',
            'name' => 'feedback-error',
            'section' => '174',
            'comment' => true
        ], ["MODE" => "php"]);
    ?>
    <!-- Modals : End -->


    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-success.php", [
            'title' => 'Данные сохранены',
            'descr' => 'Ваши заявка успешно сохранена, и мы свяжемся с вами в ближайшее время',
            'name' => 'save'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-success.php", [
            'title' => 'Спасибо',
            'descr' => 'Ваши данные успешно сохранены и мы скоро с вами свяжемся',
            'name' => 'thanks'
        ], ["MODE" => "php"]);
    ?>
    <?php 
        $APPLICATION->IncludeFile(SITE_DIR."include/default-success.php", [
            'title' => 'Спасибо',
            'descr' => 'Мы уже получили ваше сообщение <br>и приступили к исправлению ошибки',
            'name' => 'error'
        ], ["MODE" => "php"]);
    ?>
    <div class="gallery__overlay">
        <div class="gallery__overlay-block">
            <span class="modal-close gallery__overlay-close"></span>
            <img src="<?=$imgPath?>arrow-circle-right.svg" alt="arrow-circle-right" class="gallery__overlay-arrow left">
            <img src="<?=$imgPath?>arrow-circle-right.svg" alt="arrow-circle-right" class="gallery__overlay-arrow right">
            
        </div>
    </div>
</body>
</html>