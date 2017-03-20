<div class="white-popup mfp-with-anim mfp-hide" id="question">
    <h4 class="popup-title">Написать письмо</h4>
    <form action="/feedback/mail" method="POST" name="ask" autocomplete="off" class="feedback_popup">
        <div class="rows-block">
            {{--Передача Названия формы--}}
            <input type="hidden" name="form" class="popup-input" value="ask">
            {{--Передача csrf-токена--}}
            <input type="hidden" name="_token" class="popup-input" value="{{ csrf_token() }}">

            <div class="row">
                <label class="row-name">
                    Ваше Имя
                    <input type="text" name="ask_name" required class="popup-input" placeholder="Имя" autofocus>
                </label>
            </div>
            <div class="row">
                <label class="row-name">
                    Эл. почта <span class="gray">для ответа</span>
                    <input type="email" name="email" required class="popup-input" placeholder="Эл. почта">
                </label>
            </div>
            <div class="row">
                <label class="row-name">
                    Контактный телефон
                    <input type="tel" class="popup-input"
                           data-mask="+7 (000) 000-00-00"
                           placeholder="+7 (___) ___-__-__"
                           data-require="true"
                           maxlength="25"
                           required
                           name="ask_phone">
                </label>
            </div>
            <div class="row">
                <label class="row-name">
                    Сообщение
                    <textarea name="ask_question" class="popup-input"
                              placeholder="Вопрос или комментарий"></textarea>
                </label>
            </div>
            <div class="row button-row">
                <div class="col-1-2">
                    <p class="status-bar">
                        Не все поля заполнены верно
                    </p>
                </div>
                <div class="col-1-2">
                    <span class="row-name">
                        <input type="submit" value="Отправить" class="send-form">
                    </span>
                </div>
            </div>
        </div>
    </form>
</div>