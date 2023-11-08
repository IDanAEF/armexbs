<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
    $APPLICATION->SetPageProperty("description", "Автоматизация производственных предприятий и коммерческих органицаций на базе программ 1С.");
    $APPLICATION->SetPageProperty("title", "Армекс - Главная");
    $APPLICATION->SetTitle("Армекс - Главная");
?>
<main class="main">
    <section class="main__promo simple-slider">
        <?php
            $props = [
                'ID',
                'NAME', 
                'PREVIEW_PICTURE', 
                'PREVIEW_TEXT',
                'PROPERTY_BTN_TEXT',
                'PROPERTY_BTN_LIK',
                'PROPERTY_BACK_CUSTOM',
                'PROPERTY_BACK_PICT',
                'PROPERTY_BTN_LIK_WHOLE'
            ];

            $banners = CIBlockElement::GetList(['sort' => 'asc'], ['IBLOCK_ID' => 44], false, false, $props);

            while($banner = $banners->Fetch()) {
                $back = CIBlockElement::GetProperty(44, $banner['ID'], [], ['CODE' => 'BACK_COLOR'])->Fetch()['VALUE_XML_ID'];
                $btnAct = CIBlockElement::GetProperty(44, $banner['ID'], [], ['CODE' => 'BTN_ACT'])->Fetch()['VALUE_XML_ID'];
                ?>
                <?php if ($banner['PROPERTY_BTN_LIK_VALUE']) : ?>
                <a href="<?=$banner['PROPERTY_BTN_LIK_VALUE']?>" class="main__promo-page simple-slider-item <?=$back?>"<?=$banner['PROPERTY_BACK_CUSTOM_VALUE'] && !$banner['PROPERTY_BACK_PICT_VALUE'] ? ' style="'.$banner['PROPERTY_BACK_CUSTOM_VALUE'].'"' : ''?>>
                <?php else : ?>
                <div class="main__promo-page simple-slider-item <?=$back?>"<?=$banner['PROPERTY_BACK_CUSTOM_VALUE'] && !$banner['PROPERTY_BACK_PICT_VALUE'] ? ' style="'.$banner['PROPERTY_BACK_CUSTOM_VALUE'].'"' : ''?>>
                <?php endif; ?>
                    <?php if ($banner['PROPERTY_BACK_PICT_VALUE']) :  ?>
                        <img src="<?=CFile::GetPath($banner['PROPERTY_BACK_PICT_VALUE'])?>" alt="<?=$banner['NAME']?>" class="img_bg">
                    <?php endif; ?>
                    <div class="container">
                        <div class="main__promo-text text_fz20 text_fw300">
                            <h2 class="text_fz42 text_fw600 text_upper"><?=$banner['NAME']?></h2>
                            <span><?=$banner['PREVIEW_TEXT']?></span>
                            <img src="<?=CFile::GetPath($banner['PREVIEW_PICTURE'])?>" alt="<?=$banner['NAME']?>" class="main__promo-image">
                            <?php if ($btnAct) : ?>
                                <span class="button text_fz24 body-click-target reset-act" data-content="<?=$btnAct?>"><?=$banner['PROPERTY_BTN_TEXT_VALUE']?></span>
                            <?php else : ?>
                                <span class="button text_fz24"><?=$banner['PROPERTY_BTN_TEXT_VALUE']?></span>
                            <?php endif; ?>
                        </div>
                    </div>
                <?php if ($banner['PROPERTY_BTN_LIK_VALUE']) : ?>
                </a>
                <?php else : ?>
                </div>
                <?php endif; ?>
                <?php
            }
        ?>
        <div class="dots simple-slider-dots"></div>
    </section>
    <section class="main__results main__block">
        <div class="container">
            <div class="main__results-list text_fz20">
                <a href="/benefit/#years" class="main__results-item">
                    <img src="<?=$beforePath?>result1.png" alt="20 лет работы на рынке" class="img_bg">
                    <div class="icon">
                        <img src="<?=$beforePath?>result-icon1.png" alt="20 лет работы на рынке">
                    </div>
                    <div class="main__results-text">
                        <span class="text_fz80 text_fw600 text_red">20</span>
                        лет работы <br>на рынке
                    </div>
                </a>
                <a href="/sertificates/" class="main__results-item">
                    <img src="<?=$beforePath?>result2.png" alt="+30 сертифицированных сотрудников" class="img_bg">
                    <div class="icon">
                        <img src="<?=$beforePath?>result-icon2.png" alt="+30 сертифицированных сотрудников">
                    </div>
                    <div class="main__results-text">
                        <span class="text_fz80 text_fw600 text_red">+30</span>
                        сертифицированных <br>сотрудников
                    </div>
                </a>
                <a href="/benefit/#garant" class="main__results-item">
                    <img src="<?=$beforePath?>result3.png" alt="30 дней гарантии" class="img_bg">
                    <div class="icon">
                        <img src="<?=$beforePath?>result-icon3.png" alt="30 дней гарантии">
                    </div>
                    <div class="main__results-text">
                        <span class="text_fz80 text_fw600 text_red">30</span>
                        дней <br>гарантии
                    </div>
                </a>
                <a href="/cases/" class="main__results-item half">
                    <img src="<?=$beforePath?>result4.png" alt="1000+ выполненных проектов" class="img_bg">
                    <div class="icon">
                        <img src="<?=$beforePath?>result-icon4.png" alt="1000+ выполненных проектов">
                    </div>
                    <div class="main__results-text">
                        <span class="text_fz80 text_fw600 text_red">1000+</span>
                        выполненных <br>проектов
                    </div>
                </a>
                <a href="/reviews/" class="main__results-item half">
                    <img src="<?=$beforePath?>result5.png" alt="300+ реальных отзывов клиентов" class="img_bg">
                    <div class="icon">
                        <img src="<?=$beforePath?>result-icon5.png" alt="300+ реальных отзывов клиентов">
                    </div>
                    <div class="main__results-text">
                        <span class="text_fz80 text_fw600 text_red">300+</span>
                        реальных отзывов <br>клиентов
                    </div>
                </a>
            </div>
            <a href="/company/" class="button text_fz20">
                О компании
                <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            </a>
        </div>
    </section>
    <section class="main__try main__block slider mobile-only" id="try">
        <div class="container">
            <h2 class="text_fz36 text_fw600 text_upper text_red">Попробуйте бесплатно</h2>
            <div class="main__try-list text_fz18 text_fw300 slider-list">
                <div class="main__try-track slider-track">
                    <a href="/demoversii-1s/" class="main__try-item slider-item">
                        <img src="<?=$beforePath?>try1.png" alt="Демоверсии 1С">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">Демоверсии 1С</h3>
                            <span>Протестируйте онлайн все возможности выбранного продукта 1С</span>
                        </div>
                    </a>
                    <a href="/1s-fresh/" class="main__try-item slider-item">
                        <img src="<?=$beforePath?>try2.png" alt="1С:Fresh">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">1С:Fresh</h3>
                            <span>Работайте в типовых версиях 1С без покупки коробочного решения</span>
                        </div>
                    </a>
                    <a href="/arenda-1s/" class="main__try-item slider-item">
                        <img src="<?=$beforePath?>try3.png" alt="Аренда 1С">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">Аренда 1С</h3>
                            <span>Обеспечьте полную сохранность данных и бесперебойную работу программ 1С на наших серверах</span>
                        </div>
                    </a>
                    <a href="/bitriks24/" class="main__try-item slider-item">
                        <img src="<?=$beforePath?>try4.png" alt="Битрикс24">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">Битрикс24</h3>
                            <span>Оптимизируйте все бизнес-процессы с помощью онлайн CRM</span>
                        </div>
                    </a>
                    <a href="/1s-grm/" class="main__try-item slider-item">
                        <img src="<?=$beforePath?>try5.png" alt="1С:ГРМ">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">1С:ГРМ</h3>
                            <span>Используйте онлайн кастомизированные и отраслевые конфигурации 1С</span>
                        </div>
                    </a>
                    <a href="/1s-dlya-vashey-otrasli/" class="main__try-item slider-item">
                        <img src="<?=$beforePath?>try6.png" alt="1С для вашей отрасли">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">1С для вашей <br>отрасли</h3>
                            <span>Тестируйте конфиграции 1С для вашей отрасли и ваших задач</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="dots slider-dots mobile"></div>
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
    <section class="main__products main__block">
        <?php
            $cats = CIBlockSection::GetList(
                ["SORT"=>"ASC"],
                ['IBLOCK_ID' => 47, 'SECTION_ID' => 136, 'UF_MAIN' => 1],
                false,
                ['ID', 'NAME', 'PICTURE', 'DESCRIPTION'],
                false
            );
        ?>
        <div class="container">
            <h2 class="text_fz36 text_fw400">Продукты 1С</h2>
            <div class="main__products-list text_fz18 text_fw300">
                <?php
                    while ($cat = $cats->Fetch()) {
                        $products = CIBlockSection::GetList(
                            ["SORT"=>"ASC"],
                            ['IBLOCK_ID' => 48, 'UF_CAT' => $cat['ID']],
                            false,
                            ['ID', 'CODE', 'NAME'],
                            false
                        );
                        ?>
                        <div class="main__products-item">
                            <img src="<?=CFile::GetPath($cat['PICTURE'])?>" alt="<?=$cat['NAME']?>">
                            <div class="shape"></div>
                            <div class="main__products-left">
                                <h3 class="text_fz24 text_fw600 text_upper text_red">
                                    <a href="/catalog/?cat=<?=$cat['ID']?>">
                                        <?=$cat['NAME']?>
                                    </a>
                                </h3>
                                <span>
                                    <?=$cat['DESCRIPTION']?>
                                </span>
                            </div>
                            <div class="main__products-right text_fz20 text_red text_fw400">
                                <?php
                                    while ($product = $products->Fetch()) {
                                        ?>
                                        <a href="/catalog/<?=$product['CODE']?>/" class="main__products-mark">
                                            <i class="text_normal"><?=$product['NAME']?></i>
                                        </a>
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                        <?php
                    }
                ?>
            </div>
            <a href="/catalog/" class="button text_fz20">
                Смотреть весь каталог
                <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            </a>
        </div>
    </section>
    <section class="main__reviews main__block slider mobile-only">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Отзывы</h2>
            <div class="main__reviews-list slider-list">
                <div class="main__reviews-track slider-track text_fz18 text_fw300">
                    <?php
                        // $reviews = CIBlockElement::GetList(
                        //     ["SORT" => "ASC"],
                        //     ['IBLOCK_ID' => 53, '=PROPERTY_MAIN_PAGE' => 'Y'],
                        //     false,
                        //     ['nPageSize' => 6, 'iNumPage' => 1],
                        //     ['ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_UNDERTITLE']
                        // );
                        $reviews = CIBlockElement::GetList(
                            ["SORT" => "ASC"],
                            ['IBLOCK_ID' => 53,],
                            false,
                            [],
                            ['ID', 'NAME', 'PREVIEW_TEXT', 'PREVIEW_PICTURE', 'PROPERTY_UNDERTITLE', 'PROPERTY_MAIN_PAGE']
                        );
                        $count = 0;
                        
                        while ($review = $reviews->Fetch()) {
                            $count++;

                            if ($review['PROPERTY_MAIN_PAGE_VALUE'] != 'Y') continue;

                            $page = ceil($count / 9);
                            ?>
                            <a href="/reviews/?page=<?=$page?>#review<?=$review['ID']?>" class="main__reviews-item slider-item">
                                <div class="main__reviews-head">
                                    <img src="<?=CFile::GetPath($review['PREVIEW_PICTURE'])?>" alt="<?=$review['NAME']?>">
                                    <div class="main__reviews-name text_fz16">
                                        <span class="text_fz24 text_fw600"><?=$review['NAME']?></span>
                                        <?=$review['PROPERTY_UNDERTITLE_VALUE']?>
                                    </div>
                                </div>
                                <div class="main__reviews-body">
                                    <img src="<?=$imgPath?>points.svg" alt="points">
                                    <?=(strlen($review['PREVIEW_TEXT']) < 230 ? $review['PREVIEW_TEXT'] : mb_substr($review['PREVIEW_TEXT'], 0, 230).'...')?>
                                </div>
                            </a>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="dots slider-dots mobile"></div>
            <a href="/reviews/" class="button text_fz20">
                Все отзывы
                <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            </a>
        </div>
    </section>
    <section class="main__cases main__block slider mobile-only">
        <div class="container">
            <?php
                $cases = CIBlockElement::GetList(
                    ["SORT" => "ASC"],
                    ['IBLOCK_ID' => 49],
                    false,
                    ['nTopCount' => 4],
                    ['ID', 'CODE', 'NAME', 'PREVIEW_PICTURE', 'PROPERTY_CLIENT']
                );
            ?>
            <h2 class="text_fz36 text_fw400">Кейсы</h2>
            <div class="main__cases-list slider-list">
                <div class="main__cases-track slider-track">
                    <?php
                        while ($case = $cases->Fetch()) {
                            $client = CIBlockElement::GetList(
                                ["SORT" => "ASC"],
                                ['IBLOCK_ID' => 52, 'ID' => $case['PROPERTY_CLIENT_VALUE']],
                                false,
                                false,
                                ['NAME', 'PREVIEW_PICTURE']
                            )->Fetch();
                            ?>
                            <div class="main__cases-item slider-item">
                                <div class="main__cases-left">
                                    <img src="<?=CFile::GetPath($client['PREVIEW_PICTURE'])?>" alt="<?=$client['NAME']?>">
                                    <span class="text_fz20 text_fw600"><?=$client['NAME']?></span>
                                    <a href="/cases/<?=$case['CODE']?>/" class="button text_fz20">
                                        Подробнее
                                        <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
                                    </a>
                                </div>
                                <div class="main__cases-right text_fz14 text_fw300">
                                    <?php
                                        $results = CIBlockElement::GetProperty(
                                            49,
                                            $case['ID'],
                                            [],
                                            ['CODE' => 'RESULTS']
                                        );

                                        while ($result = $results->Fetch()) {
                                            $num = preg_replace('/ \:\: .*/', '', $result['VALUE']);
                                            $name = preg_replace('/.* \:\: /', '', $result['VALUE']);
                                            $offset = strpos($num, '%') === false ? 0 : 170 - (1.7 * (int)str_replace('%', '', $num));
                                            ?>
                                            <div class="main__cases-info">
                                                <div class="main__cases-info-circle text_fz20 text_fw600 text_red">
                                                    <svg class="progress-ring" viewBox="0 0 60 60">
                                                        <circle
                                                            stroke="#D7171F"
                                                            stroke-width="6"
                                                            fill="#fff"
                                                            r="27"
                                                            cx="30"
                                                            cy="30"
                                                            style="stroke-dashoffset: <?=$offset?>" />
                                                    </svg>
                                                    <i class="text_normal"><?=$num?></i>
                                                </div>
                                                <span><?=$name?></span>
                                            </div>
                                            <?php
                                        }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                    ?>
                </div>
            </div>
            <div class="dots slider-dots mobile"></div>
            <a href="/cases/" class="button text_fz20">
                Все кейсы
                <img src="<?=$imgPath?>arrow-right.svg" alt="arrow-right">
            </a>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>