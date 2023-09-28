<?php
    if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();

    CModule::IncludeModule("iblock");
    use Bitrix\Main\Page\Asset;

    $assetInstance = Asset::getInstance();

    $imgPath = SITE_TEMPLATE_PATH.'/assets/images/';
    $beforePath = SITE_TEMPLATE_PATH.'/assets/before/';

    $contProps = [
        'PROPERTY_PHONE',
        'PROPERTY_ADDRESS',
        'PROPERTY_EMAIL',
        'PROPERTY_TIME',
        'PROPERTY_MAP'
    ];
    $contactsFetch = CIBlockElement::GetList([], ['IBLOCK_ID' => 46, 'ID' => 2157], false, false, $contProps)->Fetch();
    $contacts = [
        'address' => $contactsFetch['PROPERTY_ADDRESS_VALUE'],
        'time' => $contactsFetch['PROPERTY_TIME_VALUE'],
        'email' => $contactsFetch['PROPERTY_EMAIL_VALUE'],
        'phone' => $contactsFetch['PROPERTY_PHONE_VALUE'],
        'map' => $contactsFetch['PROPERTY_MAP_VALUE'],
    ];
?>
<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php
        $assetInstance->addCss(SITE_TEMPLATE_PATH."/assets/css/style.min.css");
        $assetInstance->addCss(SITE_TEMPLATE_PATH."/custom.css");

        $assetInstance->addJs(SITE_TEMPLATE_PATH."/assets/js/script.js");
        $assetInstance->addJs(SITE_TEMPLATE_PATH."/custom.js");
    ?>
    <title><?php $APPLICATION->ShowTitle() ?></title>
    <?$APPLICATION->ShowMeta("keywords")?>
    <?$APPLICATION->ShowMeta("description")?>

    <?php $APPLICATION->ShowHead() ?>
</head>
<body>
    <?$APPLICATION->ShowPanel();?>
    <header class="header">
        <div class="container">
            <a href="/" class="header__logo">
                <?php $APPLICATION->IncludeFile(SITE_DIR."include/header-logo.php", [], ["MODE" => "html"]) ?>
            </a>
            <div class="header__right">
                <nav class="header__menu body-click-content" data-content="menu">
                    <span class="header__menu-close body-click-close not-active"></span>
                    <div class="header__social mobile">
                        <?php $APPLICATION->IncludeFile(SITE_DIR."include/header-social.php", [], ["MODE" => "html"]) ?>
                    </div>
                    <ul class="header__menu-list text_fz16 text_upper">
                        <?php
                            $outMenu = [];
                            $mainMenu = CIBlockSection::GetTreeList(
                                ['IBLOCK_ID' => 47],
                                ['ID', 'NAME', 'CODE', 'DEPTH_LEVEL', 'UF_MOBILE']
                            );

                            $lastId = '';
                            
                            while($point = $mainMenu->Fetch()) {
                                if ($point['DEPTH_LEVEL'] < 2) {
                                    $outMenu[$point['ID']] = [
                                        'code' => $point['CODE'],
                                        'name' => $point['NAME'],
                                        'mobile' => $point['UF_MOBILE']
                                    ];

                                    $lastId = $point['ID'];
                                } else {
                                    $outMenu[$lastId]['sub'][$point['ID']] = [
                                        'code' => $point['CODE'],
                                        'name' => $point['NAME']
                                    ];
                                }
                            }

                            foreach($outMenu as $point) {
                                ?>
                                <li <?=$point['sub'] ? ' class="menu-item-has-children'.($point['mobile'] ? ' only-mobile' : '').'"' : ''?>>
                                    <a href="/<?=$point['code']?>/">
                                        <?=$point['name']?>
                                        <?php if ($point['sub']) : ?>
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M12 15.5C11.7374 15.5005 11.4772 15.449 11.2346 15.3486C10.9919 15.2483 10.7715 15.1009 10.586 14.915L5.29297 9.62103L6.70697 8.20703L12 13.5L17.293 8.20703L18.707 9.62103L13.414 14.914C13.2285 15.1001 13.0081 15.2476 12.7655 15.3482C12.5228 15.4488 12.2626 15.5004 12 15.5Z" fill="#1A1A1A"/>
                                        </svg>
                                        <?php endif; ?>
                                    </a>
                                    <?php if ($point['sub']) : ?>
                                    <ul class="sub-menu text_fz18 text_fw300">
                                        <?php
                                            foreach($point['sub'] as $subId => $sub) {
                                                ?>
                                                <li><a href="/<?=$point['code'] == 'catalog' ? 'catalog/?cat='.$subId : $sub['code']?>/"><?=$sub['name']?></a></li>
                                                <?php
                                            }
                                        ?>
                                    </ul>
                                    <?php endif; ?>
                                </li>
                                <?php
                            }
                        ?>
                    </ul>
                    <form action="" class="header__search">
                        <button><img src="<?=$imgPath?>loop.svg" alt="Поиск"></button>
                        <input type="text" name="search-string" required>
                    </form>
                </nav>
                <div class="header__phone">
                    <a href="tel:<?=str_replace(['(', ')', '-', ' '], '', $contacts['phone'])?>" class="text_fz16 text_fw500 text_upper"><?=$contacts['phone']?></a>
                    <span class="text_fz14 text_underline body-click-target" data-content="feedback-modal">Заказать звонок</span>
                </div>
                <div class="header__social">
                    <?php $APPLICATION->IncludeFile(SITE_DIR."include/header-social-short.php", [], ["MODE" => "html"]) ?>
                </div>
                <div class="header__mobile">
                    <a href="tel:<?=str_replace(['(', ')', '-', ' '], '', $contacts['phone'])?>">
                        <img src="<?=$imgPath?>phone-red.svg" alt="Телефон">
                    </a>
                    <div class="header__hamburger body-click-target not-active" data-content="menu">
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </header>