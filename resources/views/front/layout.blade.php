<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="" type="image/gif">

    @include('front.styles')
    @yield('styles')
    @yield('meta')

</head>
<body>
    @include('front.header')
    @yield('header')

    @yield('content')

    @include('front.footer')
    @yield('footer')

    <div class="hide">
        @include('front.popups.partner')
        @include('front.popups.thank')
        <a href="/mail/thanks" class="thank open_popup"></a>
    </div>

    @include('front.scripts')
    @include('front.metriks')
    @yield('scripts')
    @yield('metriks')
</body>
</html>