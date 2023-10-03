<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - Отзывы");
    $APPLICATION->SetTitle("Армекс - Отзывы");
?>
<main class="reviews">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>Отзывы</span>
        </div>
    </div>
    <section class="reviews__main block-top">
        <div class="top-shadow short"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper page-h1">Отзывы</h1>
            <p>Компания «Армекс» работает в области автоматизации предприятий и интернет-технологий с 1999 года. За время работы нашими клиентами стали более 2000 компаний различных отраслей и видов деятельности. Специалистами компании накоплен огромный опыт по решению типовых задач наших клиентов.Лучшей оценкой нашей работы являются внедренные проекты и отзывы наших клиентов.</p>
        </div>
    </section>
    <section class="reviews__list main__block">
        <div class="container">
            <div class="reviews__list-item text_fz18">
                <div class="reviews__list-item-title">
                    <img src="<?=$beforePath?>company/clients3.png" alt="">
                    <span class="text_fz16 text_fw300">
                        <b class="text_fz24 text_fw600">Андрей Добронравов</b>
                        Заместитель генерального директора по развитию ЗАО "Глобал Маркетинг
                    </span>
                </div>
                <div class="reviews__list-item-descr">
                    <img src="<?=$imgPath?>quot.svg" alt="">
                    Основная задача, которое руководство типографии поставило перед компанией "Армекс", как разработчиком отраслевого программного продукта 1С, заключалась в следующем: внедрить универсальное решение, которое обеспечит работу всего персонала типографии в единой системе, где для каждого сотрудника доступна вся информация, необходимая ему для работы. И мы этого добились. Система обеспечивает единое управление и контроль за работой пользователей. Количество ошибок при этом резко сократилось — как в документообороте, так и при выполнении заказов, – и это самое главное.
                </div>
            </div>
            <div class="reviews__list-item text_fz18">
                <div class="reviews__list-item-title">
                    <img src="<?=$beforePath?>company/clients3.png" alt="">
                    <span class="text_fz16 text_fw300">
                        <b class="text_fz24 text_fw600">Андрей Добронравов</b>
                        Заместитель генерального директора по развитию ЗАО "Глобал Маркетинг
                    </span>
                </div>
                <div class="reviews__list-item-descr">
                    <img src="<?=$imgPath?>quot.svg" alt="">
                    Основная задача, которое руководство типографии поставило перед компанией "Армекс", как разработчиком отраслевого программного продукта 1С, заключалась в следующем: внедрить универсальное решение, которое обеспечит работу всего персонала типографии в единой системе, где для каждого сотрудника доступна вся информация, необходимая ему для работы. И мы этого добились. Система обеспечивает единое управление и контроль за работой пользователей. Количество ошибок при этом резко сократилось — как в документообороте, так и при выполнении заказов, – и это самое главное.
                </div>
            </div>
            <?php if ($count > $onPage) : ?>
            <div class="clients__navigate text_fz20">
                <?php
                    for ($i = 1; $i <= ceil($count / $onPage); $i++) {
                        ?>
                        <a href="/clients/?page=<?=$i?>"<?=$i == $page ? ' class="active"' : ''?>><?=$i?></a>
                        <?php
                    }
                ?>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>