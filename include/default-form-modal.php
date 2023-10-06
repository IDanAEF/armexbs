<div class="feedback-modal modal body-click-content" data-content="<?=$name?>">
    <span class="modal-close body-click-close"></span>
    <div class="main__feedback-top">
        <h2 class="text_fz32 text_fw400"><?=$title?></h2>
        <span class="text_fz16 text_fw300"><?=$descr?></span>
    </div>
    <form action="/ajax/forms.php" class="main__feedback-form text_fz18 text_fw300" data-success="<?=$success?>">
        <input type="text" name="feedsection" value="<?=$section?>" hidden>
        <input type="text" name="feedevent" value="33" hidden>
        <input type="text" name="feedtheme" value="<?=$title?>" hidden>
        <input type="text" name="feedurl" value="<?=$_SERVER['HTTP_HOST']?><?=$_SERVER['REQUEST_URI']?>" hidden>
        <div class="main__feedback-form-col">
            <span class="text_fw700">Имя</span>
            <input type="text" placeholder="Иван Иванов" name="feedname" required>
        </div>
        <div class="main__feedback-form-col">
            <span class="text_fw700">Телефон</span>
            <input type="tel" placeholder="+7 (___) ___-__-__" name="feedphone" required>
        </div>
        <div class="main__feedback-form-col">
            <span class="text_fw700">Email</span>
            <input type="email" placeholder="email@mail.com" name="feedmail" required>
        </div>
        <?php if ($listName && $items) : ?>
            <div class="main__feedback-form-col">
                <span class="text_fw700"><?=$listTitle?></span>
                <div class="form-list">
                    <input type="text" name="<?=$listName?>" value="<?=$items[0]?>" hidden>
                    <div class="form-list__head">
                        <span class="text_fz18 text_fw300"><?=$items[0]?></span>
                        <img src="<?=$imgPath?>arrow-down-red.svg" alt="">
                    </div>
                    <div class="form-list__items text_fz18">
                        <?php
                            foreach ($items as $item) {
                                ?>
                                <span class="form-list__item"><?=$item?></span>
                                <?php
                            }
                        ?>
                    </div>
                </div>
            </div>
        <?php endif; ?>
        <div class="main__feedback-form-col">
            <button class="text_fz20">
                Отправить
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/arrow-right.svg" alt="arrow">
            </button>
        </div>
        <div class="main__feedback-form-col copy text_fz14 text_fw300">
            Нажимая «Отправить», вы соглашаетесь с <a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
        </div>
        <input type="text" name="feedproduct" value="" hidden>
        <input type="text" name="feedproductid" value="" hidden>
        <input type="text" name="feedversion" value="" hidden>
    </form>
</div>