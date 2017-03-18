@extends('front.layout')
@include('front.index.meta')
@section('content')
    <section class="titular">
        <div class="titular__blue-top">
            <div class="titular__wrap-1280 titular__wrap-1280--background">
                <h1 class="titular__title">Оборудование для автоматизации общепита и торговли</h1>
                <div class="titular__advantages advantages">
                    <div class="advantages__item">
                        <img src="/img/price.png" alt="" class="advantages__img">
                        <p class="advantages__text"><span class="advantages__bold-text">Лучшие цены</span><br>
                            в РФ и Казахстане</p>
                    </div>
                    <div class="advantages__item">
                        <img src="/img/sclad.png" alt="" class="advantages__img">
                        <p class="advantages__text"><span class="advantages__bold-text">Собственный склад</span><br>в Санкт-Петербурге, Астане, Алматы</p>
                    </div>
                    <div class="advantages__item">
                        <img src="/img/guarantee.png" alt="" class="advantages__img">
                        <p class="advantages__text"><span class="advantages__bold-text">Гарантия</span><br>до 3-х лет</p>
                    </div>
                    <div class="advantages__item">
                        <img src="/img/service.png" alt="" class="advantages__img">
                        <p class="advantages__text"><span class="advantages__bold-text">Собственный<br>центр</span> сервиса и поддержки</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="titular__white-bottom">
            <div class="titular__wrap-1280">
                <div class="titular__animate animate">

                    <div class="animate__img animate__img--pockets">
                        <object class="animate__img-object animate__img-object--pockets">
                            <embed class="animate__img-embed" src="/img/bags.svg">
                        </object>
                    </div>
                    <div class="animate__img animate__img--bludo">
                        <object class="animate__img-object animate__img-object--bludo">
                            <embed class="animate__img-embed" src="/img/plate.svg">
                        </object>
                    </div>

                    <img src="/img/skaner.png" alt="" class="animate__img animate__img--scanner">
                    <img src="/img/printer.png" alt="" class="animate__img animate__img--printer">
                    <img src="/img/monitor.png" alt="" class="animate__img animate__img--sensor">
                    <img src="/img/on-monitor.png" alt="" class="animate__img animate__img--monitor">

                    <img src="/img/hand-header.png" alt="" class="animate__img animate__img--hand">

                </div>
            </div>
        </div>
    </section>


    <section class="in-stock">
        <div class="in-stock__wrap-1160">
            <h2 class="in-stock__title">Оборудование в постоянном наличии</h2>
            <p class="in-stock__sub-title">Все позиции в наличии с собственного склада в Санкт-Петербурге. Без
                посредников</p>
            <div class="in-stock__equipments-wrap equipments">
                <div class="equipments__col">
                    <div class="equipments__item equipment">
                        <img src="/img/sensor.png" alt="" class="equipment__img">
                        <p class="equipment__title">Сенсорные моноблоки</p>
                        <p class="equipment__models-count">3 модели</p>
                    </div>
                    <div class="equipments__item equipment">
                        <img src="/img/skaner-stock.png" alt="" class="equipment__img">
                        <p class="equipment__title">Сканнеры штрихкода</p>
                        <p class="equipment__models-count">3 модели</p>
                    </div>
                </div>
                <div class="equipments__col equipments__col--big">
                    <div class="equipments__item equipment">
                        <img src="/img/pos.jpg" alt="" class="equipment__img">
                        <p class="equipment__title">POS-системы</p>
                        <p class="equipment__models-count">3 модели</p>
                    </div>
                </div>
                <div class="equipments__col">
                    <div class="equipments__item equipment">
                        <img src="/img/printer-stock.png" alt="" class="equipment__img">
                        <p class="equipment__title">Чековые принтеры</p>
                        <p class="equipment__models-count">3 модели</p>
                    </div>
                    <div class="equipments__item equipment">
                        <img src="/img/printer-etiketok.png" alt="" class="equipment__img">
                        <p class="equipment__title">Принтеры этикеток</p>
                        <p class="equipment__models-count">3 модели</p>
                    </div>
                </div>
            </div>
            <div class="in-stock__offer-wrap">
                <p class="in-stock__give-commercial-proposal">
                    <a href="#" class="in-stock__give-commercial-proposal-btn">Получить коммерческое предложение</a>
                </p>
                <p class="in-stock__we-will-tell">Мы расскажем об условиях работы,
                    актуальные цены и о прогрессирующих скидках.</p>
            </div>
        </div>
        <p class="in-stock__popularity">Мы поставляем оборудование 8 из 10 интеграторам Казахстана</p>
    </section>


    <section class="guarantee">
        <div class="guarantee__wrap-1280">
            <h2 class="guarantee__title">Гарантия и сервис</h2>
            <div class="guarantee__col-1">
                <div class="fotorama" data-loop="true" data-autoplay="5000">
                    <img src="/img/slide.jpg" alt="">
                    <img src="/img/slide.jpg" alt="">
                    <img src="/img/slide.jpg" alt="">
                    <img src="/img/slide.jpg" alt="">
                    <img src="/img/slide.jpg" alt="">
                    <img src="/img/slide.jpg" alt="">
                    <img src="/img/slide.jpg" alt="">
                    <img src="/img/slide.jpg" alt="">
                </div>
            </div>
            <div class="guarantee__col-2 support-info">
                <div class="support-info__item">
                    <h3 class="support-info__title">Гарантия до 3х лет</h3>
                    <p class="support-info__description">Если в работе обнаружился брак, неисправность или сбои, мы
                        заменим оборудование, заново подключим и проведем настройку бесплатно.
                    </p>
                </div>
                <div class="support-info__item">
                    <h3 class="support-info__title">Консультации и поддержка</h3>
                    <p class="support-info__description">Мы гарантируем, что консультации и поддержку дают толковые
                        специалисты с необходимой квалификацией, а проблемы будут решаться оперативно и без
                        необязательных задержек.
                    </p>
                </div>
                <div class="support-info__item">
                    <h3 class="support-info__title">Ремонт</h3>
                    <p class="support-info__description">Если поломка не попадает под условия гарантии, в наличии
                        полный арсенал запасных частей для каждой модели оборудования — мы отремонтируем, протестируем и
                        восстановим работу так быстро, насколько это возможно.
                    </p>
                </div>
            </div>
        </div>
    </section>


    <section class="about">
        <div class="about__facts-wrap facts">
            <div class="facts__hand-wrap">
                <img src="/img/hand-with-lazer.png" alt="" class="facts__hand-img">
            </div>
            <div class="facts__col-1-2">
                <h2 class="about__title">О компании</h2>
                <div class="facts__item fact">
                    <img src="/img/sqr.jpg" alt="" class="fact__img">
                    <h3 class="fact__title">Собственное производство</h3>
                    <p class="fact__description">Мы сами выбираем и заказываем комплектующие с заводов Китая, а сборнкой
                        занимаются квалифицированные и ответственные сотрудники.</p>
                </div>
                <div class="facts__reputation">
                    <img src="/img/reputation.png" alt="Мы дорожим репутацией" class="facts__img">
                    <p class="facts__reputation-text">Мы бережем репутацию и хотим быть
                        компанией, на которую вы рассчитываете.</p>
                </div>
            </div>
            <div class="facts__col-1-2">
                <div class="facts__item fact">
                    <img src="/img/sqr.jpg" alt="" class="fact__img">
                    <h3 class="fact__title">Опыт интеграции</h3>
                    <p class="fact__description">Мы понимаем особенности автоматизации бизнеса. Это позволяет нам решить
                        многие проблемы еще до того, как они появятся.</p>
                </div>
                <div class="facts__item fact">
                    <img src="/img/sqr.jpg" alt="" class="fact__img">
                    <h3 class="fact__title">Лицом к партнерам</h3>
                    <p class="fact__description">Нашим партнерам не нужно выполнять план продаж, дожидаться очереди или
                        заказывать не нужный объем. Мы стремимся к честному и прозрачному сотрудничеству.</p>
                </div>
            </div>
        </div>
    </section>
@endsection