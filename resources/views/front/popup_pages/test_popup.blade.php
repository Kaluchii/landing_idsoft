@include('front.styles')
@include('front.scripts')
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/img/e-fav.gif" type="image/gif">
    @yield('styles')
    <script defer src="/js/jquery.min.js"></script>
    @yield('scripts')
</head>
<body>
<div class="popup-page">
    <div class="white-popup mfp-with-anim mfp-hide form" id="question">
        <h4 class="popup-title">Написать письмо</h4>
        <form action="/feedback/mail" method="POST" name="ask" autocomplete="off" class="feedback_popup">
            <div class="rows-block">
                {{--Передача Названия формы--}}
                <input type="hidden" name="form" class="popup-input" value="ask">
                {{--Передача csrf-токена--}}
                <input type="hidden" name="_token" class="popup-input" value="{{ csrf_token() }}">

                <div class="row">
                    <label class="row-name">Ваше Имя
                        <div class="validation-wrap">
                            <input type="text" name="ask_name" required class="popup-input" placeholder="Имя" autofocus>
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки Текст ошибки Текст ошибки</p></div>
                        </div>
                    </label>
                </div>

                <div class="row">
                    <label class="row-name">Эл. почта <span class="gray">для ответа</span>
                        <div class="validation-wrap">
                            <input type="email" name="email" required class="popup-input" placeholder="Эл. почта">
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                        </div>
                    </label>
                </div>

                {{--<div class="row">
                    <label class="row-name">Введите число от 1 до 10:
                        <div class="validation-wrap">
                            <input type="number" size="3" name="num" min="1" max="10" value="1">
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                        </div>
                    </label>
                </div>--}}

                <div class="row">
                    <label class="row-name">Контактный телефон
                        <div class="validation-wrap">
                            <input type="tel" class="popup-input"
                                   data-mask="+7 (000) 000-00-00"
                                   placeholder="+7 (___) ___-__-__"
                                   data-require="true"
                                   maxlength="25"
                                   required
                                   name="ask_phone">
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                        </div>
                    </label>
                </div>


                {{--<div class="row">
                    <label class="rows-name">Какое у вас состояние разума?</label>
                </div>
                <div class="validation-wrap">
                    <div class="row">
                        <label class="row-name">
                            <input type="radio" name="sost" value="nedzen" required class=""> Не дзен
                        </label>
                    </div>
                    <div class="row">
                        <label class="row-name">
                            <input type="radio" name="sost" value="dzen" required class=""> Дзен
                        </label>
                    </div>
                    <div class="row">
                        <label class="row-name">
                            <input type="radio" name="sost" value="pdzen" required class=""> Полный дзен
                        </label>
                    </div>
                    <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                </div>


                <div class="row">
                    <label class="rows-name">В каких годах произошли самые известные извержения вулкана Кракатау?</label>
                </div>
                <div class="validation-wrap">
                    <div class="row">
                        <label class="row-name"><input type="checkbox" name="a" value="1417"> 1417</label>
                    </div>
                    <div class="row">
                        <label class="row-name"><input type="checkbox" name="a" value="1680" checked> 1680</label>
                    </div>
                    <div class="row">
                        <label class="row-name"><input type="checkbox" name="a" value="1883" checked> 1883</label>
                    </div>
                    <div class="row">
                        <label class="row-name"><input type="checkbox" name="a" value="1934"> 1934</label>
                    </div>
                    <div class="row">
                        <label class="row-name"><input type="checkbox" name="a" value="2010"> 2010</label>
                    </div>
                    <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                </div>


                <div class="row">
                    <label class="row-name">Мультгерой
                        <div class="validation-wrap">
                            <select name="hero" class="popup-input">
                                <option value="s1">Чебурашка</option>
                                <option value="s2" selected>Крокодил Гена</option>
                                <option value="s3">Шапокляк</option>
                                <option value="s3" label="Лариса">Крыса Лариса</option>
                            </select>
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                        </div>
                    </label>
                </div>


                <div class="row">
                    <label class="row-name">Мультиселект
                        <div class="validation-wrap">
                            <select name="select" size="3" class="popup-input" multiple>
                                <option selected value="s1">Чебурашка</option>
                                <option value="s2">Крокодил Гена</option>
                                <option value="s3">Шапокляк</option>
                                <option value="s4">Крыса Лариса</option>
                            </select>
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                        </div>
                    </label>
                </div>--}}


                <div class="row">
                    <label class="row-name">Сообщение
                        <div class="validation-wrap">
                              <textarea name="ask_question" class="popup-input"
                                        placeholder="Вопрос или комментарий"></textarea>
                            <div class="tooltip-wrap"><p class="tooltip">Текст ошибки</p></div>
                        </div>
                    </label>
                </div>


                <div class="row button-row">
                    {{--<div class="col-1-2">
                        <p class="status-bar">
                            Не все поля заполнены верно
                        </p>
                    </div>--}}
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