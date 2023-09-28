<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - 1С:ERP Управление предприятием");
    $APPLICATION->SetTitle("Армекс - 1С:ERP Управление предприятием");
?>
<main class="product">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <a href="/catalog/">каталог</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>1С:ERP Управление предприятием</span>
        </div>
    </div>
    <section class="product__promo main__block">
        <div class="container">
            <div class="product__promo-text">
                <h1 class="text_fz36 text_upper text_fw400">1С:ERP Управление предприятием</h1>
                <img src="<?=$beforePath?>catalog1-detail.png" alt="1С:ERP Управление предприятием" class="product__promo-image mobile">
                <div class="product__promo-descr text_fz18 text_fw300">
                    "1С:ERP Управление предприятием 2" - это инновационное решение от 1С, использующее комплексный подход к управлению бизнесом. Программа позволит построить информационную систему для управления деятельностью предприятия
                </div>
                <div class="product__promo-price text_fz24">от 36 000 ₽</div>
                <div class="product__promo-buttons text_fz20 text_fw700">
                    <button>Оставить заявку</button>
                    <button class="border">Задать вопрос</button>
                </div>
            </div>
            <img src="<?=$beforePath?>catalog1-detail.png" alt="1С:ERP Управление предприятием" class="product__promo-image">
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/usage.php", [], ["MODE" => "html"]) ?>
    <section class="product__parts text_fz20 text_fw700">
        <div class="container">
            <a href="#descr" class="button border">Описание</a>
            <a href="#types" class="button border">Версии продукта</a>
            <a href="#clients" class="button border">Уже внедрили</a>
        </div>
    </section>
    <section class="product__descr main__block half" id="descr">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Описание</h2>
            <div class="product__descr-text text_fz20 text_fw300">
                «1С:ERP Управление предприятием 2» позволит построить комплексную информационную систему для управления деятельностью любого предприятия. Это инновационное решение от компании «1С» использует комплексный подход к управлению бизнесом, лучшие международные методики и многолетнюю отечественную практику, что гарантирует гибкость настройки, удобство использования и существенный экономический эффект. Линейка решений «1С:ERP» охватывает все основные отрасли, имеет большой набор функций и программных инструментов, подходит для использования на предприятиях любой численности.
                <br><br>
                Более 885 000 рабочих мест автоматизировано на ERP-решениях «1С», а общая численность персонала клиентов превышает 14 миллионов человек. Свыше 3000 предприятий уже стали клиентами «1С:ERP Управление предприятием 2». Если вы желаете повысить эффективность управления производством и бизнесом, автоматизировать большинство задач на современном цифровом уровне и достичь принципиально новых целевых показателей, «1С:ERP Управление предприятием 2» – это ваш выбор!
            </div>
        </div>
    </section>
    <section class="product__types main__block" id="types">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Версии продукта</h2>
            <div class="product__types-list">
                <div class="product__types-item">
                    <div class="product__types-head text_fz24 text_fw600">
                        <div class="name">Коробочная поставка</div>
                        <div class="price">510 000₽</div>
                    </div>
                    <div class="product__types-descr text_fz20">
                        <ul>
                            <li>Установочный диск</li>
                            <li>Печатная документация</li>
                        </ul>
                    </div>
                    <div class="product__types-price text_fz36 text_fw600">510 000₽</div>
                    <button class="text_fz20 text_fw700">Оставить заявку</button>
                </div>
                <div class="product__types-item">
                    <div class="product__types-head text_fz24 text_fw600">
                        <div class="name">Электронная поставка</div>
                        <div class="price">510 000₽</div>
                    </div>
                    <div class="product__types-descr text_fz20">
                        <ul>
                            <li>Ссылка для скачивания продукта</li>
                            <li>Электронная документация</li>
                        </ul>
                    </div>
                    <div class="product__types-price text_fz36 text_fw600">510 000₽</div>
                    <button class="text_fz20 text_fw700">Оставить заявку</button>
                </div>
            </div>
        </div>
    </section>
    <section class="demo__banner short gold main__block">
        <div class="container">
            <div class="demo__banner-text text_fz20">
                <h2 class="text_fz32 text_fw600 text_upper text_red">Тест-драйв продуктов 1С на 30 дней</h2>
                Если вы не знаете, какой продукт подойдет вам больше, наши специалисты проведут для вас консультацию и подберут продукт с учетом особенностей бизнеса
            </div>
            <button class="text_fz20 text_fw700">Подобрать продукт 1С</button>
        </div>
    </section>
    <section class="product__clients main__block" id="clients">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Уже внедрили</h2>
            <div class="product__clients-list">
                <div class="product__clients-item">
                    <img src="<?=$beforePath?>client-logo1.png" alt="">
                </div>
            </div>
        </div>
    </section>
    <section class="product__consult main__block">
        <div class="container">
            <div class="product__consult-left text_fz18 text_fw300">
                <h2 class="text_fz36 text_fw400">Получите консультацию нашего специалиста</h2>
                Оставьте заявку и мы свяжемся с вами в ближайшее время для обсуждения деталей
            </div>
            <div class="product__consult-right">
                <div class="product__consult-contact">
                    <div class="links text_fz20">
                        <a href="tel:+74955850659">
                            <img src="<?=$imgPath?>phone-gray.svg" alt="Телефон">
                            +7 (495) 585-06-59
                        </a>
                        <a href="mailto:info@armex.ru">
                            <img src="<?=$imgPath?>mail-gray.svg" alt="E-mail" style="opacity: 0.8">
                            info@armex.ru
                        </a>
                    </div>
                    <div class="footer__speak text_fz14">
                        <?php $APPLICATION->IncludeFile(SITE_DIR."include/footer-speak.php", [], ["MODE" => "html"]) ?>
                    </div>
                </div>
                <button class="button text_fz20 text_fw700">
                    Получить консультацию
                    <img src="<?=$imgPath?>arrow-right.svg" alt="">
                </button>
            </div>
        </div>
    </section>
    <section class="product__banner main__block">
        <div class="container">
            <h2 class="text_fz42 text_fw600 text_white text_upper">Приобретайте продукты — получайте подарки</h2>
            <picture>
                <source srcset="<?=$beforePath?>product-banner-mobile.png" media="(max-width: 576px)" />
                <img src="<?=$beforePath?>product-banner.png" alt="Приобретайте продукты — получайте подарки">
            </picture>
            <a href="#" class="button text_fz24 text_fw700">Подробнее</a>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>