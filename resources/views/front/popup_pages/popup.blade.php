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
        @if($popup_name == 'thank')
            <div class="white-popup mfp-with-anim mfp-hide send-status" id="thanks">
                <h4 class="popup-title">Сообщение отправлено!</h4>
                <p class="sub-title-text">Спасибо, мы свяжемся с вами в ближайшее время.</p>
                <a href="{{Session::pull('back_page', '/')}}">Ссылка на страницу с которой была вызвана форма</a>
            </div>
        @elseif($popup_name == 'error')
            <div class="white-popup mfp-with-anim mfp-hide send-status">
                <h4 class="popup-title">Сообщение<br>не отправлено</h4>
                <p class="sub-title-text">При отправке сообщения возникли проблемы, повторите чуть позже</p>
                <a href="{{Session::get('back_page', '/')}}">Ссылка на страницу с которой была вызвана форма</a>
            </div>
        @else
            @include('front.popups.'.$popup_name)
        @endif
    </div>
</body>
</html>