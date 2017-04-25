<div class="white-popup white-popup--box mfp-with-anim mfp-hide form-id" id="partner">
    <h4 class="white-popup__title">Стать партнером</h4>
    <form action="/feedback/mail" method="POST" name="partner" autocomplete="off" class="white-popup__form feedback-form form">
        {{--Передача Названия формы--}}
        <input type="hidden" name="form" class="form-input" value="partner">
        {{--Передача csrf-токена--}}
        <input type="hidden" name="_token" class="form-input" value="{{ csrf_token() }}">

        <div class="feedback-form__row form-row">
            <label class="form-row__name">
                <span class="form-row__label">Имя</span>
                <div class="form-row__validation-wrap">
                    <input type="text" name="client_name" required class="form-row__input form-input" autofocus>
                    <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Если хотите, мы будем звать Вас Эдуард</p></div>
                </div>
            </label>
        </div>

        <div class="feedback-form__row form-row">
            <label class="form-row__name">
                <span class="form-row__label">Контактный телефон</span>
                <div class="form-row__validation-wrap">
                    <input type="tel" class="form-row__input form-input"
                           data-mask="+7 (000) 000-00-00"
                           placeholder="+7 (___) ___-__-__"
                           data-require="true"
                           maxlength="25"
                           required
                           name="phone">
                    <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Укажите номер для связи</p></div>
                </div>
            </label>
        </div>

        <div class="feedback-form__row form-row">
            <label class="form-row__name">
                <span class="form-row__label">Эл. почта</span>
                <div class="form-row__validation-wrap">
                    <input type="email" name="email" required class="form-row__input form-input">
                    <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Электронный адрес в формате address@mail.com</p></div>
                </div>
            </label>
        </div>

        <div class="feedback-form__row form-row">
            <label class="form-row__name">
                <span class="form-row__label">Комментарий</span>
                <div class="form-row__validation-wrap">
                          <textarea name="question" class="form-row__input form-row__input--textarea form-input"></textarea>
                    <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Краткая информация о вашей компании</p></div>
                </div>
            </label>
        </div>

        <div class="g-recaptcha" data-sitekey="6LcEix4UAAAAAGA2HY6HRiuAJQvDvu-NtXK_pNTv"></div>

        <div class="feedback-form__row form-row feedback-form__row--right-flag">
                <span class="form-row__name">
                    <input type="submit" value="Отправить" class="form-row__send-form send-form">
                </span>
        </div>
    </form>
</div>