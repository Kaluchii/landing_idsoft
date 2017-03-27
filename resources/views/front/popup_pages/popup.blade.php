@include('front.styles')
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="" type="image/gif">
    @yield('styles')
</head>
<body>
    <div class="popup-page">
        @if($popup_name == 'thank')
            <div class="white-popup mfp-with-anim mfp-hide white-popup--send-status" id="thanks">
                <h4 class="white-popup__title">Сообщение отправлено!</h4>
                <p class="white-popup__sub-title">Спасибо, мы свяжемся с вами в ближайшее время.</p>
                <a href="{{Session::pull('back_page', '/')}}" class="white-popup__back-page-link">Назад к сайту</a>
            </div>
        @elseif($popup_name == 'error')
            <div class="white-popup mfp-with-anim mfp-hide white-popup--send-status">
                <h4 class="white-popup__popup-title">Сообщение<br>не отправлено</h4>
                <p class="white-popup__sub-title">При отправке сообщения возникли проблемы, повторите чуть позже</p>
                <a href="{{Session::get('back_page', '/')}}" class="white-popup__back-page-link">Назад к сайту</a>
            </div>
        @else
            @include('front.popups.'.$popup_name)
        @endif
    </div>
</body>
</html>