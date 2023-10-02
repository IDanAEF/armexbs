<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("title", "Армекс - Подарки");
    $APPLICATION->SetTitle("Армекс - Подарки");
?>
<main class="gifts">
    <div class="breadcrumbs line text_fz18 text_upper">
        <div class="container">
            <a href="/">Главная</a>
            <img src="<?=$imgPath?>arrow-right.svg" alt="">
            <span>Подарки</span>
        </div>
    </div>
    <?php
        $props = [
            'NAME', 
            'PREVIEW_PICTURE', 
            'PREVIEW_TEXT',
            'PROPERTY_BTN_TEXT',
            'PROPERTY_BTN_LINK',
            'PROPERTY_BACK_CUSTOM',
        ];

        $banner = CIBlockElement::GetList([], ['IBLOCK_ID' => 45, 'ID' => 2203], false, false, $props)->Fetch();
        $back = CIBlockElement::GetProperty(45, 2203, [], ['CODE' => 'BACK_COLOR'])->Fetch()['VALUE_XML_ID'];
        $btnAct = CIBlockElement::GetProperty(45, 2203, [], ['CODE' => 'BTN_ACT'])->Fetch()['VALUE_XML_ID'];
    ?>
    <section class="main__promo gifts__promo">
        <div class="main__promo-page active <?=$back?>"<?=$banner['PROPERTY_BACK_CUSTOM_VALUE'] ? ' style="'.$banner['PROPERTY_BACK_CUSTOM_VALUE'].'"' : ''?>>
            <div class="container">
                <div class="main__promo-text text_fz20 text_fw300">
                    <h1 class="text_fz42 text_fw600 text_upper"><?=$banner['NAME']?></h1>
                    <span><?=$banner['PREVIEW_TEXT']?></span>
                    <img src="<?=CFile::GetPath($banner['PREVIEW_PICTURE']);?>" alt="<?=$banner['NAME']?>" class="main__promo-image">
                    <?php if ($btnAct) : ?>
                        <span class="button text_fz24 body-click-target" data-content="<?=$btnAct?>"><?=$banner['PROPERTY_BTN_TEXT_VALUE']?></span>
                    <?php else : ?>
                        <a href="<?=$banner['PROPERTY_BTN_LINK_VALUE']?>" class="button text_fz24"><?=$banner['PROPERTY_BTN_TEXT_VALUE']?></a>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    <section class="gifts__descr main__block half text_fz20">
        <div class="container">
            Приобретая у нас продукты 1С, вы можете получить в подарок сертификаты самых известных и популярных магазинов или бонусные часы работы наших специалистов
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/usage.php", [], ["MODE" => "html"]) ?>
    <section class="gifts__parts main__block half">
        <div class="container">
            <div class="gifts__parts-col text_fz18">
                <div class="gifts__parts-title text_fz20 text_red text_fw600 text_upper">
                    <img src="<?=$imgPath?>gift.svg" alt="">
                    Подарочные <br>сертификаты
                </div>
                <ul class="gifts__parts-list text_fz20">
                    <li>
                        <span>Сумма чека</span>
                        <span>Сумма сертификата</span>
                    </li>
                    <li>
                        <span>10 000₽</span>
                        <div class="line"></div>
                        <span><b>1 000₽</b></span>
                    </li>
                    <li>
                        <span>20 000₽</span>
                        <div class="line"></div>
                        <span><b>2 000₽</b></span>
                    </li>
                    <li>
                        <span>50 000₽</span>
                        <div class="line"></div>
                        <span><b>5 000₽</b></span>
                    </li>
                    <li>
                        <span>100 000₽</span>
                        <div class="line"></div>
                        <span><b>10 000₽</b></span>
                    </li>
                    <li>
                        <span>300 000₽</span>
                        <div class="line"></div>
                        <span><b>30 000₽</b></span>
                    </li>
                    <li>
                        <span>500 000₽</span>
                        <div class="line"></div>
                        <span><b>50 000₽</b></span>
                    </li>
                </ul>
                <div class="gifts__parts-content text_fz20">
                    <p class="text_center">Доступные подарочные сертификаты</p>
                    <div class="row text_fz18">
                        <ul>
                            <li>М.Видео</li>
                            <li>Ситилинк</li>
                        </ul>
                        <ul>
                            <li>Л`Этуаль</li>
                            <li>Рив Гош</li>
                        </ul>
                        <ul>
                            <li>Детский Мир</li>
                            <li>Спортмастер</li>
                        </ul>
                        <ul>
                            <li>Озон</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gifts__parts-col text_fz18">
                <div class="gifts__parts-title text_fz20 text_red text_fw600 text_upper">
                    <img src="<?=$imgPath?>comp.svg" alt="">
                    Услуги <br>нашей компании
                </div>
                <ul class="gifts__parts-list text_fz20">
                    <li>
                        <span>Сумма чека</span>
                        <span>Количество бонусных часов</span>
                    </li>
                    <li>
                        <span>50 000₽</span>
                        <div class="line"></div>
                        <span><b>2 часа</b></span>
                    </li>
                    <li>
                        <span>100 000₽</span>
                        <div class="line"></div>
                        <span><b>4 часа</b></span>
                    </li>
                    <li>
                        <span>300 000₽</span>
                        <div class="line"></div>
                        <span><b>12 часов</b></span>
                    </li>
                    <li>
                        <span>500 000₽</span>
                        <div class="line"></div>
                        <span><b>20 часов</b></span>
                    </li>
                </ul>
                <div class="gifts__parts-content text_fz20">
                    <p>Вы можете получить определенное количество бонусных часов работы наших специалистов, в зависимости от суммы чека.</p>
                    <p>Бонусные часы можно потратить на консультации с нашими специалистами или на кастомизацию продуктов 1С под вашу компанию</p>
                </div>
            </div>
        </div>
    </section>
    <section class="gifts__clients main__block">
        <div class="container">
            <div class="gifts__clients-col">
                <h2 class="text_fz24 text_fw500 text_upper text_center">наши статусы</h2>
                <div class="gifts__clients-stats">
                    <img src="<?=$beforePath?>gifts/statuses1.png" alt="">
                    <img src="<?=$beforePath?>gifts/statuses2.png" alt="">
                    <img src="<?=$beforePath?>gifts/statuses3.png" alt="" class="desk">
                    <img src="<?=$beforePath?>gifts/statuses4.png" alt="">
                    <img src="<?=$beforePath?>gifts/statuses5.png" alt="">
                    <img src="<?=$beforePath?>gifts/statuses3.png" alt="" class="mobile">
                </div>
                <a href="/statuses/" class="button text_fz20">
                    Все статусы
                    <img src="<?=$imgPath?>arrow-right.svg" alt="">
                </a>
            </div>
            <div class="gifts__clients-col">
                <h2 class="text_fz24 text_fw500 text_upper text_center">наши клиенты</h2>
                <div class="gifts__clients-cases">
                    <span><img src="<?=$beforePath?>gifts/clients1.png" alt=""></span>
                    <span><img src="<?=$beforePath?>gifts/clients2.png" alt=""></span>
                    <span><img src="<?=$beforePath?>gifts/clients3.png" alt=""></span>
                    <span><img src="<?=$beforePath?>gifts/clients4.png" alt=""></span>
                    <span><img src="<?=$beforePath?>gifts/clients5.png" alt=""></span>
                    <span><img src="<?=$beforePath?>gifts/clients6.png" alt=""></span>
                </div>
                <a href="/clients/" class="button text_fz20">
                    Все клиенты
                    <img src="<?=$imgPath?>arrow-right.svg" alt="">
                </a>
            </div>
        </div>
    </section>
    <section class="gifts__service main__block text_fz20">
        <div class="container">
            <h2 class="text_fz24 text_fw500 text_upper">Условия акции</h2>
            Обращаем внимание, что приобретая несколько программных продуктов, ваши подарки и бонусы суммируются, и вы получаете несколько подарков. И конечно, эти подарочные карты вы можете использовать не только сами, но и подарить вашим близким и друзьям!
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>