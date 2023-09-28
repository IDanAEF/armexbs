<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - 1С:ГРМ");
    $APPLICATION->SetTitle("Армекс - 1С:ГРМ");
?>
<main class="grm">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>1С:ГРМ</span>
        </div>
    </div>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/pages-promo.php", ['id' => 2156], ["MODE" => "php"]) ?>
    <section class="demo__banner">
        <div class="container">
            <h2 class="text_fz32 text_fw600 text_upper text_red">Тест-драйв 1С:ГРМ на 30 дней</h2>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-test">Попробовать бесплатно</button>
        </div>
    </section>
    <section class="grm__points main__block text_fz20 text_center">
        <div class="container">
            <div class="grm__point">
                <img src="<?=$beforePath?>points/point1.png" alt="">
                <span class="text_fw500">Это просто</span>
                Легкая и быстрая регистрация в сервисе
            </div>
            <div class="grm__point">
                <img src="<?=$beforePath?>points/point2.png" alt="">
                <span class="text_fw500">Это надежно</span>
                Решение для максимальной скорости и безопасности
            </div>
            <div class="grm__point">
                <img src="<?=$beforePath?>points/point3.png" alt="">
                <span class="text_fw500">Это удобно</span>
                Работайте в 1С в любом месте и в любое время
            </div>
            <div class="grm__point">
                <img src="<?=$beforePath?>points/point4.png" alt="">
                <span class="text_fw500">Это выгодно</span>
                Платите только за подключенные продукты
            </div>
        </div>
    </section>
    <section class="grm__tariffs main__block half text_fz20">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Тарифы</h2>
            <table>
                <tbody>
                    <tr>
                        <td style="width: 50%"><b>Название</b></td>
                        <td style="width: 50%"><b>Цена, без НДС</b></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center"><b>Подключение сервисов</b></td>
                        
                    </tr>
                    <tr>
                        <td>1C:Бухгалтерия 8</td>
                        <td>34 ₽</td>
                    </tr>
                    <tr>
                        <td>1С:Розница 8</td>
                        <td>34 ₽</td>
                    </tr>
                    <tr>
                        <td>1С:Управление торговлей 8</td>
                        <td>36 ₽</td>
                    </tr>
                    <tr>
                        <td>1С:Управление нашей фирмой</td>
                        <td>36 ₽</td>
                    </tr>
                    <tr>
                        <td>1С:Документооборот 8 ПРОФ</td>
                        <td>45 ₽</td>
                    </tr>
                    <tr>
                        <td>1С:Зарплата и Управление Персоналом 8</td>
                        <td>36 ₽</td>
                    </tr>
                    <tr>
                        <td>1C:Комплексная автоматизация 8</td>
                        <td>52 ₽</td>
                    </tr>
                    <tr>
                        <td>1С:Предприятие 8. ERP Управление предприятием 2</td>
                        <td>74 ₽</td>
                    </tr>
                    <tr>
                        <td>1С:Предприятие 8. СRM ПРОФ</td>
                        <td>45 ₽</td>
                    </tr>
                    <tr>
                        <td>1C:Управление торговлей и взаимоотношениями с клиентами (СRM)</td>
                        <td>44 ₽</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center"><b>Для расширения дискового пространства</b></td>
                        
                    </tr>
                    <tr>
                        <td>Диск 10 (10 Гб дополнительного дискового пространства)</td>
                        <td>6 ₽</td>
                    </tr>
                    <tr>
                        <td>Диск 10 архивный</td>
                        <td>1.2 ₽</td>
                    </tr>
                    <tr>
                        <td colspan="2" style="text-align:center"><b>Собственные разработки на базе «1С:Предприятие»</b></td>
                        
                    </tr>
                    <tr>
                        <td>Рабочее место платформа «1С:Предприятие»</td>
                        <td>30 ₽</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>
    <section class="demo__banner short">
        <div class="container">
            <h2 class="text_fz32 text_fw600 text_upper text_red">Тест-драйв 1С:ГРМ на 30 дней</h2>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-test">Попробовать бесплатно</button>
        </div>
    </section>
    <section class="grm__service main__block text_fz20">
        <div class="container">
            <h2 class="text_fz36 text_fw400">
                <svg xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27" fill="none">
                    <path d="M3.17918 23.876L9.50605 15.0779L0 12.209L1.47942 7.42739L10.9855 10.9658L10.7022 0H15.4867L15.1719 11.157L24.5521 7.61865L26 12.4959L16.3366 15.3967L22.5375 24.0354L18.6344 27L12.8111 17.8194L7.1138 26.7769L3.17918 23.876Z" fill="#D7171F"/>
                </svg>
                Условия предоставления
            </h2>
            По стандартному тарифу демо-период предоставляется каждому конечному пользователю однократно для каждой конфигурации, сроком до 30 дней.
            <br><br>
            По окончании демо-периода подписка автоматически переходит в платный режим.
            <br><br>
            Создание информационной базы возможно в файловом или клиент-серверном варианте:
            <ul>
                <li>Файловый режим работы рекомендуется для информационных баз, в которых предполагается одновременная работа до 5 пользователей. Для файловой информационной базы предоставляется до 30 Гб суммарного объема данных, включая 5 Гб для рабочей информационной базы и 25 Гб на все ее резервные копии.</li>
                <li>Клиент-серверный вариант работы рекомендуется для «тяжелых» информационных баз, а также для информационных баз, в которых предполагается одновременная работа от 6 до 50 пользователей. Для клиент-серверной базы предоставляется не более 60 Гб суммарного объема данных, включая 10 Гб для рабочей информационной базы и 50 Гб для ее резервных копий.</li>
            </ul>
            Тарифы на рабочие места программ «1С: Предприятие 8» едины для файловых и клиент-серверных баз и приведены в таблице. Минимальный заказ для клиент-серверной информационной базы — 6 рабочих мест, при большем числе оплачивается по фактическому количеству рабочих мест.
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>