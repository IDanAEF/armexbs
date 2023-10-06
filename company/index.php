<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Армекс - О компании");
    $APPLICATION->SetTitle("Армекс - О компании");
?>
<main class="company">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <span>О компании</span>
        </div>
    </div>
    <section class="company__main main__block block-top default-text">
        <div class="top-shadow"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper page-h1">о компании</h1>
            <div class="company__mission text_fz20 text_white text_center">
                <picture>
                    <source srcset="<?=$beforePath?>company/company1-mobile.jpg" media="(max-width: 576px)">
                    <img src="<?=$beforePath?>company/company1.jpg" alt="Наша миссия" class="img_bg">
                </picture>
                <span>Наша миссия</span>
                <i class="text_fz32 text_fw600">Создавать оптимальное IT-пространство для клиентов, используя современные информационные системы и новейшие технологии</i>
            </div>
        </div>
    </section>
    <section class="company__work main__block">
        <div class="container">
            <h2 class="text_fz36 text_upper text_fw400">Принципы работы</h2>
            <div class="company__work-list text_white text_fz20 text_fw600">
                <div class="company__work-item">
                    <picture>
                        <source srcset="<?=$beforePath?>company/company2-mobile.jpg" media="(max-width: 576px)">
                        <img src="<?=$beforePath?>company/company2.jpg" alt="Высокое качество продуктов и профессионализм сотрудников" class="img_bg">
                    </picture>
                    <span>Высокое качество продуктов и профессионализм сотрудников</span>
                    <a href="/cases/" class="button text_fz18">
                        Смотреть кейсы
                        <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                    </a>
                </div>
                <div class="company__work-item">
                    <picture>
                        <source srcset="<?=$beforePath?>company/company3-mobile.jpg" media="(max-width: 576px)">
                        <img src="<?=$beforePath?>company/company3.jpg" alt="Удовлетворение реальных потребностей клиентов" class="img_bg">
                    </picture>
                    <span>Удовлетворение реальных потребностей клиентов</span>
                    <a href="/reviews/" class="button text_fz18">
                        Отзывы клиентов
                        <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                    </a>
                </div>
                <div class="company__work-item">
                    <picture>
                        <source srcset="<?=$beforePath?>company/company4-mobile.jpg" media="(max-width: 576px)">
                        <img src="<?=$beforePath?>company/company4.jpg" alt="Надежность и нацеленность на долгосрочное сотрудничество" class="img_bg">
                    </picture>
                    <span>Надежность и нацеленность на долгосрочное сотрудничество</span>
                    <a href="/partnership/" class="button text_fz18">
                        Условия для партнеров
                        <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                    </a>
                </div>
            </div>
        </div>
    </section>
    <div class="company__empty main__block">
        <div class="container">
            <h2 class="text_fz36 text_upper text_fw400">Наши преимущества</h2>
        </div>
    </div>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/usage.php", [], ["MODE" => "html"]) ?>
    <div class="main__block">
        <div class="container">
            <a href="/benefit/" class="button text_fz20">
                Смотреть все
                <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            </a>
        </div>
    </div>
    <section class="company__stats main__block">
        <div class="container">
            <h2 class="text_fz36 text_upper text_fw400">
                Статусы
                <span class="text_fz18 text_fw300">
                    Наша компания выпускает совместные продукты и является постоянным партнером известных производителей программного обеспечения
                </span>
            </h2>
            <div class="company__stats-list">
                <span><img src="<?=$beforePath?>gifts/statuses4.png" alt="status1"></span>
                <span><img src="<?=$beforePath?>gifts/statuses2.png" alt="status2"></span>
                <span><img src="<?=$beforePath?>gifts/statuses3.png" alt="status3"></span>
                <span><img src="<?=$beforePath?>gifts/statuses5.png" alt="status4"></span>
            </div>
            <a href="/statuses/" class="button text_fz20">
                Смотреть все
                <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            </a>
        </div>
    </section>
    <section class="company__ways main__block">
        <div class="container">
            <h2 class="text_fz36 text_upper text_fw400">Направления</h2>
            <div class="company__ways-list">
                <div class="company__ways-item text_fz18">
                    <div class="company__ways-title text_fz20 text_fw600">
                        <img src="<?=$imgPath?>gear.svg" alt="Автоматизация предприятий">
                        Автоматизация предприятий
                    </div>
                    <ul>
                        <li>Разработка и внедрение систем управления на базе 1С</li>
                        <li>Разработка отраслевых программных продуктов на базе 1С</li>
                        <li>Оказание услуг по разработке и внедрению, обучению, консультационной и методической поддержке</li>
                    </ul>
                </div>
                <div class="company__ways-item text_fz18">
                    <div class="company__ways-title text_fz20 text_fw600">
                        <img src="<?=$imgPath?>network.svg" alt="Интернет – технологи">
                        Интернет – технологии
                    </div>
                    <ul>
                        <li>Разработка систем управления сайтом</li>
                        <li>Разработка интернет-проектов различной степени сложности</li>
                        <li>Консультации по выведению бизнеса в онлайн-пространство</li>
                        <li>Оптимизация сайтов и рекламная поддержка</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <section class="company__clients main__block">
        <div class="container">
            <h2 class="text_fz36 text_upper text_fw400">Наши клиенты</h2>
            <div class="company__clients-list">
                <?php
                    for($i = 1; $i <= 12; $i++) {
                        ?>
                        <span><img src="<?=$beforePath?>company/clients<?=$i?>.png" alt=""></span>
                        <?php
                    }
                ?>
            </div>
            <a href="/clients/" class="button text_fz20">
                Все клиенты
                <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            </a>
        </div>
    </section>
    <section class="company__banners main__block">
        <div class="container">
            <div class="company__banner">
                <picture>
                    <source srcset="<?=$beforePath?>company/company5-mobile.jpg" media="(max-width: 576px)">
                    <img src="<?=$beforePath?>company/company5.jpg" alt="Наши преимущества" class="img_bg">
                </picture>
                <span class="text_fz32 text_white text_fw600 text_upper">Наши преимущества</span>
                <a href="/benefit/" class="button text_fz20">
                    Подробнее
                    <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                </a>
            </div>
            <div class="company__banner">
                <picture>
                    <source srcset="<?=$beforePath?>company/company6-mobile.jpg" media="(max-width: 576px)">
                    <img src="<?=$beforePath?>company/company6.jpg" alt="Структура компании" class="img_bg">
                </picture>
                <span class="text_fz32 text_white text_fw600 text_upper">Структура компании</span>
                <a href="/structure/" class="button text_fz20">
                    Подробнее
                    <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                </a>
            </div>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>