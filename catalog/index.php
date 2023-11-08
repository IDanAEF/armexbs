<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Армекс - Каталог");
    $APPLICATION->SetTitle("Армекс - Каталог");
?>
<main class="catalog">
    <div class="breadcrumbs text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <?php if ($_GET['search-string']) : ?>
                <a href="/catalog/">Каталог</a>
                <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                <span>Поиск</span>
            <?php else : ?>
                <span>Каталог</span>
            <?php endif; ?>
        </div>
    </div>
    <section class="catalog__filter text_fz20<?=$_GET['search-string'] ? ' no-border reviews__main' : ''?>" id="search-page" data-text="<?=$_GET['search-string']?>">
        <div class="container">
            <?php if ($_GET['search-string']) : ?>
                <h1 class="text_fz42 text_fw600 text_upper page-h1">Поиск</h1>
                <form action="/catalog/" class="header__search static active" method="GET">
                    <button><img src="<?=$imgPath?>loop.svg" alt="Поиск"></button>
                    <input type="text" name="search-string" value="<?=$_GET['search-string']?>" required>
                </form>
            <?php else : ?>
            <?php
                $catsClass = CIBlockSection::GetList(
                    ["SORT" => "ASC"],
                    ['IBLOCK_ID' => 47, 'SECTION_ID' => 136],
                    false,
                    ['ID', 'NAME'],
                    []
                );
                $cats = [];
                while($cat = $catsClass->Fetch()) {
                    $cats[$cat['ID']] = $cat['NAME'];
                }
            ?>
            <div class="catalog__filter-control">
                <div class="catalog__filter-head body-click-target" data-content="filter-list1">
                    <div class="name">
                        <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                            <g clip-path="url(#clip0_203_447)">
                                <path d="M13.1249 21L7.87488 17.0625V12.5825L0.874878 4.7075V2.625C0.874878 1.92881 1.15144 1.26113 1.64372 0.768845C2.13601 0.276562 2.80368 0 3.49988 0L17.4999 0C18.1961 0 18.8638 0.276562 19.356 0.768845C19.8483 1.26113 20.1249 1.92881 20.1249 2.625V4.7075L13.1249 12.5825V21ZM9.62488 16.1875L11.3749 17.5V11.9175L18.3749 4.0425V2.625C18.3749 2.39294 18.2827 2.17038 18.1186 2.00628C17.9545 1.84219 17.7319 1.75 17.4999 1.75H3.49988C3.26781 1.75 3.04525 1.84219 2.88116 2.00628C2.71707 2.17038 2.62488 2.39294 2.62488 2.625V4.0425L9.62488 11.9175V16.1875Z" fill="#1A1A1A"/>
                            </g>
                            <defs>
                                <clipPath id="clip0_203_447">
                                    <rect width="21" height="21" fill="white"/>
                                </clipPath>
                            </defs>
                        </svg>
                        Категория<i class="text_normal">:</i> <span><?=isset($_GET['cat']) ? $cats[$_GET['cat']] : 'Все продукты'?></span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9" fill="none">
                        <path d="M7.93526 9.00005C7.63029 9.00058 7.32823 8.94084 7.04643 8.82425C6.76463 8.70767 6.50864 8.53653 6.29319 8.3207L0.146484 2.17283L1.78855 0.530762L7.93526 6.67747L14.082 0.530762L15.724 2.17283L9.57732 8.31954C9.36197 8.53558 9.10603 8.70693 8.82422 8.82371C8.54242 8.9405 8.24031 9.00043 7.93526 9.00005Z" fill="#1A1A1A"/>
                    </svg>
                </div>
                <ul class="catalog__filter-list body-click-content text_fz18 text_fw300" data-content="filter-list1">
                    <li <?=!isset($_GET['cat']) ? ' class="active"' : ''?> data-id="all">
                        <a href="/catalog/">Все продукты</a>
                    </li>
                    <?php
                        foreach($cats as $id => $cat) {
                            ?>
                            <li <?=isset($_GET['cat']) && $_GET['cat'] == $id ? ' class="active"' : ''?>>
                                <a href="/catalog/?cat=<?=$id?>"><?=$cat?></a>
                            </li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
            <div class="catalog__filter-control">
                <?php
                    $sorts = [
                        ['По умолчанию', 'SORT', 'ASC'],
                        ['Названия (А-Я)', 'NAME', 'ASC'],
                        ['Названия (Я-А)', 'NAME', 'DESC'],
                        ['По популярности (возрастание)', 'UF_POPULAR', 'ASC'],
                        ['По популярности (по убыванию)', 'UF_POPULAR', 'DESC'],
                        ['Цена (возрастание)', 'UF_PRICEFILTER', 'ASC'],
                        ['Цена (по убыванию)', 'UF_PRICEFILTER', 'DESC']
                    ];
                ?>
                <div class="catalog__filter-head body-click-target" data-content="filter-list2">
                    <div class="name">
                        <svg xmlns="http://www.w3.org/2000/svg" width="22" height="21" viewBox="0 0 22 21" fill="none">
                            <path d="M20.3336 15.5645L17.1547 18.7425L17.132 0H15.382L15.4047 18.7311L12.2373 15.5636L11 16.8L14.4291 20.2291C14.6729 20.4729 14.9623 20.6663 15.2808 20.7983C15.5993 20.9302 15.9407 20.9981 16.2854 20.9981C16.6302 20.9981 16.9716 20.9302 17.2901 20.7983C17.6086 20.6663 17.898 20.4729 18.1418 20.2291L21.5709 16.8L20.3336 15.5645Z" fill="#1A1A1A"/>
                            <path d="M10.5709 4.17263L7.14175 0.743502C6.64173 0.26627 5.97708 0 5.28587 0C4.59467 0 3.93002 0.26627 3.43 0.743502L0 4.17263L1.23725 5.40988L4.41612 2.23188L4.43887 20.9998H6.18887L6.16612 2.2415L9.33362 5.40988L10.5709 4.17263Z" fill="#1A1A1A"/>
                        </svg>
                        <span><?=isset($_COOKIE['sort-filter']) ? $sorts[$_COOKIE['sort-filter']][0] : $sorts[0][0]?></span>
                    </div>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="9" viewBox="0 0 16 9" fill="none">
                        <path d="M7.93526 9.00005C7.63029 9.00058 7.32823 8.94084 7.04643 8.82425C6.76463 8.70767 6.50864 8.53653 6.29319 8.3207L0.146484 2.17283L1.78855 0.530762L7.93526 6.67747L14.082 0.530762L15.724 2.17283L9.57732 8.31954C9.36197 8.53558 9.10603 8.70693 8.82422 8.82371C8.54242 8.9405 8.24031 9.00043 7.93526 9.00005Z" fill="#1A1A1A"/>
                    </svg>
                </div>
                <ul class="catalog__filter-list right body-click-content text_fz18 text_fw300" data-content="filter-list2" id="sort-filter">
                    <?php
                        foreach($sorts as $key => $sort) {
                            ?>
                            <li class="no-a<?=(isset($_COOKIE['sort-filter']) && $_COOKIE['sort-filter'] == $key) || (!isset($_COOKIE['sort-filter']) && $key == 0) ? ' active' : ''?>" data-prop="<?=$sort[1]?>" data-order="<?=$sort[2]?>"><?=$sort[0]?></li>
                            <?php
                        }
                    ?>
                </ul>
            </div>
            <?php endif; ?>
        </div>
    </section>
    <section class="catalog__list text_fz20">
        <div class="container">
            <div class="catalog__items" id="catalog" data-visible="12"<?=isset($_GET['cat']) ? ' data-cat="'.$_GET['cat'].'"' : ''?>>
                
            </div>
            <button class="border" id="catalog-more" data-page="1">
                Показать больше
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="13" viewBox="0 0 24 13" fill="none">
                    <path d="M-8.96454e-05 1.412L1.41191 0L11.2929 9.881C11.4804 10.0685 11.7347 10.1738 11.9999 10.1738C12.2651 10.1738 12.5194 10.0685 12.7069 9.881L22.5689 0.0170002L23.9829 1.431L14.1209 11.293C13.5583 11.8554 12.7954 12.1714 11.9999 12.1714C11.2044 12.1714 10.4415 11.8554 9.87891 11.293L-8.96454e-05 1.412Z" fill="#D7171F"/>
                </svg>
            </button>
        </div>
    </section>
    <section class="demo__banner short gold main__block">
        <div class="container">
            <div class="demo__banner-text text_fz20">
                <h2 class="text_fz32 text_fw600 text_upper text_red">поможем с выбором 1с</h2>
                Если вы не знаете, какой продукт подойдет вам больше, наши специалисты проведут для вас консультацию и подберут продукт с учетом особенностей бизнеса
            </div>
            <button class="text_fz20 text_fw700 body-click-target" data-content="feedback-choise">Подобрать продукт 1С</button>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/usage.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>