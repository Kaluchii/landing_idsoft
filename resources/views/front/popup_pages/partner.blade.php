@include('front.styles')
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/gif">
    @yield('styles')
</head>
<body>
<div class="popup-page">
    <div class="white-popup mfp-with-anim mfp-hide form-id" id="partner">
        <h4 class="white-popup__title">Написать письмо</h4>
        <form action="/feedback/mail" method="POST" name="partner" autocomplete="off" class="white-popup__form feedback-form form">
            {{--Передача Названия формы--}}
            <input type="hidden" name="form" class="form-input" value="partner">
            {{--Передача csrf-токена--}}
            <input type="hidden" name="_token" class="form-input" value="{{ csrf_token() }}">

            <div class="feedback-form__row form-row">
                <label class="form-row__name">
                    <span class="form-row__label">Имя</span>
                    <div class="form-row__validation-wrap">
                        <input type="text" name="name" required class="form-row__input form-input" placeholder="Имя" autofocus>
                        <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Текст ошибки Текст ошибки Текст ошибки</p></div>
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
                        <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Текст ошибки</p></div>
                    </div>
                </label>
            </div>

            <div class="feedback-form__row form-row">
                <label class="form-row__name">
                    <span class="form-row__label">Эл. почта</span>
                    <div class="form-row__validation-wrap">
                        <input type="email" name="mail" required class="form-row__input form-input" placeholder="Эл. почта">
                        <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Текст ошибки</p></div>
                    </div>
                </label>
            </div>

            <div class="feedback-form__row form-row">
                <label class="form-row__name">
                    <span class="form-row__label">Комментарий</span>
                    <div class="form-row__validation-wrap">
                          <textarea name="question" class="form-row__input form-row__input--textarea"
                                    placeholder="Вопрос или комментарий"></textarea>
                        <div class="form-row__tooltip-wrap"><p class="form-row__tooltip">Текст ошибки</p></div>
                    </div>
                </label>
            </div>


            <div class="feedback-form__row form-row feedback-form__row--right-flag">
                <span class="form-row__name">
                    <input type="submit" value="Отправить" class="form-row__send-form send-form">
                </span>
            </div>
        </form>
    </div>
</div>
<a href="/mail/thanks" class="thank open_popup" style="display: none"></a>
</body>
</html>