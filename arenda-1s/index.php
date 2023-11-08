<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Армекс - Аренда 1C");
    $APPLICATION->SetTitle("Армекс - Аренда 1C");
?>
<main class="rent">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <span>Аренда 1C</span>
        </div>
    </div>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/pages-promo.php", ['id' => 2154], ["MODE" => "php"]) ?>
    <section class="demo__banner">
        <div class="container">
            <h2 class="text_fz32 text_fw600 text_upper text_red">Тест-драйв сервера на 30 дней</h2>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-test">Попробовать бесплатно</button>
        </div>
    </section>
    <section class="grm__points main__block text_fz20 text_center">
        <div class="container three">
            <div class="grm__point">
                <img src="<?=$beforePath?>points/point4.png" alt="Экономия на приобретении ПО">
                <span class="text_fw500">Экономия на приобретении ПО</span>
            </div>
            <div class="grm__point">
                <img src="<?=$beforePath?>points/point5.png" alt="Доступ 24/7 с любого компьютера">
                <span class="text_fw500">Доступ 24/7 с любого компьютера</span>
            </div>
            <div class="grm__point">
                <img src="<?=$beforePath?>points/point6.png" alt="Ежедневное автоматическое резервирование">
                <span class="text_fw500">Ежедневное автоматическое резервирование</span>
            </div>
            <div class="grm__point">
                <img src="<?=$beforePath?>points/point7.png" alt="Бесплатное обновление типовых продуктов 1С">
                <span class="text_fw500">Бесплатное обновление типовых продуктов 1С</span>
            </div>
            <div class="grm__point">
                <img src="<?=$beforePath?>points/point8.png" alt="Бесперебойное функционирование оборудования">
                <span class="text_fw500">Бесперебойное функционирование оборудования</span>
            </div>
            <div class="grm__point">
                <img src="<?=$beforePath?>points/point9.png" alt="Сокращение расходов на обслуживающий персонал">
                <span class="text_fw500">Сокращение расходов на обслуживающий персонал</span>
            </div>
        </div>
    </section>
    <section class="grm__tariffs main__block half text_fz20">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Тарифы</h2>
            <div class="rent__plans">
                <span class="text_fw600">Скидки</span>
                <div class="rent__plans-list">
                    <div class="rent__plans-item active" data-pay1="700" data-pay2="1000" data-pay3="1250">
                        <div>1 месяц — <b>0%</b></div>
                        <div class="point"></div>
                    </div>
                    <div class="rent__plans-item" data-pay1="665" data-pay2="950" data-pay3="1187.5">
                        <div>3 месяца — <b>5%</b></div>
                        <div class="point"></div>
                    </div>
                    <div class="rent__plans-item" data-pay1="630" data-pay2="900" data-pay3="1125">
                        <div>6 месяцев — <b>10%</b></div>
                        <div class="point"></div>
                    </div>
                    <div class="rent__plans-item" data-pay1="595" data-pay2="850" data-pay3="1062.5">
                        <div>12 месяцев — <b>15%</b></div>
                        <div class="point"></div>
                    </div>
                </div>
            </div>
            <div class="scrollable-table">
                <table>
                    <tbody>
                        <tr>
                            <td style="width: 25%"></td>
                            <td style="width: 25%"><b>Аренда сервера</b></td>
                            <td style="width: 25%"><b>Стандарт</b></td>
                            <td style="width: 25%">
                                <b>ПРОФ </b>
                                <img src="<?=$imgPath?>recomend.png" alt="recomend">
                            </td>
                        </tr>
                        <tr>
                            <td>Стоимость</td>
                            <td class="payment-rent">700 ₽/мес</td>
                            <td class="payment-rent">1000 ₽/мес</td>
                            <td class="payment-rent">1250 ₽/мес</td>
                        </tr>
                        <tr>
                            <td>Доступ через браузер или тонкий клиент 1С</td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                        </tr>
                        <tr>
                            <td>Доступ через удаленный рабочий стол (RDP)</td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                        </tr>
                        <tr>
                            <td>1С:Бухгалтерия ПРОФ</td>
                            <td></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                        </tr>
                        <tr>
                            <td>1С:Зарплата и управление персоналом ПРОФ</td>
                            <td></td>
                            <td></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                        </tr>
                        <tr>
                            <td>Лицензии на платформу 1С:Предприятие</td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                        </tr>
                        <tr>
                            <td>Работа с измененными конфигурациями и базами 1С</td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                        </tr>
                        <tr>
                            <td>Бесплатная установка и перенос баз данных в облако</td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                        </tr>
                        <tr>
                            <td>Неограниченное количество баз данных</td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td>2 базы данных</td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                        </tr>
                        <tr>
                            <td>Ежедневное резервное копирование</td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                            <td><img src="<?=$imgPath?>green-check.svg" alt="green-check"></td>
                        </tr>
                        <tr>
                            <td>Доступ к серверу 1С и размещение баз данных на SQL сервере</td>
                            <td></td>
                            <td>500 ₽/мес</td>
                            <td>500 ₽/мес</td>
                        </tr>
                        <tr>
                            <td>Место на диске <br>(дополнительно 10 ГБ + 150 ₽/мес)</td>
                            <td>5 ГБ</td>
                            <td>5 ГБ</td>
                            <td>5 ГБ</td>
                        </tr>
                        <tr>
                            <td colspan="4" style="text-align: center"><b>Подключение сервисов</b></td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <b>1С-Отчетность</b>
                                <br><br>
                                Сервис позволяет сдавать отчётность прямо из 1С во все контролирующие органы: ФНС, ПФР, ФСС, Федеральная служба государственной статистики, Росалкоголь регулирование
                            </td>
                            <td>5900 ₽/год</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <b>1С-Старт ЭДО</b>
                                <br><br>
                                Сервис для обмена электронными документами между организациями, сокращает затраты на бумажный документооборот, исключает ошибки ручного ввода, упрощает сверку
                            </td>
                            <td>3000 ₽/год</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <b>1С-Контрагент</b>
                                <br><br>
                                Самостоятельно заполняет реквизиты контрагентов в документах, проверяет достоверность информации, актуальность указанных реквизитов, финансовое положение юр. лица
                            </td>
                            <td>4800 ₽/год</td>
                        </tr>
                        <tr>
                            <td colspan="3">
                                <b>1С:СПАРКИ-РИСКИ</b>
                                <br><br>
                                Функциональный аналитический инструмент для проверки надежности контрагентов с точки зрения налоговых и кредитных рисков, легко интегрируется с программами 1С
                            </td>
                            <td>3000 ₽/год</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </section>
    <section class="demo__banner short">
        <div class="container">
            <h2 class="text_fz32 text_fw600 text_upper text_red">Тест-драйв сервера на 30 дней</h2>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-test">Попробовать бесплатно</button>
        </div>
    </section>
    <section class="grm__service main__block text_fz20 out-ul">
        <div class="container">
            <h2 class="text_fz36 text_fw400">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none">
                    <path d="M3.17918 23.876L9.50605 15.0779L0 12.209L1.47942 7.42739L10.9855 10.9658L10.7022 0H15.4867L15.1719 11.157L24.5521 7.61865L26 12.4959L16.3366 15.3967L22.5375 24.0354L18.6344 27L12.8111 17.8194L7.1138 26.7769L3.17918 23.876Z" fill="#D7171F"/>
                </svg>
                Внимание
            </h2>
            Не сдаются в аренду:  
            <ul>
                <li>1С:УНФ 8. Полиграфия 2</li>
                <li>Модуль «Полиграфия 2 для 1С:ERP 8</li>
            </ul>
            При приобретении лицензий на данные продукты, вы можете взять в аренду лицензии на платформу 1с и сервер приложений или выделенный аппаратный сервер. 
            <br><br>
            Установка приобретенных лицензий на облачные сервера выполняется нашими специалистами бесплатно.
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>