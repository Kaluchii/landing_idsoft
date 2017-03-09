@section('main-menu')
    <section class="sidebar">
        <ul class="sidebar-menu">
            <li class="header">Главная страница</li>
            <li>
                <a href="/adm/all">
                    <i class="fa fa-globe"></i> <span>Общие настройки</span>
                </a>
            </li>
            <li>
                <a href="/adm/advantages">
                    <i class="fa  fa-check-square"></i> <span>Преимущества</span>
                </a>
            </li>
            <li>
                <a href="/adm/about">
                    <i class="fa  fa-file-text-o"></i> <span>О компании</span>
                </a>
            </li>
            <li>
                <a href="/adm/slider">
                    <i class="fa fa-image"></i> <span>Слайдер</span>
                </a>
            </li>
            <li>
                <a href="/adm/certs">
                    <i class="fa   fa-star-o"></i> <span>Сертификаты</span>
                </a>
            </li>
            <li>
                <a href="/adm/seo">
                    <i class="fa fa-chrome"></i> <span>СЕО</span>
                </a>
            </li>



            {{--<li>--}}
                {{--<a href="reg">--}}
                    {{--<i class="fa fa-link"></i> <span>Регистрация</span>--}}
                {{--</a>--}}
            {{--</li>--}}
            {{--<li class="treeview">--}}
                {{--<a href="#"><i class="fa fa-link"></i> <span>Multilevel</span>--}}
                        {{--<span class="pull-right-container">--}}
                            {{--<i class="fa fa-angle-left pull-right"></i>--}}
                        {{--</span>--}}
                {{--</a>--}}
                {{--<ul class="treeview-menu">--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                    {{--<li><a href="#">Link in level 2</a></li>--}}
                {{--</ul>--}}
            {{--</li>--}}
        </ul>
    </section>

@endsection