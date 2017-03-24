@include('front.styles')
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/e-fav.gif" type="image/gif">
    @yield('styles')
</head>
<body>
<div class="popup-page">
    <div class="white-popup mfp-with-anim mfp-hide form" id="partner">
        <h4 class="popup-title">Написать письмо</h4>
        <form action="/feedback/mail" method="POST" name="partner" autocomplete="off" class="feedback_popup">
            <div class="rows-block">
                {{--Передача Названия формы--}}
                <input type="hidden" name="form" class="popup-input" value="partner">
                {{--Передача csrf-токена--}}
                <input type="hidden" name="_token" class="popup-input" value="{{ csrf_token() }}">

                <div class="row">
                    <label class="row-name">Имя
                        <div class="validation-wrap">
                            <input type="text" name="name" required class="popup-input" placeholder="Имя" autofocus>
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки Текст ошибки Текст ошибки</p></div>
                        </div>
                    </label>
                </div>

                <div class="row">
                    <label class="row-name">Контактный телефон
                        <div class="validation-wrap">
                            <input type="tel" class="popup-input"
                                   data-mask="+7 (000) 000-00-00"
                                   placeholder="+7 (___) ___-__-__"
                                   data-require="true"
                                   maxlength="25"
                                   required
                                   name="phone">
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                        </div>
                    </label>
                </div>

                <div class="row">
                    <label class="row-name">Эл. почта <span class="gray">для ответа</span>
                        <div class="validation-wrap">
                            <input type="email" name="mail" required class="popup-input" placeholder="Эл. почта">
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                        </div>
                    </label>
                </div>

                <div class="row">
                    <label class="row-name">Комментарий
                        <div class="validation-wrap">
                              <textarea name="question" class="popup-input"
                                        placeholder="Вопрос или комментарий"></textarea>
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                        </div>
                    </label>
                </div>


                <div class="row button-row">
                    <div class="col-1-2">
                        <span class="row-name">
                            <input type="submit" value="Отправить" class="send-form">
                        </span>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>
<a href="/mail/thanks" class="thank open_popup" style="display: none"></a>
</body>
</html>