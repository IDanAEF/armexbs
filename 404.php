<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - Страница не найдена");
    $APPLICATION->SetTitle("Армекс - Страница не найдена");
?>
<main class="error404">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <span>Ошибка 404</span>
        </div>
    </div>
    <section class="error404__content main__block block-top text_fz20 text_fw300 text_center">
        <div class="top-shadow short"></div>
        <div class="container">
            <h1 class="text_red">404</h1>
            <h2 class="text_fz36 text_fw500 text_upper">Страница не найдена</h2>
            <p>Вы неправильно набрали адрес или такой страницы больше не существует</p>
            <br>
            <a href="/" class="text_fw500 text_underline">Вернуться на главную страницу</a>
        </div>
    </section>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>