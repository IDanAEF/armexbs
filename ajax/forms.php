<?php
    require_once($_SERVER["DOCUMENT_ROOT"] . "/bitrix/modules/main/include/prolog_before.php");

    CModule::IncludeModule("iblock");
    CModule::IncludeModule("mail");

    $fields = [
        'feedname' => 'Имя',
        'feedphone' => 'Телефон',
        'feedmail' => 'E-mail',
        'feedcomment' => 'Комментарий',
        'feedproduct' => 'Товар',
        'feedproductid' => 'ID товара',
        'feedversion' => 'Версия товара',
        'feeddemos' => 'Демоверсия 1С',
        'feedurl' => 'На какой странице заполнена форма'
    ];

    $body = '';
    foreach ($fields as $name => $descr) {
        if ($_POST[$name]) $body .= $descr." - ".$_POST[$name]."\n";
    }

    $el = new CIBlockElement;
    $arProps = Array(
        "IBLOCK_ID" => 54,
        "IBLOCK_SECTION_ID" => $_POST['feedsection'],
        "PROPERTY_VALUES" => [537 => $body],
        "NAME" => $_POST['feedname'] ?: $_POST['feedphone'],
        "ACTIVE" => "Y",
    );
    $elemId = $el->Add($arProps);

    if ($_POST['feedproductid']) {
        $sectionProduct = CIBlockSection::GetList(
            ["SORT" => "ASC"],
            ['IBLOCK_ID' => 48, 'ID' => $_POST['feedproductid'], 'UF_POPULARFIX' => 0],
            false,
            ['UF_POPULAR'],
            false
        )->Fetch();

        if ($sectionProduct) {
            $count = (int)$sectionProduct['UF_POPULAR'] + 1;

            $bs = new CIBlockSection;
            $arFields = Array(
                'UF_POPULAR' => $count
            );
            $res = $bs->Update($_POST['feedproductid'], $arFields);
        }
    }

    $eventFields = [];
    $eventFields['FEEDELEM'] = $elemId;
    $eventFields['FEEDTHEME'] = $_POST['feedtheme'];
    foreach ($_POST as $key => $value) {
        if ($key != 'feedevent') $eventFields[mb_strtoupper($key)] = $value;
    }

    CEvent::Send('GLOBAL_FORM_FEED', 's1', $eventFields, "Y", $_POST['feedevent']);

    require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>