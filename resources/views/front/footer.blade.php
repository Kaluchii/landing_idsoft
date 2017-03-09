@section('footer')
    <footer class="become">
        <div class="become__wrap-1280">

            <h2 class="become__title block-title">Стать партнером</h2>

            <div class="become__form partner-form">
                <form action="/feedback/mail" method="POST" name="ask" autocomplete="off" class="partner-form__form">
                    {{--Передача Названия формы--}}
                    <input type="hidden" name="form" class="popup-input" value="ask">
                    {{--Передача csrf-токена--}}
                    <input type="hidden" name="_token" class="popup-input" value="{{ csrf_token() }}">

                    <div class="partner-form__row">
                        <label class="partner-form__row-name">
                            <span class="partner-form__label">Имя</span>
                            <input type="text" name="ask_name" required class="popup-input partner-form__input" placeholder="Имя" autofocus>
                        </label>
                    </div>
                    <div class="partner-form__row">
                        <label class="partner-form__row-name">
                            <span class="partner-form__label">Контактный телефон</span>
                            <input type="tel" class="popup-input partner-form__input"
                                   data-mask="+7 (000) 000-00-00"
                                   placeholder="+7 (___) ___-__-__"
                                   data-require="true"
                                   maxlength="25"
                                   required
                                   name="ask_phone">
                        </label>
                    </div>
                    <div class="partner-form__row">
                        <label class="partner-form__row-name">
                            <span class="partner-form__label">Эл. почта</span>
                            <input type="email" name="email" required class="popup-input partner-form__input" placeholder="Эл. почта">
                        </label>
                    </div>
                    <div class="partner-form__row">
                        <label class="partner-form__row-name">
                            <span class="partner-form__label">Комментарий</span>
                            <textarea name="ask_question" class="popup-input partner-form__input partner-form__input--textarea"
                                      placeholder="Вопрос или комментарий"></textarea>
                        </label>
                    </div>
                    <div class="partner-form__row partner-form__row--button">
                        <span class="partner-form__row-name">
                            <input type="submit" value="Отправить" class="send-form">
                        </span>
                    </div>
                </form>
            </div>

            <div class="become__footer">
                <div class="become__col-1-2">
                    <div class="become__img-wrap become__img-wrap--100"><img src="/img/footer_logo.png" alt="IDsoft Автоматизация общепита и торговли" class="become__img"></div>
                    <div class="become__info">
                        <p class="become__info-row">© IDSOFT, 2017</p>
                        <p class="become__info-row">Отдел продаж: <a href="mailto:sales@idsoft.kz" class="become__info-mail">sales@idsoft.kz</a></p>
                        <p class="become__info-row">+7 777 123-45-67</p>
                    </div>
                </div>
                <div class="become__col-1-2">
                    <div class="become__img-wrap become__img-wrap--100"><img src="/img/bocal.png" alt="" class="become__img"></div>
                    <div class="become__img-wrap"><img src="/img/arrows.png" alt="" class="become__img"></div>
                    <div class="become__img-wrap"><img src="/img/zont.png" alt="" class="become__img"></div>
                </div>
            </div>

        </div>
    </footer>
@endsection