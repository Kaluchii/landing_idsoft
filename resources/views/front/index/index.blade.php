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
                            <embed class="animate__img-embed animate__img-embed--pockets" src="/img/bags.svg">
                        </object>
                    </div>
                    <div class="animate__img animate__img--bludo">
                        <object class="animate__img-object animate__img-object--bludo">
                            <embed class="animate__img-embed animate__img-embed--bludo" src="/img/plate.svg">
                        </object>
                    </div>

                    <img src="/img/skaner.png" alt="" class="animate__img animate__img--scanner">
                    <img src="/img/printer.png" alt="" class="animate__img animate__img--printer">
                    {{--<img src="/img/monitor.png" alt="" class="animate__img animate__img--sensor">
                    <img src="/img/on-monitor.png" alt="" class="animate__img animate__img--monitor">
                    <img src="/img/hand-header.png" alt="" class="animate__img animate__img--hand">--}}

                    <div class="animate__sensor-wrap">
                        <img src="/img/monitor.png" alt="" class="animate__img animate__img--sensor">
                        <img src="/img/on-monitor.png" alt="" class="animate__img animate__img--monitor">
                        <img src="/img/hand-header.png" alt="" class="animate__img animate__img--hand">
                    </div>

                </div>
            </div>
        </div>
    </section>


    <section class="in-stock">
        <div class="in-stock__wrap-1160">
            <h2 class="in-stock__title">Оборудование в постоянном наличии</h2>
            <p class="in-stock__sub-title">Все позиции в наличии с собственного склада в Санкт-Петербурге. Без
                посредников.</p>
            <div class="in-stock__equipments-wrap equipments">
                <div class="equipments__col">
                    <div class="equipments__item equipment">
                        <a href="#partner" class="equipment__link  open_feedback">
                            <img src="{{$products->pr1_img_field->link}}" alt="{{$products->pr1_img_field->alt}}" class="equipment__img">
                            <p class="equipment__title">{{$products->pr1_field}}</p>
                        </a>
                        {{--<p class="equipment__models-count">{{$products->pr1_count_field}}</p>--}}
                    </div>
                    <div class="equipments__item equipment">
                        <a href="#partner" class="equipment__link  open_feedback">
                            <img src="{{$products->pr2_img_field->link}}" alt="{{$products->pr2_img_field->alt}}" class="equipment__img">
                            <p class="equipment__title">{{$products->pr2_field}}</p>
                        </a>
                        {{--<p class="equipment__models-count">{{$products->pr2_count_field}}</p>--}}
                    </div>
                </div>
                <div class="equipments__col equipments__col--big">
                    <div class="equipments__item equipment equipment--big">
                        <a href="#partner" class="equipment__link  open_feedback">
                            <img src="{{$products->pr3_img_field->link}}" alt="{{$products->pr3_img_field->alt}}" class="equipment__img">
                            <p class="equipment__title">{{$products->pr3_field}}</p>
                        </a>
                        {{--<p class="equipment__models-count">{{$products->pr3_count_field}}</p>--}}
                    </div>
                </div>
                <div class="equipments__col">
                    <div class="equipments__item equipment">
                        <a href="#partner" class="equipment__link  open_feedback">
                            <img src="{{$products->pr4_img_field->link}}" alt="{{$products->pr4_img_field->alt}}" class="equipment__img">
                            <p class="equipment__title">{{$products->pr4_field}}</p>
                        </a>
                        {{--<p class="equipment__models-count">{{$products->pr4_count_field}}</p>--}}
                    </div>
                    <div class="equipments__item equipment">
                        <a href="#partner" class="equipment__link  open_feedback">
                            <img src="{{$products->pr5_img_field->link}}" alt="{{$products->pr5_img_field->alt}}" class="equipment__img">
                            <p class="equipment__title">{{$products->pr5_field}}</p>
                        </a>
                        {{--<p class="equipment__models-count">{{$products->pr5_count_field}}</p>--}}
                    </div>
                </div>
            </div>
            <div class="in-stock__offer-wrap">
                <p class="in-stock__give-commercial-proposal">
                    <a download="{{$products->cp_field->title}}" href="{{$products->cp_field->link}}" class="in-stock__give-commercial-proposal-btn">Получить коммерческое предложение</a>
                </p>
                <p class="in-stock__we-will-tell">Мы расскажем об условиях работы,
                    актуальные цены и о прогрессирующих скидках.</p>
            </div>
        </div>
        <p class="in-stock__popularity">Мы поставляем оборудование 8&nbsp;из&nbsp;10 интеграторам Казахстана</p>
    </section>


    <section class="guarantee">
        <div class="guarantee__wrap-1280">
            <h2 class="guarantee__title">Гарантия и&nbsp;сервис</h2>
            <div class="guarantee__col-1">
                <div class="fotorama" data-loop="true" data-autoplay="5000">
                    @foreach($guarantee->slider_group as $item)
                        <img src="{{$item->slide_field->link}}" alt="{{$item->slide_field->alt}}">
                    @endforeach
                </div>
            </div>
            <div class="guarantee__col-2 support-info">
                @foreach($guarantee->support_group as $item)
                    <div class="support-info__item">
                        <h3 class="support-info__title">{{$item->text_title_field}}</h3>
                        <p class="support-info__description">{{$item->descr_field}}</p>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <section class="about">
        <div class="about__facts-wrap facts">
            <div class="facts__hand-wrap">
                <div class="facts__hand">
                    <img src="/img/hand-with-lazer.png" alt="" class="facts__hand-img">
                    <img src="/img/laser_on.png" alt="" class="facts__hand-laser-img">
                </div>
            </div>
            <div class="facts__col-1-2">
                <h2 class="about__title">О компании</h2>
                <?php $i = 1;
                $half = floor($about->facts_group->count() / 2) ?>
                @foreach($about->facts_group as $item)
                    @if($i <= $half)
                        <div class="facts__item fact">
                            <img src="{{$item->img_field->link}}" alt="{{$item->img_field->alt}}" class="fact__img">
                            <h3 class="fact__title">{{$item->text_title_field}}</h3>
                            <p class="fact__description">{{$item->descr_field}}</p>
                        </div>
                    @endif
                    <?php $i++ ?>
                @endforeach
                <div class="facts__reputation">
                    <img src="/img/reputation.png" alt="Мы дорожим репутацией" class="facts__img">
                    <p class="facts__reputation-text">Мы бережем репутацию и хотим быть
                        компанией, на которую вы рассчитываете.</p>
                </div>
            </div>
            <div class="facts__col-1-2">
                <?php $i = 1 ?>
                @foreach($about->facts_group as $item)
                    @if($i > $half)
                        <div class="facts__item fact">
                            <img src="{{$item->img_field->link}}" alt="{{$item->img_field->alt}}" class="fact__img">
                            <h3 class="fact__title">{{$item->text_title_field}}</h3>
                            <p class="fact__description">{{$item->descr_field}}</p>
                        </div>
                    @endif
                    <?php $i++ ?>
                @endforeach
            </div>
        </div>
    </section>
@endsection