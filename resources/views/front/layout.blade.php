<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="/img/id_fav.gif" type="image/gif">

    @include('front.styles')
    @yield('styles')
    {!! $scripts->before_head_close_field !!}
    @yield('meta')

</head>
<body>
    {!! $scripts->after_open_field !!}

    @include('front.header')
    @yield('header')

    @yield('content')

    @include('front.footer')
    @yield('footer')

    <div class="hide">
        @include('front.popups.partner')
        @include('front.popups.thank')
        <a href="#thanks" class="thank open_popup"></a>
    </div>

    @include('front.scripts')
    @include('front.metriks')
    @yield('scripts')
    @yield('metriks')

    {!! $scripts->before_close_field !!}
</body>
</html>