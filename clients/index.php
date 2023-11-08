<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "");
    $APPLICATION->SetPageProperty("title", "Армекс - Клиенты");
    $APPLICATION->SetTitle("Армекс - Клиенты");

    $page = isset($_GET['page']) ? $_GET['page'] : 1;
    $onPage = 12;

    $count = 0;
    $clientsAll = CIBlockElement::GetList(
        ["SORT"=>"ASC"],
        ['IBLOCK_ID' => 52],
        false,
        false,
        ['ID']
    );

    while ($client = $clientsAll->Fetch()) $count++;

    $clients = CIBlockElement::GetList(
        ["SORT"=>"ASC"],
        ['IBLOCK_ID' => 52],
        false,
        [
            'nPageSize' => $onPage,
            'iNumPage' => $page
        ],
        ['ID', 'NAME', 'PREVIEW_PICTURE', 'PREVIEW_TEXT', 'PROPERTY_WEBSITE']
    );
?>
<main class="clients">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            <span>Клиенты</span>
        </div>
    </div>
    <section class="clients__main main__block block-top">
        <div class="top-shadow short"></div>
        <div class="container">
            <h1 class="text_fz42 text_fw600 text_upper page-h1">Клиенты</h1>
            <div class="clients__list text_fz18">
                <?php
                    while ($client = $clients->Fetch()) {
                        ?>
                        <?php if ($client['PROPERTY_WEBSITE_VALUE']) : ?>
                        <a href="<?=strpos($client['PROPERTY_WEBSITE_VALUE'], 'http') === false ? 'http://'.$client['PROPERTY_WEBSITE_VALUE'] : $client['PROPERTY_WEBSITE_VALUE']?>" target="_blank" class="clients__item">
                        <?php else : ?>
                        <div class="clients__item">
                        <?php endif; ?>
                            <img src="<?=CFile::GetPath($client['PREVIEW_PICTURE'])?>" alt="<?=$client['NAME']?>">
                            <h3 class="text_fz20 text_fw600"><?=$client['NAME']?></h3>
                            <?=$client['PREVIEW_TEXT']?>
                        
                        <?php if ($client['PROPERTY_WEBSITE_VALUE']) : ?>
                        </a>
                        <?php else : ?>
                        </div>
                        <?php endif; ?>
                        <?php
                    }
                ?>
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