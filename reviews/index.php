<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Армекс - Отзывы");
    $APPLICATION->SetTitle("Армекс - Отзывы");

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $onPage = 9;

    $count = 0;
    $reviewsAll = CIBlockElement::GetList(
        ["SORT"=>"ASC"],
        ['IBLOCK_ID' => 53],
        false,
        false,
        ['ID']
    );

    while ($review = $reviewsAll->Fetch()) $count++;

    $reviews = CIBlockElement::GetList(
        ["SORT"=>"ASC"],
        ['IBLOCK_ID' => 53],
        false,
        [
            'nPageSize' => $onPage,
            'iNumPage' => $page
        ],
        ['ID', 'NAME', 'PREVIEW_TEXT', 'PROPERTY_UNDERTITLE', 'PROPERTY_CLIENT']
    );
?>
<main class="reviews">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
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
            <?php
                while ($review = $reviews->Fetch()) {
                    $client = CIBlockElement::GetList([], ['IBLOCK_ID' => 52, 'ID' => $review['PROPERTY_CLIENT_VALUE']], false, false, ['NAME', 'PREVIEW_PICTURE'])->Fetch();
                    ?>
                    <div class="reviews__list-item text_fz18" id="review<?=$review['ID']?>">
                        <div class="reviews__list-item-title">
                            <img src="<?=CFile::GetPath($client['PREVIEW_PICTURE'])?>" alt="<?=$client['NAME']?>">
                            <span class="text_fz16 text_fw300">
                                <b class="text_fz24 text_fw600"><?=$review['NAME']?></b>
                                <?=$review['PROPERTY_UNDERTITLE_VALUE']?>
                            </span>
                        </div>
                        <div class="reviews__list-item-descr">
                            <img src="<?=$imgPath?>quot.svg" alt="quot">
                            <?=$review['PREVIEW_TEXT']?>
                        </div>
                    </div>
                    <?php
                }
            ?>
            <?php if ($count > $onPage) : ?>
            <div class="clients__navigate text_fz20">
                <?php
                    for ($i = 1; $i <= ceil($count / $onPage); $i++) {
                        ?>
                        <a href="/reviews/?page=<?=$i?>"<?=$i == $page ? ' class="active"' : ''?>><?=$i?></a>
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