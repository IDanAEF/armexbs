<?php
    $props = [
        'NAME', 
        'PREVIEW_PICTURE', 
        'PREVIEW_TEXT',
        'PROPERTY_BTN_TEXT',
        'PROPERTY_BTN_LINK',
        'PROPERTY_BACK_CUSTOM',
    ];

    $banner = CIBlockElement::GetList([], ['IBLOCK_ID' => 45, 'ID' => $id], false, false, $props)->Fetch();
    $back = CIBlockElement::GetProperty(45, $id, [], ['CODE' => 'BACK_COLOR'])->Fetch()['VALUE_XML_ID'];
    $btnAct = CIBlockElement::GetProperty(45, $id, [], ['CODE' => 'BTN_ACT'])->Fetch()['VALUE_XML_ID'];
?>
<section class="demo__promo <?=$back?>"<?=$banner['PROPERTY_BACK_CUSTOM_VALUE'] ? ' style="'.$banner['PROPERTY_BACK_CUSTOM_VALUE'].'"' : ''?>>
    <div class="container">
        <div class="demo__promo-text text_fz18 text_fw300">
            <h1 class="text_fz42 text_fw600 text_upper"><?=$banner['NAME']?></h1>
            <?=$banner['PREVIEW_TEXT']?>
            <img src="<?=CFile::GetPath($banner['PREVIEW_PICTURE']);?>" alt="<?=$banner['NAME']?>" class="demo__promo-image mobile">
            <?php if ($btnAct) : ?>
                <button class="text_fz24 text_fw700 body-click-target" data-content="<?=$btnAct?>"><?=$banner['PROPERTY_BTN_TEXT_VALUE']?></button>
            <?php else : ?>
                <a href="<?=$banner['PROPERTY_BTN_LINK_VALUE']?>" class="text_fz24 text_fw700 button"><?=$banner['PROPERTY_BTN_TEXT_VALUE']?></a>
            <?php endif; ?>
        </div>
        <img src="<?=CFile::GetPath($banner['PREVIEW_PICTURE']);?>" alt="<?=$banner['NAME']?>" class="demo__promo-image">
    </div>
</section>