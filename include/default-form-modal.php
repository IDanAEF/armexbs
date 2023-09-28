<div class="feedback-modal modal body-click-content" data-content="<?=$name?>">
    <span class="modal-close body-click-close"></span>
    <div class="main__feedback-top">
        <h2 class="text_fz32 text_fw400"><?=$title?></h2>
        <span class="text_fz16 text_fw300"><?=$descr?></span>
    </div>
    <form action="" class="main__feedback-form text_fz18 text_fw300" data-success="<?=$success?>">
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
        <div class="main__feedback-form-col">
            <button class="text_fz20">
                Отправить
                <img src="<?=SITE_TEMPLATE_PATH?>/assets/images/arrow-right.svg" alt="arrow">
            </button>
        </div>
        <div class="main__feedback-form-col copy text_fz14 text_fw300">
            Нажимая «Отправить», вы соглашаетесь с <a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
        </div>
    </form>
</div>