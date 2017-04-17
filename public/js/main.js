$(document).ready(function () {

    $('.open_feedback').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
                $('.popup-input[type=tel]').mask('+7 (000) 000-00-00')
            }
        },
        midClick: true
    });

    $('.facts__hand-wrap').addClass('visible');

});

function animateClass( animatedElement, animationClass ){
    $(animatedElement).addClass(animationClass);
}

function scanerAnim() {
    $('.facts__hand-laser-img').addClass('facts__hand-laser-img--on').fadeIn();
    setTimeout(function () {
        animateClass('.facts__hand-wrap', 'facts__hand-wrap--reading')
    }, 1000);
    setTimeout(function () {
        $('.facts__hand-laser-img').removeClass('facts__hand-laser-img--on').fadeOut();
    }, 2400);
    setTimeout(function () {
        animateClass('.facts__hand-wrap', 'facts__hand-wrap--right')
    }, 2800);
    setTimeout(function () {
        $('.about').addClass('about--custom-cursor');
    }, 3700);
}

$(window).on('load', function () {
    setTimeout(function () {
        animateClass('.animate__img--printer', 'animate__img--printer-animated')
    }, 200);
    setTimeout(function () {
        animateClass('.animate__img--scanner', 'animate__img--scanner-animated')
    }, 600);
    setTimeout(function () {
        animateClass('.animate__img--sensor', 'animate__img--sensor-animated')
    }, 1000);

    setTimeout(function () {
        animateClass('.animate__img--hand', 'animate__img--hand-animated')
    }, 2000);

    setTimeout(function () {
        animateClass('.animate__img--monitor', 'animate__img--monitor-animated')
    }, 3600);


    setTimeout(function () {
        $('.animate__img--hand').removeClass('animate__img--hand-animated');
    }, 5000);


    // Анимации блюда и пакетов css-ные находятся внутри svg файлов ( bags.svg  plate.svg )

    var canAnimate = true;

    $(window).on('scroll', function () {
        if ($(window).width() > '1000') {
            var scrollTop = $(window).scrollTop();
            var animateEnableTop = scrollTop + $(window).height() * 0.1;
            var animateEnableBottom = scrollTop + $(window).height() * 0.6;
            var blockTop = $('.about').offset().top;

            if ( scrollTop > $('.in-stock').offset().top ){
                $('.sticky-header').fadeIn();
            } else {
                $('.sticky-header').fadeOut();
            }

            if ( blockTop < animateEnableBottom && canAnimate && blockTop > animateEnableTop ){
                scanerAnim();
                canAnimate = false;
            }
        } else {
            $('.sticky-header').hide();
        }
    });

});

// Перестройка блоков контента на разных разрешениях
function MoveBlock() {
    if ($(window).width() <= '720') {
        $('.facts__reputation').appendTo($('.facts__col-1-2:last-child'));
    } else {
        $('.facts__reputation').appendTo($('.facts__col-1-2:nth-child(2)'));
    }
}

$(window).on('load resize', MoveBlock);