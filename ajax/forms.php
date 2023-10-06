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
        'feedversion' => 'Версия товара'
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

    $eventFields = [];
    $eventFields['FEEDELEM'] = $elemId;
    $eventFields['FEEDTHEME'] = $_POST['feedtheme'];
    foreach ($_POST as $key => $value) {
        if ($key != 'feedevent') $eventFields[mb_strtoupper($key)] = $value;
    }

    CEvent::Send('GLOBAL_FORM_FEED', 's1', $eventFields, "Y", $_POST['feedevent']);

    require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/epilog_after.php");
?>