<section class="product__consult main__block">
    <div class="container">
        <div class="product__consult-left text_fz18 text_fw300">
            <h2 class="text_fz36 text_fw400"><?=$title?></h2>
            <?=$descr?>
        </div>
        <div class="product__consult-right">
            <div class="product__consult-contact">
                <div class="links text_fz20">
                    <a href="tel:+74955850659">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/phone-gray.svg" alt="Телефон">
                        +7 (495) 585-06-59
                    </a>
                    <a href="mailto:<?=$mail ?: 'info@armex.ru'?>">
                        <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/mail-gray.svg" alt="E-mail" style="opacity: 0.8">
                        <?=$mail ?: 'info@armex.ru'?>
                    </a>
                </div>
                <div class="footer__speak text_fz14">
                    <?php if ($partner) : ?>
                        <?php $APPLICATION->IncludeFile(SITE_DIR."include/footer-speak-partner.php", [], ["MODE" => "html"]) ?>
                    <?php else : ?>
                        <?php $APPLICATION->IncludeFile(SITE_DIR."include/footer-speak.php", [], ["MODE" => "html"]) ?>
                    <?php endif; ?>
                </div>
            </div>
            <button class="button text_fz20 text_fw700 body-click-target" data-content="feedback-consult">
                Получить консультацию
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/arrow-right.svg" alt="arrow-right">
            </button>
        </div>
    </div>
</section>