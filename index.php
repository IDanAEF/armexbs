<?php
    require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
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
                'PROPERTY_BACK_PICT'
            ];

            $banners = CIBlockElement::GetList(['sort' => 'asc'], ['IBLOCK_ID' => 44], false, false, $props);

            while($banner = $banners->Fetch()) {
                $back = CIBlockElement::GetProperty(44, $banner['ID'], [], ['CODE' => 'BACK_COLOR'])->Fetch()['VALUE_XML_ID'];
                $btnAct = CIBlockElement::GetProperty(44, $banner['ID'], [], ['CODE' => 'BTN_ACT'])->Fetch()['VALUE_XML_ID'];
                ?>
                <div class="main__promo-page simple-slider-item <?=$back?>"<?=$banner['PROPERTY_BACK_CUSTOM_VALUE'] && !$banner['PROPERTY_BACK_PICT_VALUE'] ? ' style="'.$banner['PROPERTY_BACK_CUSTOM_VALUE'].'"' : ''?>>
                    <?php if ($banner['PROPERTY_BACK_PICT_VALUE']) :  ?>
                        <img src="<?=CFile::GetPath($banner['PROPERTY_BACK_PICT_VALUE'])?>" alt="<?=$banner['NAME']?>" class="img_bg">
                    <?php endif; ?>
                    <div class="container">
                        <div class="main__promo-text text_fz20 text_fw300">
                            <h2 class="text_fz42 text_fw600 text_upper"><?=$banner['NAME']?></h2>
                            <span><?=$banner['PREVIEW_TEXT']?></span>
                            <img src="<?=CFile::GetPath($banner['PREVIEW_PICTURE'])?>" alt="<?=$banner['NAME']?>" class="main__promo-image">
                            <?php if ($btnAct) : ?>
                                <span class="button text_fz24 body-click-target" data-content="<?=$btnAct?>"><?=$banner['PROPERTY_BTN_TEXT_VALUE']?></span>
                            <?php else : ?>
                                <a href="<?=$banner['PROPERTY_BTN_LIK_VALUE']?>" class="button text_fz24"><?=$banner['PROPERTY_BTN_TEXT_VALUE']?></a>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
                <?php
            }
        ?>
        <div class="dots simple-slider-dots"></div>
    </section>
    <section class="main__results main__block">
        <div class="container">
            <div class="main__results-list text_fz20">
                <a href="/benefit/#years" class="main__results-item">
                    <img src="<?=$beforePath?>result1.png" alt="" class="img_bg">
                    <div class="icon">
                        <img src="<?=$beforePath?>result-icon1.png" alt="">
                    </div>
                    <div class="main__results-text">
                        <span class="text_fz80 text_fw600 text_red">20</span>
                        лет работы <br>на рынке
                    </div>
                </a>
                <a href="/sertificates/" class="main__results-item">
                    <img src="<?=$beforePath?>result2.png" alt="" class="img_bg">
                    <div class="icon">
                        <img src="<?=$beforePath?>result-icon2.png" alt="">
                    </div>
                    <div class="main__results-text">
                        <span class="text_fz80 text_fw600 text_red">+30</span>
                        сертифицированных <br>сотрудников
                    </div>
                </a>
                <a href="/benefit/#garant" class="main__results-item">
                    <img src="<?=$beforePath?>result3.png" alt="" class="img_bg">
                    <div class="icon">
                        <img src="<?=$beforePath?>result-icon3.png" alt="">
                    </div>
                    <div class="main__results-text">
                        <span class="text_fz80 text_fw600 text_red">30</span>
                        дней <br>гарантии
                    </div>
                </a>
                <a href="/cases/" class="main__results-item half">
                    <img src="<?=$beforePath?>result4.png" alt="" class="img_bg">
                    <div class="icon">
                        <img src="<?=$beforePath?>result-icon4.png" alt="">
                    </div>
                    <div class="main__results-text">
                        <span class="text_fz80 text_fw600 text_red">1000+</span>
                        выполненных <br>проектов
                    </div>
                </a>
                <a href="/reviews/" class="main__results-item half">
                    <img src="<?=$beforePath?>result5.png" alt="" class="img_bg">
                    <div class="icon">
                        <img src="<?=$beforePath?>result-icon5.png" alt="">
                    </div>
                    <div class="main__results-text">
                        <span class="text_fz80 text_fw600 text_red">300+</span>
                        реальных отзывов <br>клиентов
                    </div>
                </a>
            </div>
            <a href="/company/" class="button text_fz20">
                О компании
                <img src="<?=$imgPath?>arrow-right.svg" alt="">
            </a>
        </div>
    </section>
    <section class="main__try main__block slider mobile-only">
        <div class="container">
            <h2 class="text_fz36 text_fw600 text_upper text_red">Попробуйте бесплатно</h2>
            <div class="main__try-list text_fz18 text_fw300 mobile-slider-list">
                <div class="main__try-track mobile-slider-track">
                    <a href="/demo/" class="main__try-item mobile-slider-item">
                        <img src="<?=$beforePath?>try1.png" alt="">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">Демоверсии 1С</h3>
                            <span>Протестируйте онлайн все возможности выбранного продукта 1С</span>
                        </div>
                    </a>
                    <a href="/fresh/" class="main__try-item mobile-slider-item">
                        <img src="<?=$beforePath?>try2.png" alt="">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">1С:Fresh</h3>
                            <span>Работайте в типовых версиях 1С без покупки коробочного решения</span>
                        </div>
                    </a>
                    <a href="/rent/" class="main__try-item mobile-slider-item">
                        <img src="<?=$beforePath?>try3.png" alt="">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">Аренда 1С</h3>
                            <span>Обеспечьте полную сохранность данных и бесперебойную работу программ 1С на наших серверах</span>
                        </div>
                    </a>
                    <a href="/crm/" class="main__try-item mobile-slider-item">
                        <img src="<?=$beforePath?>try4.png" alt="">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">Битрикс24</h3>
                            <span>Оптимизируйте все бизнес-процессы с помощью онлайн CRM</span>
                        </div>
                    </a>
                    <a href="/grm/" class="main__try-item mobile-slider-item">
                        <img src="<?=$beforePath?>try5.png" alt="">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">1С:ГРМ</h3>
                            <span>Используйте онлайн кастомизированные и отраслевые конфигурации 1С</span>
                        </div>
                    </a>
                    <a href="/industr/" class="main__try-item mobile-slider-item">
                        <img src="<?=$beforePath?>try6.png" alt="">
                        <div class="main__try-text">
                            <h3 class="text_fz20 text_fw600">Демосервис отраслевых продуктов</h3>
                            <span>Тестируйте конфиграции 1С для вашей отрасли и ваших задач</span>
                        </div>
                    </a>
                </div>
            </div>
            <div class="dots mobile-slider-dots mobile"></div>
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
                            ['ID', 'NAME'],
                            false
                        );
                        ?>
                        <div class="main__products-item">
                            <img src="<?=CFile::GetPath($cat['PICTURE'])?>" alt="">
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
                                        <a href="/catalog/product<?=$product['ID']?>/" class="main__products-mark">
                                            <?=$product['NAME']?>
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
                <img src="<?=$imgPath?>arrow-right.svg" alt="">
            </a>
        </div>
    </section>
    <section class="main__reviews main__block slider mobile-only">
        <div class="container">
            <h2 class="text_fz36 text_fw400">Отзывы</h2>
            <div class="main__reviews-list mobile-slider-list">
                <div class="main__reviews-track mobile-slider-track text_fz18 text_fw300">
                    <div class="main__reviews-item mobile-slider-item">
                        <div class="main__reviews-head">
                            <img src="<?=$beforePath?>review1.png" alt="">
                            <div class="main__reviews-name text_fz16">
                                <span class="text_fz24 text_fw600">Александр Анфимов</span>
                                Коммерческий директор типографии «МДМ-Флекс»
                            </div>
                        </div>
                        <div class="main__reviews-body">
                            <img src="<?=$imgPath?>points.svg" alt="">
                            С помощью системы "1С:УНФ 8. Полиграфия 2" мы хотели получить общую картину производства в реальном времени с прозрачной системой расчетов заказов и ценообразования. И эти цели достигнуты. Экономика производства стала понятнее, ко...
                        </div>
                    </div>
                    <div class="main__reviews-item mobile-slider-item">
                        <div class="main__reviews-head">
                            <img src="<?=$beforePath?>review2.png" alt="">
                            <div class="main__reviews-name text_fz16">
                                <span class="text_fz24 text_fw600">Харченко Дарья</span>
                                Начальник финансово-экономического отдела ПК ООО "Алиот"
                            </div>
                        </div>
                        <div class="main__reviews-body">
                            <img src="<?=$imgPath?>points.svg" alt="">
                            С внедрением системы автоматизации "1С:Полиграфия 8" мы смогли точнее вычислять себестоимость каждого заказа на разных стадиях его выполнения, получить информацию о реальных затратах на выпуск продукции - как материальных, так и нематериальных, как прямых....
                        </div>
                    </div>
                    <div class="main__reviews-item mobile-slider-item">
                        <div class="main__reviews-head">
                            <img src="<?=$beforePath?>review3.png" alt="">
                            <div class="main__reviews-name text_fz16">
                                <span class="text_fz24 text_fw600">Юрий Васильченко</span>
                                Генеральный директор типографии "Печатный дом-НСК"
                            </div>
                        </div>
                        <div class="main__reviews-body">
                            <img src="<?=$imgPath?>points.svg" alt="">
                            Помимо очевидных результатов, для меня важным достижением использования системы "1С:Полиграфия 8" является увеличившаяся конверсия клиентских запросов. Это достигается не только сокращением времени на обработку первичных обращений...
                        </div>
                    </div>
                </div>
            </div>
            <div class="dots mobile-slider-dots mobile"></div>
            <a href="/reviews/" class="button text_fz20">
                Все отзывы
                <img src="<?=$imgPath?>arrow-right.svg" alt="">
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
                    ['ID', 'NAME', 'PREVIEW_PICTURE']
                );
            ?>
            <h2 class="text_fz36 text_fw400">Кейсы</h2>
            <div class="main__cases-list mobile-slider-list">
                <div class="main__cases-track mobile-slider-track">
                    <?php
                        while ($case = $cases->Fetch()) {
                            ?>
                            <div class="main__cases-item mobile-slider-item">
                                <div class="main__cases-left">
                                    <img src="<?=CFile::GetPath($case['PREVIEW_PICTURE'])?>" alt="">
                                    <span class="text_fz20 text_fw600"><?=$case['NAME']?></span>
                                    <a href="/cases/case<?=$case['ID']?>/" class="button text_fz20">
                                        Подробнее
                                        <img src="<?=$imgPath?>arrow-right.svg" alt="">
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
            <div class="dots mobile-slider-dots mobile"></div>
            <a href="/cases/" class="button text_fz20">
                Все кейсы
                <img src="<?=$imgPath?>arrow-right.svg" alt="">
            </a>
        </div>
    </section>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/feedback.php", [], ["MODE" => "html"]) ?>
    <?php $APPLICATION->IncludeFile(SITE_DIR."include/sites.php", [], ["MODE" => "html"]) ?>
</main>
<?php require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php"); ?>