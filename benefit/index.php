<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - Наши преимущества");
    $APPLICATION->SetTitle("Армекс - Наши преимущества");
?>
<main class="benefit">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>Наши преимущества</span>
        </div>
    </div>
    <section class="benefit__main main__block block-top">
        <div class="top-shadow"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper">Наши преимущества</h1>
            <div class="benefit__items">
                <div class="benefit__item" id="fast">
                    <img src="<?=$beforePath?>benefit/benefit1.png" alt="" class="benefit__item-image">
                    <div class="benefit__item-info text_fz18">
                        <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                            <img src="<?=$beforePath?>benefit/benefit1.png" alt="" class="benefit__item-image">
                            Быстрая доставка
                        </h3>
                        Мы осуществляем поставку лицензий в течении 1-2 рабочих дней. <br>
                        Возможна поставка и установка продуктов нашим специалистом по Москве и удаленная установка для региональных клиентов.
                    </div>
                </div>
                <div class="benefit__item" id="mark">
                    <img src="<?=$beforePath?>benefit/benefit2.png" alt="" class="benefit__item-image">
                    <div class="benefit__item-info text_fz18">
                        <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                            <img src="<?=$beforePath?>benefit/benefit2.png" alt="" class="benefit__item-image">
                            Качественная установка
                        </h3>
                        Мы выполним качественную установку  1С, которая включает:
                        <br><br>
                        <ul>
                            <li>Установку платформы для всех пользователей и активация лицензий</li>
                            <li>Установку последнего релиза платформы и конфигурации</li>
                            <li>Генерация баз данных для нужного количества юридических лиц</li>
                            <li>Начальную загрузку данных и классификаторов</li>
                            <li>Настройка архивации баз данных и передача инструкции</li>
                            <li>Подключение к онлайн-сервису автоматического обновления и актуализации версии программы онлайн</li>
                            <li>Регистрация комплекта поставки в 1С и активация льготного периода 1С:Комплекта поддержки (1С:ИТС)</li>
                            <li>Проведение консультации по созданию и настройке личного кабинета на <a href="https://portal.1c.ru/" target="_blank">https://portal.1c.ru/</a></li>
                            <li>Дополнительно подключение сервисов 1C:ИТС: 1С:Отчетность, 1С:Cверка, 1С:Контрагент, 1С:ЭДО.</li>
                        </ul>
                    </div>
                </div>
                <div class="benefit__item" id="consult">
                    <img src="<?=$beforePath?>benefit/benefit3.png" alt="" class="benefit__item-image">
                    <div class="benefit__item-info text_fz18">
                        <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                            <img src="<?=$beforePath?>benefit/benefit3.png" alt="" class="benefit__item-image">
                            Квалифицированная линия консультаций
                        </h3>
                        Наша компания уделяет большое внимание качеству работы службы технической поддержки и обеспечению высокого уровня обслуживания пользователей. Специалисты линии консультаций имеют практический опыт работы с программами 1С и сертификаты фирмы 1С. Они не только разрешат трудности, возникающие в процессе использования программ, но и, проанализировав ошибки и пожелания по работе программных продуктов, передадут рекомендации по улучшению в отдел разработки.
                    </div>
                </div>
                <div class="benefit__item" id="garant">
                    <img src="<?=$beforePath?>benefit/benefit4.png" alt="" class="benefit__item-image">
                    <div class="benefit__item-info text_fz18">
                        <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                            <img src="<?=$beforePath?>benefit/benefit4.png" alt="" class="benefit__item-image">
                            30 дней гарантии
                        </h3>
                        Выполнение нашей компанией гарантийных обязательств по установке, внедрению и поддержке программных продуктов подтверждается наличием соответствующих статусов и сертификатов, а также юридически закрепленными обязательствами перед фирмой «1С».<br>
                        Наша компания имеет статусы «1С:Франчайзи» и «1С:Центр Компетенции по производству», качество работ подлежит контролю со стороны фирмы «1С», которая осуществляет мониторинг качества внедрений и выборочные проверки своих партнеров.
                        <br><br>
                        Все клиенты нашей компании при покупке программных продуктов получают:
                        <ul>
                            <li>Консультации по запуску и созданию резервных копий базы данных<li>Консультации по начальному заполнению баз данных</li>
                            <li>Начальные консультации по ведению учета</li>
                            <li>Линию консультаций «Армекс» и фирмы «1С» по телефону и e-mail</li>
                            <li>Извещение о выходе обновлений по e-mail или телефону</li>
                            <li>Заказ и скачивание обновлений на нашем сайте или на сайте фирмы «1С»</li>
                            <li>Бесплатную подписку на ИТС на 3 месяца</li>
                            <li>Интернет-поддержку зарегистрированных пользователей (система HelpDesk)</li>
                        </ul>
                    </div>
                </div>
                <div class="benefit__item" id="online">
                    <img src="<?=$beforePath?>benefit/benefit5.png" alt="" class="benefit__item-image">
                    <div class="benefit__item-info text_fz18">
                        <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                            <img src="<?=$beforePath?>benefit/benefit5.png" alt="" class="benefit__item-image">
                            Онлайн-обновления
                        </h3>
                        В блок установки 1С входит подключение программы к  онлайн-сервису автоматического обновления и актуализации версии программы онлайн. Это позволит вам автоматически получать последние версии программ и работать с самыми актуальными данными.
                    </div>
                </div>
                <div class="benefit__item" id="status">
                    <img src="<?=$beforePath?>benefit/benefit6.png" alt="" class="benefit__item-image">
                    <div class="benefit__item-info text_fz18">
                        <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                            <img src="<?=$beforePath?>benefit/benefit6.png" alt="" class="benefit__item-image">
                            Подтвержденные статусы компании
                        </h3>
                        Мы являемся постоянным партнером производителей программного обеспечения, таких как «1С», «Microsoft», Лаборатория Касперского. Совместно с фирмой «1С» выпущен программный продукт «1С:Полиграфия 8.0». Компания имеет множество  подтвержденных статусов и сертификатов.
                        <a href="/statuses/" class="button">
                            Смотреть статусы
                            <img src="<?=$imgPath?>arrow-right.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="benefit__item" id="projects">
                    <img src="<?=$beforePath?>benefit/benefit7.png" alt="" class="benefit__item-image">
                    <div class="benefit__item-info text_fz18">
                        <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                            <img src="<?=$beforePath?>benefit/benefit7.png" alt="" class="benefit__item-image">
                            1000+ выполненных проектов
                        </h3>
                        Лучшей оценкой нашей работы являются внедренные проекты и отзывы наших клиентов. За время работы нашими клиентами стали более 1000 компаний, из них более 500 клиентов – нашими постоянными клиентами. Мы нацелены на решение задач наших клиентов, укрепления и поддержания деловых доброжелательных взаимоотношений.
                        <a href="/cases/" class="button">
                            Смотреть кейсы
                            <img src="<?=$imgPath?>arrow-right.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="benefit__item" id="years">
                    <img src="<?=$beforePath?>benefit/benefit8.png" alt="" class="benefit__item-image">
                    <div class="benefit__item-info text_fz18">
                        <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                            <img src="<?=$beforePath?>benefit/benefit8.png" alt="" class="benefit__item-image">
                            20 лет работы на рынке
                        </h3>
                        Компания «Армекс» работает в области автоматизации предприятий и интернет-технологий с 1999 года. За время работы нашими клиентами стали более 1000 компаний различных отраслей и видов деятельности. Специалистами компании накоплен огромный опыт по решению типовых задач наших клиентов.
                    </div>
                </div>
                <div class="benefit__item">
                    <img src="<?=$beforePath?>benefit/benefit9.png" alt="" class="benefit__item-image">
                    <div class="benefit__item-info text_fz18">
                        <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                            <img src="<?=$beforePath?>benefit/benefit9.png" alt="" class="benefit__item-image">
                            +30 сертифицированных сотрудников
                        </h3>
                        В нашей компании работают высококвалифицированные специалисты, большинство из которых имеют профессиональные сертификаты. Квалификация и практический опыт наших сотрудников позволяют выбирать наиболее оптимальный и эффективный способ решения поставленных задач. 
                        <a href="/sertificates/" class="button">
                            Сертификаты сотрудников
                            <img src="<?=$imgPath?>arrow-right.svg" alt="">
                        </a>
                    </div>
                </div>
                <div class="benefit__item">
                    <img src="<?=$beforePath?>benefit/benefit10.png" alt="" class="benefit__item-image">
                    <div class="benefit__item-info text_fz18">
                        <h3 class="benefit__item-title text_fz24 text_fw600 text_upper">
                            <img src="<?=$beforePath?>benefit/benefit10.png" alt="" class="benefit__item-image">
                            300+ реальных отзывов клиентов
                        </h3>
                        За время работы компании мы завершили более 1000 проектов в различных отраслях.
                        <a href="/reviews/" class="button">
                            Смотреть отзывы
                            <img src="<?=$imgPath?>arrow-right.svg" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>