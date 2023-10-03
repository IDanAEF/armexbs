<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - CRM Битрикс24");
    $APPLICATION->SetTitle("Армекс - CRM Битрикс24");
?>
<main class="crm">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>CRM Битрикс24</span>
        </div>
    </div>
    <?php
        $props = [
            'NAME', 
            'PREVIEW_TEXT',
            'PROPERTY_BTN_TEXT',
            'PROPERTY_BTN_LINK',
        ];

        $banner = CIBlockElement::GetList([], ['IBLOCK_ID' => 45, 'ID' => 2155], false, false, $props)->Fetch();
        $btnAct = CIBlockElement::GetProperty(45, 2155, [], ['CODE' => 'BTN_ACT'])->Fetch()['VALUE_XML_ID'];
    ?>
    <section class="crm__promo text_fz18 text_fw300">
        <div class="container">
            <div class="crm__promo-text">
                <h1 class="text_fz36 text_fw600 text_upper"><?=$banner['NAME']?></h1>
                <?=$banner['PREVIEW_TEXT']?>
                <picture>
                    <source srcset="<?=$beforePath?>crm-promo-mobile.png" media="(max-width: 992px)">
                    <img src="<?=$beforePath?>crm-promo.png" alt="<?=$banner['NAME']?>">
                </picture>
                <?php if ($btnAct) : ?>
                    <button class="text_fz24 text_fw700 body-click-target" data-content="<?=$btnAct?>"><?=$banner['PROPERTY_BTN_TEXT_VALUE']?></button>
                <?php else : ?>
                    <a href="<?=$banner['PROPERTY_BTN_LINK_VALUE']?>" class="text_fz24 text_fw700 button"><?=$banner['PROPERTY_BTN_TEXT_VALUE']?></a>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <section class="crm__why main__block">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Почему мы?</h2>
        </div>
        <div class="grm__points text_fz20 text_center">
            <div class="container three">
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point12.png" alt="">
                    <span class="text_fw500">Сертифицированный партнер компании <br>«1С-Битрикс»</span>
                </div>
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point13.png" alt="">
                    <span class="text_fw500">Комплекс услуг: продажа, внедрение и обслуживание Битрикс24</span>
                </div>
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point14.png" alt="">
                    <span class="text_fw500">Качественные интеграции <br>с продуктами 1С</span>
                </div>
            </div>
        </div>
    </section>
    <section class="demo__banner blue short">
        <div class="container">
            <h2 class="text_fz32 text_fw600 text_upper text_red">Тест-драйв Битрикс24 на 30 дней</h2>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-test">Попробовать бесплатно</button>
        </div>
    </section>
    <section class="crm__instr main__block">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Битрикс24 – это более 10 основных рабочих инструментов для ведения бизнеса</h2>
        </div>
        <div class="grm__points text_fz20 text_center">
            <div class="container three">
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point15.png" alt="">
                    <span class="text_fw500">Живая лента</span>
                    Обмен сообщениями, оповещения, объявления и тд.
                </div>
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point16.png" alt="">
                    <span class="text_fw500">Задачи</span>
                    Постановка, контроль, делегирование и оценка исполнения
                </div>
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point17.png" alt="">
                    <span class="text_fw500">Чат и видео</span>
                    Корпоративный мессенджер и бизнес-чат
                </div>
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point18.png" alt="">
                    <span class="text_fw500">Открытые линии</span>
                    Объединение <br>онлайн-коммуникаций с клиентами
                </div>
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point19.png" alt="">
                    <span class="text_fw500">Документы</span>
                    Совместная работа в документах Google Docs и Microsoft Office
                </div>
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point20.png" alt="">
                    <span class="text_fw500">CRM-система</span>
                    Объединение всех каналов коммуникаций с клиентами
                </div>
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point21.png" alt="">
                    <span class="text_fw500">Диск</span>
                    Облачное хранение данных
                </div>
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point22.png" alt="">
                    <span class="text_fw500">Почта</span>
                    Готовый почтовый сервер для вашей компании
                </div>
                <div class="grm__point">
                    <img src="<?=$beforePath?>points/point23.png" alt="">
                    <span class="text_fw500">IP-телефония</span>
                    Обеспечение приема звонков и вызовов абонентов
                </div>
            </div>
        </div>
        <div class="container text_fz20 text_center">
            И другие инструменты для успешного ведения бизнеса
        </div>
    </section>
    <section class="crm__price main__block">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Сколько это стоит?</h2>
            <?php
                $chars1 = [
                    [
                        'Совместная работа',
                        1,
                        [
                            'Чат',
                            'Видеозвонки HD',
                            'Календарь',
                            'Соцсеть компании',
                            'Новости',
                            'База знаний'
                        ]
                    ],
                    ['Задачи и проекты', 1],
                    ['CRM', 1],
                    ['Диск', 1],
                    ['Контакт-центр', 1],
                    ['Сайты', 1],
                    ['Интернет-магазин', 0],
                    ['Маркетинг', 0],
                    ['Документы онлайн', 0],
                    ['Сквозная аналитика', 0],
                    ['Автоматизация бизнеса', 0],
                    ['HR', 0],
                    ['Поддержка', 0],
                    ['Администрирование', 0]
                ];
                $chars2 = [
                    [
                        'Совместная работа',
                        2,
                        [
                            'Чат',
                            'Видеозвонки HD',
                            'Календарь',
                            'Соцсеть компании',
                            'Новости',
                            'База знаний'
                        ]
                    ],
                    ['Задачи и проекты', 2],
                    ['CRM', 2],
                    ['Диск', 2],
                    ['Контакт-центр', 2],
                    ['Сайты', 2],
                    ['Интернет-магазин', 2],
                    ['Маркетинг', 0],
                    ['Документы онлайн', 0],
                    ['Сквозная аналитика', 0],
                    ['Автоматизация бизнеса', 0],
                    ['HR', 0],
                    ['Поддержка', 1],
                    ['Администрирование', 0]
                ];
                $chars3 = [
                    [
                        'Совместная работа',
                        2,
                        [
                            'Чат',
                            'Видеозвонки HD',
                            'Календарь',
                            'Соцсеть компании',
                            'Новости',
                            'База знаний'
                        ]
                    ],
                    ['Задачи и проекты', 2],
                    ['CRM', 2],
                    ['Диск', 2],
                    ['Контакт-центр', 2],
                    ['Сайты', 2],
                    ['Интернет-магазин', 2],
                    ['Маркетинг', 2],
                    ['Документы онлайн', 2],
                    ['Сквозная аналитика', 0],
                    ['Автоматизация бизнеса', 0],
                    ['HR', 0],
                    ['Поддержка', 2],
                    ['Администрирование', 1]
                ];
                $chars4 = [
                    [
                        'Совместная работа',
                        3,
                        [
                            'Чат',
                            'Видеозвонки HD',
                            'Календарь',
                            'Соцсеть компании',
                            'Новости',
                            'База знаний'
                        ]
                    ],
                    ['Задачи и проекты', 3],
                    ['CRM', 3],
                    ['Диск', 3],
                    ['Контакт-центр', 3],
                    ['Сайты', 3],
                    ['Интернет-магазин', 3],
                    ['Маркетинг', 3],
                    ['Документы онлайн', 3],
                    ['Сквозная аналитика', 3],
                    ['Автоматизация бизнеса', 3],
                    ['HR', 3],
                    ['Поддержка', 3],
                    ['Администрирование', 3]
                ];

                function outChars($arr) {
                    foreach($arr as $item) {
                        ?>
                        <div class="crm__price-item-char">
                            <div class="crm__price-item-char-name">
                                <?=$item[0]?>
                                <div class="rounds">
                                    <?php
                                        for($i = 0; $i < 3; $i++) {
                                            ?>
                                            <span <?=$i < $item[1] ? ' class="active"' : ''?>></span>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <?php if ($item[2]) : ?>
                            <ul class="crm__price-item-char-sub text_fz14">
                                <?php
                                    foreach($item[2] as $point) {
                                        ?>
                                        <li><?=$point?></li>
                                        <?php
                                    }
                                ?>
                            </ul>
                            <?php endif; ?>
                        </div>
                        <?php
                    }
                }
            ?>
            <div class="crm__price-list text_fz20 text_fw300">
                <div class="crm__price-item green">
                    <div class="crm__price-item-head green">
                        <b>Бесплатный</b>
                        Начните работать онлайн и продавать больше с CRM
                    </div>
                    <div class="crm__price-item-body">
                        <div class="users text_fz16">неограниченно</div>
                        <div class="price text_fw400">Бесплатно</div>
                        <div class="for text_fz14">за всех пользователей</div>
                        <div class="size text_fw400">5 гб</div>
                        <?php outChars($chars1) ?>
                    </div>
                </div>
                <div class="crm__price-item">
                    <div class="crm__price-item-head">
                        <b>Базовый</b>
                        Для эффективной работы небольших компаний и отделов продаж
                    </div>
                    <div class="crm__price-item-body">
                        <div class="users text_fz16">5 пользователей</div>
                        <div class="price text_fw400">1494 ₽/мес</div>
                        <div class="for text_fz14">за всех пользователей</div>
                        <div class="size text_fw400">24 гб</div>
                        <?php outChars($chars2) ?>
                    </div>
                </div>
                <div class="crm__price-item">
                    <div class="crm__price-item-head">
                        <b>Стандартный</b>
                        Для совместной работы всей компании или рабочих групп
                    </div>
                    <div class="crm__price-item-body">
                        <div class="users text_fz16">50 пользователей</div>
                        <div class="price text_fw400">3594 ₽/мес</div>
                        <div class="for text_fz14">за всех пользователей</div>
                        <div class="size text_fw400">100 гб</div>
                        <?php outChars($chars3) ?>
                    </div>
                </div>
                <div class="crm__price-item">
                    <div class="crm__price-item-head">
                        <b>Профессиональный</b>
                        Для максимальной автоматизации всех процессов в компании
                    </div>
                    <div class="crm__price-item-body">
                        <div class="users text_fz16">неограниченно</div>
                        <div class="price text_fw400">7194 ₽/мес</div>
                        <div class="for text_fz14">за всех пользователей</div>
                        <div class="size text_fw400">1024 гб</div>
                        <?php outChars($chars4) ?>
                    </div>
                </div>
            </div>
            <button class="button text_fz20 text_fw700 body-click-target" data-content="feedback-join">Подключить</button>
        </div>
    </section>
    <section class="crm__abilit main__block text_fz20">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Основные возможности Битрикс24</h2>
            <ul>
                <li>Создайте карточку на каждого клиента и храните его историю заказов в «облаке»</li>
                <li>Отслеживайте каждый заказ онлайн: сроки выполнения, этапы работ, выставление счетов, оплаты, задолженности</li>
                <li>Информируйте клиентов о готовности заказов с помощью email или sms-рассылки или звоните с использованием ip-телефонии прямо из CRM-системы</li>
                <li>Упорядочивайте работу с документами и избавьтесь от бесконечной пересылки разных версий: ведите совместное редактирование договоров, управляйте доступом, контролируйте внесение правок</li>
                <li>Готовьте и получайте отчетность по количеству выполненных заказов, сколько находится в работе и сколько запланировано, ведите учет занятости и рабочего времени ваших сотрудников, получайте на почту отзывы о работе ваших менеджеров, которые клиенты оставляют в онлайн-системе</li>
                <li>Интегрируйте Битрикс24 с продуктами 1С</li>
            </ul>
        </div>
    </section>
    <section class="demo__banner blue short">
        <div class="container">
            <h2 class="text_fz32 text_fw600 text_upper text_red">Тест-драйв Битрикс24 на 30 дней</h2>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-test">Попробовать бесплатно</button>
        </div>
    </section>
    <section class="crm__actions main__block text_fz20">
        <div class="container">
            <div class="crm__actions-item">
                <span>Работа с контакт-центром в CRM Битрикс24 (интеграция с Telegram) Расчет полиграфического заказа</span>
                <div class="crm__actions-preview">
                    <iframe class="img_bg" src="https://www.youtube.com/embed/51OXvv1vJno?si=cA3rvtZ9qf7RO-tS" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
            <div class="crm__actions-item">
                <span>Интеграция 1С:Полиграфия с CRM Битрикс24</span>
                <div class="crm__actions-preview">
                    <iframe class="img_bg" src="https://www.youtube.com/embed/o7vCOaXYZe0?si=-kumzFJgZ4WTm_Ox" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>