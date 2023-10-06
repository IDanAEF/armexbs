<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

    CModule::IncludeModule("iblock");

    $filter = ['IBLOCK_ID' => 48];

    if ($_POST['cat']) $filter['UF_CAT'] = $_POST['cat'];
    if ($_POST['search-string']) $filter['%NAME'] = $_POST['search-string'];

    $sort = ['NAME' => "ASC"];
    $sorts = [
        ['NAME', 'ASC'],
        ['NAME', 'DESC'],
        ['UF_POPULAR', 'ASC'],
        ['UF_POPULAR', 'DESC'],
        ['UF_PRICEFILTER', 'ASC'],
        ['UF_PRICEFILTER', 'DESC']
    ];

    if (isset($_COOKIE['sort-filter']) && !$_POST['search-string']) {
        $sort = [];
        $sort[$sorts[$_COOKIE['sort-filter']][0]] = $sorts[$_COOKIE['sort-filter']][1];
    }

    $catalog = CIBlockSection::GetList(
        $sort,
        $filter,
        false,
        [
            'ID',
            'NAME',
            'PICTURE',
            'DESCRIPTION',
            'UF_PRICE'
        ],
        [
            'nPageSize' => $_POST['visible'],
            'iNumPage' => $_POST['page']
        ]
    );

    while($elem = $catalog->Fetch()) {
        ?>
        <div class="catalog__item">
            <div class="img">
                <?php if ($elem['PICTURE']) : ?>
                    <img src="<?=CFile::GetPath($elem['PICTURE'])?>" alt="<?=$elem['NAME']?>">
                <?php endif; ?>
            </div>
            <div class="text">
                <h4 class="text_fz20 text_fw600 text_upper"><?=$elem['NAME']?></h4>
                <span class="text_upper"><?=$elem['UF_PRICE']?></span>
                <a href="/catalog/product<?=$elem['ID']?>/" class="button">Подробнее</a>
            </div>
        </div>
        <?php
    }

    require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>