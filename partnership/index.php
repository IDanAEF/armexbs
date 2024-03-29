<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Армекс - Партнерство");
    $APPLICATION->SetTitle("Армекс - Партнерство");
?>
<main class="partner">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <span>Партнерство</span>
        </div>
    </div>
    <div class="partner__empty block-top">
        <div class="top-shadow"></div>
    </div>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/pages-promo.php", ['id' => 2256], ["MODE" => "php"]) ?>
    <section class="partner__po main__block">
        <div class="container">
            <h2 class="text_fz24 text_fw500 text_upper text_center">Мы поставляем следующее ПО</h2>
            <div class="partner__po-list">
                <?php
                    for($i = 1; $i <= 8; $i++) {
                        ?>
                        <img src="<?=$beforePath?>partner/po<?=$i?>.png" alt="po<?=$i?>">
                        <?php
                    }
                ?>
            </div>
        </div>
    </section>
    <section class="partner__who main__block half text_fz18">
        <div class="container">
            <h2 class="text_fz24 text_upper text_fw500">Кто может стать нашим партнером</h2>
            <p>Нашими партнерами могут стать компании, индивидуальные предприниматели и физические лица, занимающиеся внедрением программного обеспечения из любого региона  России и СНГ.</p>
            <p>Приветствуется опыт в области автоматизации систем учета и управления на предприятиях.</p>
            <p>Со стороны фирмы "1С" установлены высокие требования к партнерам, которым разрешается продавать и внедрять сложные и отраслевые конфигурации. Наше предложение ориентировано на работу с партнерами, которые не имеют соответствующего подтвержденного статуса от фирмы «1С» на право продажи и внедрения таких продуктов.</p>
        </div>
    </section>
    <section class="partner__service main__block half text_fz18">
        <div class="container">
            <h2 class="text_fz24 text_upper text_fw500">Условия партнерской программы</h2>
            <ul>
                <li>Поставка программных продуктов клиенту осуществляется от нашей компании, при этом основную часть агентского вознаграждения — до 70% от прибыли за продажу ПП получает партнер. (Процент вознаграждения ежегодно пересматривается по результатам совместной работы)</li>
                <li>По инициативе клиента или партнера могут проводиться дополнительные аудиты и консультации по методологическим и техническим вопросам внедрения</li>
            </ul>
        </div>
    </section>
    <section class="partner__benefit main__block text_center">
        <div class="container">
            <div class="partner__benefit-item">
                <img src="<?=$beforePath?>benefit/benefit2.png" alt="Качественная установка">
                <h3 class="text_fz24">Качественная <br>установка</h3>
                <a href="/benefit/#mark" class="button text_fz20">
                    Подробнее
                    <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                </a>
            </div>
            <div class="partner__benefit-item">
                <img src="<?=$beforePath?>benefit/benefit4.png" alt="Гарантии и принципы работы">
                <h3 class="text_fz24">Гарантии и <br>принципы работы</h3>
                <a href="/benefit/#garant" class="button text_fz20">
                    Подробнее
                    <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                </a>
            </div>
            <div class="partner__benefit-item">
                <img src="<?=$beforePath?>benefit/benefit6.png" alt="Подтвержденные статусы компании">
                <h3 class="text_fz24">Подтвержденные <br>статусы компании</h3>
                <a href="/benefit/#status" class="button text_fz20">
                    Подробнее
                    <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                </a>
            </div>
            <div class="partner__benefit-item">
                <img src="<?=$beforePath?>benefit/benefit11.png" alt="Работаем с партнерами из всех регионов РФ и СНГ">
                <h3 class="text_fz24">Работаем с партнерами из всех регионов РФ и СНГ</h3>
                <a href="/benefit/#sng" class="button text_fz20">
                    Подробнее
                    <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                </a>
            </div>
        </div>
    </section>
    <section class="fresh__programs main__block">
        <div class="container">
            <h2 class="text_fz24 text_fw500 text_upper">Информация для партнеров</h2>
            <div class="fresh__programs-item text_fz20">
                <div class="fresh__programs-head text_upper text_fw500 sitemaps__row parent">
                    ПАРТНЕРСКИЕ ПРАЙС-ЛИСТЫ
                    <img src="<?=$imgPath?>arrow-down-light.svg" alt="arrow-down-light">
                </div>
                <div class="fresh__programs-body sitemaps__row-sub">
                    <div class="fresh__programs-row partner__row sitemaps__row">
                        <a href="https://1c.ru/rus/partners/pricelst.jsp" target="_blank" class="partner__list-item">Основной прайс-лист 1С</a>
                        <a href="https://dist.1c.ru/price-lists/" target="_blank" class="partner__list-item">Прайс-листы 1С:Дистрибуция</a>
                        <a href="https://www.1c-bitrix.ru/products/cms/license.php" target="_blank" class="partner__list-item">Прайс-лист на CMS 1C-Битрикс</a>
                        <a href="https://www.bitrix24.ru/prices/" target="_blank" class="partner__list-item">Прайс-лист на Битрикс24</a>
                    </div>
                </div>
            </div>
            <div class="fresh__programs-item text_fz20">
                <div class="fresh__programs-head text_upper text_fw500 sitemaps__row parent">
                    СРОК И СТОИМОСТЬ ДОСТАВКИ ПО
                    <img src="<?=$imgPath?>arrow-down-light.svg" alt="arrow-down-light">
                </div>
                <div class="fresh__programs-body sitemaps__row-sub">
                    <div class="fresh__programs-row partner__row sitemaps__row">
                        Поставка программных продуктов в течении 1-го рабочего дня, для заказного ПО от 5-ти рабочих дней.<br>
                        Большинство программных продуктов имеет электронные версии и доставка не требуется.<br>
                        Возможна доставка и установка продуктов нашим специалистом по г..Москва. и удаленная установка для региональных клиентов
                        <br><br>
                        Стоимость и сроки доставки заказа в регионы<br>
                        Стоимость и сроки доставки зависят от региона (обычно занимает 1-3 рабочих дня, стоимость: 700 – 1000 руб.). Возможна доставка «до двери» в любой регион.
                        <br><br>
                        <b>Более подробную информацию можно уточнить у операторов:</b>
                        <br><br>
                        <a href="http://www.emspost.ru/ru/" target="_blank" class="partner__list-item top">EMS Russian Post (рекомендованный вариант)</a>
                        <a href="http://www.ponyexpress.ru/" target="_blank" class="partner__list-item">PONY EXPRESS</a>
                        <a href="http://www.dhl.ru/ru" target="_blank" class="partner__list-item">DHL</a>
                        <span class="partner__list-item">Или любой другой оператор на Ваш выбор.</span>
                    </div>
                </div>
            </div>
            <div class="fresh__programs-item text_fz20">
                <div class="fresh__programs-head text_upper text_fw500 sitemaps__row parent">
                    ЗАЯВЛЕНИЯ И ДОКУМЕНТЫ. ПРАВИЛА АПГРЕЙДОВ
                    <img src="<?=$imgPath?>arrow-down-light.svg" alt="arrow-down-light">
                </div>
                <div class="fresh__programs-body sitemaps__row-sub">
                    <div class="fresh__programs-row partner__row sitemaps__row">
                        <b>Апгрейд 1С Предприятие</b>
                        <br><br>
                        Фирма «1С» предусмотрела для пользователей льготный переход (апрейд) для большинства программных продуктов 1С и дополнительных клиентских лицензий:
                        <ul>
                            <li>С однопользовательских на многопользовательские версии (Например, с однопользовательской "1С:Бухгалтерия 8" на "1С:Бухгалтерия 8. Комплект на 5 пользователей")</li>
                            <li>С менее функциональных версий – на более функциональные (например, с базовых версий – на ПРОФ-версии или с «1С:Бухгалтерия» на «1С:Комплексную автоматизацию»)</li>
                            <li>С отдельной программы на комплект из нескольких программ, в состав которых входит программа, сдающаяся на апгрейд (например, с "1С: Бухгалтерия 8. Комплект на 5 пользователей" на "1С:Предприятие 8. Комплект прикладных решений на 5 пользователей")</li>
                            <li>Обменять одну или несколько имеющихся дополнительных клиентских лицензий (ключей) системы «1С:Предприятие 8» на одну многопользовательскую с большим (или таким же) количеством подключений</li>
                            <li>Если вы используете программу версии 7.7, то при помощи апгрейда вы сможете перейти на «1С:Предприятие 8»</li>
                        </ul>
                        <br>
                        <b>Стоимость апгрейда вычисляется по формуле: </b><br>
                        Суммарная стоимость приобретаемых программных продуктов - стоимость сдаваемого на апгрейд продукта + 150 руб., но не менее половины стоимости приобретаемого набора продуктов.
                        <br><br>
                        <b>Пример 1:</b> «1С:Бухгалтерия 8 ПРОФ. Электронная поставка» апгрейд с «1С:Бухгалтерия 8. Базовая версия»: Будет считаться по формуле:13 000₽ - 5400₽ + 150₽ = 7 750₽
                        <br><br>
                        <b>Пример 2:</b> «1С:Комплексная автоматизация 8» апгрейд с «1С:Предприятие 8. Управление торговлей»: Будет считаться по формуле:61 700 рублей – 22600₽ + 150₽ = 39 250₽
                        <br><br>
                        <b>Пример 3:</b> «1С:Предприятие 8. ERP Управление предприятием 2»  апгрейд с «1С:Предприятие 8. ERP Управление предприятием 2»:Будет: 216 000₽ (432 000₽. – 223 000₽, не менее половины стоимости нового продукта)
                        *Цены в примерах являются ориентировочными, актуальные по <a href="https://1c.ru/rus/partners/pricelst.jsp" target="_blank">текущему прайсу фирму «1С»</a> - уточняйте у наших менеджеров.
                        Для каждой поставки предусмотрен порядок и условия возврата комплектующих при апгрейде.
                        <br><br>
                        <b>Для оформления апгрейда потребуется:</b>
                        <ul>
                            <li>Регистрационная карточка программного продукта или дополнительной лицензии</li>
                            <li>Регистрация программного продукта в фирме «1С»</li>
                            <li>Наличие действующей подписки ИТС или 1С:КП</li>
                            <li>Заявление на апгрейд в свободной форме от организации-собственника на официальном бланке</li>
                        </ul>
                        <br>
                        <b>Что делать, если регистрационная анкета потеряна?</b><br>
                        Если не оказалось нужной половины регистрационной анкеты, тогда нужны: письмо от пользователя программного продукта с просьбой осуществить апгрейд без предоставления регистрационной анкеты; в письме должны быть указаны наименование программного продукта, его регистрационный номер, когда был приобретен, и описаны обстоятельства, в результате которых анкета была утрачена; документы, подтверждающие покупку программы, например, товарная накладная и счет-фактура, чек. Если и это потеряно, то постарайтесь связаться с фирмой, где был приобретен продукт 1С.
                        <br><br>
                        <b>Что делать, если утерян ключ защиты программы?</b><br>
                        Если для осуществления апгрейда требуется сдача ключа защиты, и клиент не может его предоставить, апгрейд фирмой «1С» производиться не будет.
                        Утерянные ключи не восстанавливаются.
                        <br><br>
                        <b>Шаблоны типовых писем</b><br>
                        <a href="http://www.armexbs.ru/images/doc1.docx" target="_blank">Заявка на апгрейд программного продукта 1С</a><br>
                        Заявка в фирму «1С» на апгрейд имеющегося программного продукта фирмы «1С».<br><br>
                        <a href="http://www.armexbs.ru/images/doc2.docx" target="_blank">Заявка на апгрейд без предоставления регистрационной анкеты</a><br>
                        Заявка в фирму «1С» на апгрейд имеющегося программного продукта фирмы «1С». Используется в случае утраты регистрационной анкеты имеющегося программного продукта.<br><br>
                        <a href="http://www.armexbs.ru/images/doc3.docx" target="_blank">Заявка на обмен дополнительных лицензий</a><br>
                        Заявка в фирму «1С» на обмен имеющихся дополнительных лицензий к программным продуктам 1С:Предприятие 8 на дополнительную лицензию на большее количество рабочих мест.<br><br>
                        <a href="http://www.armexbs.ru/images/1C_ERP_Z.xls" target="_blank">Заявка на позаказное производство или агрейд для ERP-систем</a><br><br>
                        <a href="http://www.armexbs.ru/images/doc5.docx" target="_blank">Замена неисправных ключей HASP</a>
                    </div>
                </div>
            </div>
            <div class="fresh__programs-item text_fz20">
                <div class="fresh__programs-head text_upper text_fw500 sitemaps__row parent">
                    ПРИНЦИПЫ РАБОТЫ И ГАРАНТИИ
                    <img src="<?=$imgPath?>arrow-down-light.svg" alt="arrow-down-light">
                </div>
                <div class="fresh__programs-body sitemaps__row-sub">
                    <div class="fresh__programs-row partner__row sitemaps__row">
                        <ul>
                            <li>Честность и порядочность в работе с партнерами</li>
                            <li>Отсутствие любого переманивания Ваших клиентов</li>
                            <li>Честный процент вознаграждения </li>
                            <li>Доставка и установка продуктов в любом регионе</li>
                            <li>Мы являемся официальным партнером 1С с 1999 года</li>
                            <li>Посмотрите реальные отзывы о нашей работе</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="fresh__programs-item text_fz16">
                <div class="fresh__programs-head text_fz20 text_upper text_fw500 sitemaps__row parent">
                    реальные отзывы клиентов
                    <img src="<?=$imgPath?>arrow-down-light.svg" alt="arrow-down-light">
                </div>
                <div class="fresh__programs-body sitemaps__row-sub">
                    <div class="fresh__programs-row partner__row sitemaps__row">
                        <?php
                            $list = [
                                'Покупали Битрикс24, поставили максимально оперативно, в день заказа! Будем сотрудничать и дальше! Спасибо!',
                                'Новая поставка и новый рекорд. С момента оплаты до момента отгрузки - 40 минут.Браво !',
                                'Я думал с кем мне начать сотрудничать в сфере продаж программ 1С когда ко мне, как специалисту по 1С, обратились помочь с выбором и приобретением программ. Я был приятно удивлён скоростью реагирования на заказы и на мои вопросы. У нас в городе такого не встретишь. Всё честно и быстро. Буду рекомендовать сотрудничество с компанией Армекс знакомым 1Сникам.Благодарю!',
                                'Зарегистрировался чтоб сказать большое спасибо.Приятно удивлен. Процесс сопровождался вежливой и грамотной консультацией по всем непонятным мне моментам. Большие молодцы!',
                                'Работают очень аккуратно,вопросы решаются быстро,условия соблюдаются.Рекомендую.',
                                'Сотрудничаем уже 5 лет - все четко и быстро. Все вопросы решаются оперативно по почте или телефону.',
                                'Присоединюсь к положительным отзывам.Работаем давно с ними. Коробки - все в течении одного-двух дней после оплаты.В случае необходимости предоставляют грамотные консультации.',
                                'Сотрудничаем уже давно, все оперативно, отгрузка лицензий в день заказа. При необходимости проконсультируют.Будем работать дальше.',
                                'Зашел сказать - спасибо! Продукт отгружен, консультацию дали. Будем сотрудничать.',
                                'Сотрудничаю с данной компанией уже несколько лет!Быстрое решение всех вопросов, самый большой процент агентских!Клиенты с разных городов, все довольны! Спасибо компании Армэкс и лично Антону!»',
                                'Все соответствует описанию. Несколько раз заказывал у них ПП, все четко и честно. Рекомендую к сотрудничеству.',
                                'Очень приятно сотрудничать, быстро отвечают на вопросы! PSМоментально - в течении полудня.',
                                'Для меня Армекс лучшие. Сотрудничаю уже несколько лет.Доставка, поддержка- все на отлично.',
                                'Так вроде и так заказы идут :) Только вчера забрал у Вас 2 коробки. Все Ок - спасибо.'
                            ]
                        ?>
                        <ul class="partner__dotlist">
                            <?php
                                foreach ($list as $item) {
                                    ?>
                                    <li>
                                        <img src="<?=$imgPath?>quot.svg" alt="quot">
                                        <?=$item?>
                                    </li>
                                    <?php
                                }
                            ?>
                        </ul>
                        Отзывы взяты с сайта: <a href="https://forum.mista.ru/topic/783119" target="_blank">https://forum.mista.ru/topic/783119</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/consult.php", [
        'title' => 'Для получения условий партнерства – напишите нам',
        'descr' => 'Оставьте заявку и мы свяжемся с вами в ближайшее время для обсуждения деталей',
        'mail' => 'agent@armex.ru',
        'partner' => true
    ], ["MODE" => "php"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>