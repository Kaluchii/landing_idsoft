@section('footer')
    <footer class="become">
        <div class="become__wrap-1280">

            <h2 class="become__title block-title">Стать партнером</h2>

            <div class="become__form partner-form">
                <form action="/feedback/mail" method="POST" name="become_partner" autocomplete="off" class="partner-form__form form form-id" id="become_partner">
                    {{--Передача Названия формы--}}
                    <input type="hidden" name="form" class="form-input" value="partner">
                    {{--Передача csrf-токена--}}
                    <input type="hidden" name="_token" class="form-input" value="{{ csrf_token() }}">

                    <div class="partner-form__row">
                        <label class="partner-form__row-name">
                            <span class="partner-form__label">Имя</span>
                            <div class="partner-form__validation-wrap">
                                <input type="text" name="client_name" required class="partner-form__input form-input form-name">
                                <div class="tooltip-wrap"><p class="tooltip">Если хотите, мы будем звать Вас Эдуард</p></div>
                            </div>
                        </label>
                    </div>
                    <div class="partner-form__row">
                        <label class="partner-form__row-name">
                            <span class="partner-form__label">Контактный телефон</span>
                            <div class="partner-form__validation-wrap">
                                <input type="tel" class="partner-form__input form-input form-phone"
                                       data-mask="+7 (000) 000-00-00"
                                       placeholder="+7 (___) ___-__-__"
                                       data-require="true"
                                       maxlength="25"
                                       required
                                       name="phone">
                                <div class="tooltip-wrap"><p class="tooltip">Укажите номер для связи</p></div>
                            </div>
                        </label>
                    </div>
                    <div class="partner-form__row">
                        <label class="partner-form__row-name">
                            <span class="partner-form__label">Эл. почта</span>
                            <div class="partner-form__validation-wrap">
                                <input type="email" name="email" required class="partner-form__input form-input form-mail">
                                <div class="tooltip-wrap"><p class="tooltip">Электронный адрес в формате address@mail.com</p></div>
                            </div>
                        </label>
                    </div>
                    <div class="partner-form__row">
                        <label class="partner-form__row-name">
                            <span class="partner-form__label">Комментарий</span>
                            <div class="partner-form__validation-wrap">
                                 <textarea name="question" class="partner-form__input form-input form-question partner-form__input--textarea"></textarea>
                                <div class="tooltip-wrap"><p class="tooltip">Краткая информация о вашей компании</p></div>
                            </div>
                        </label>
                    </div>

                    <div id="recaptcha" class="g-recaptcha" data-size="invisible"
                         data-sitekey="6LevTh8UAAAAAPr7TctJNkvXfGyxsyKSdW783c1K"
                         data-callback="onSubmitReCaptcha"></div>

                    <div class="partner-form__row partner-form__row--button">
                        <span class="partner-form__row-name">
                            <input type="submit" value="Отправить" class="partner-form__send-form send-form">
                        </span>
                    </div>
                </form>
            </div>

            <div class="become__footer">
                <div class="become__col-1-2">
                    <div class="become__img-wrap become__img-wrap--100"><img src="/img/footer_logo.png" alt="IDsoft Автоматизация общепита и торговли" class="become__img img-question"></div>
                    <div class="become__info">
                        <p class="become__info-row">© IDSOFT, 2017</p>
                        <p class="become__info-row">Отдел продаж: <a href="mailto:spb@idsoft.info" class="become__info-link">spb@idsoft.info</a></p>
                        <p class="become__info-row">+7 906 272-26-91</p>
                    </div>
                </div>
                <div class="become__col-1-2">
                    <div class="become__img-wrap become__img-wrap--100"><img src="/img/bocal.png" alt="" class="become__img img-name"></div>
                    <div class="become__img-wrap become__img-wrap--margin"><img src="/img/arrows.png" alt="" class="become__img img-phone"></div>
                    <div class="become__img-wrap"><img src="/img/zont.png" alt="" class="become__img img-mail"></div>
                    <div class="become__info">
                        <p class="become__info-row">Сделано в <a href="//interpro.kz" target="_blank" class="become__info-link">ИнтерПро</a></p>
                    </div>
                </div>
            </div>

        </div>
    </footer>
@endsection