<section class="main__feedback fresh__feedback">
    <div class="container">
        <div class="main__feedback-top">
            <h2 class="text_fz32 text_fw600 text_upper text_red">Подключите 1С:FRESH</h2>
            <span class="text_fz18 text_fw300">Оставьте заявку и мы дадим вам  бесплатный пробный доступ к 1С:Fresh на 30 дней.</span>
        </div>
        <form action="" class="main__feedback-form text_fz18 text_fw300" data-success="thanks">
            <div class="main__feedback-form-col">
                <span class="text_fz20 text_fw700">Имя</span>
                <input class="placeholder-hide" type="text" placeholder="Иван Иванов" name="feedname" required>
            </div>
            <div class="main__feedback-form-col">
                <span class="text_fz20 text_fw700">Телефон</span>
                <input type="tel" placeholder="+7 (___) ___-__-__" name="feedphone" required>
            </div>
            <div class="main__feedback-form-col">
                <span class="text_fz20 text_fw700">Email</span>
                <input class="placeholder-hide" type="email" placeholder="email@mail.com" name="feedmail" required>
            </div>
            <div class="main__feedback-form-col">
                <button class="text_fz20">
                    Отправить
                    <img src="<?=$imgPath?>arrow-right.svg" alt="">
                </button>
            </div>
        </form>
        <div class="main__feedback-poly text_fz14 text_fw300 text_center">
            Нажимая «Отправить», вы соглашаетесь с <a href="/privacy/" class="text_underline">политикой конфиденциальности</a>
        </div>
    </div>
</section>