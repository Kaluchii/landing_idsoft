$(document).ready(function () {

    $('.open_feedback').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function () {
                this.st.mainClass = 'mfp-zoom-in';
            }
        },
        midClick: true
    });

    $('.facts__hand-wrap').addClass('visible');

});

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
    }, 3300);


    setTimeout(function () {
        $('.animate__img--hand').removeClass('animate__img--hand-animated');
    }, 5000);


    // Анимации блюда и пакетов css-ные находятся внутри svg файлов ( bags.svg  plate.svg )

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

$(window).on('scroll', function () {
    if ($(window).width() > '1000') {
        var scrollTop = $(window).scrollTop();
        var bottomPosition = scrollTop + $(window).height();
        var blockTop = $('.about').offset().top;
        var blockBottom = blockTop + $('.about').height();
        var handHeight = $('.facts__hand-wrap').height();

        if ( scrollTop > $('.in-stock').offset().top ){
            $('.sticky-header').fadeIn();
        } else {
            $('.sticky-header').fadeOut();
        }

        if ( (bottomPosition > blockTop + handHeight) && (bottomPosition <= blockBottom) ){
            $('.facts__hand-wrap').addClass('facts__hand-wrap--screen-fixed');
            $('.facts__hand-wrap').removeClass('facts__hand-wrap--bottom-fixed');
        }else if ( bottomPosition > $('.become').offset().top - 1 ){
            $('.facts__hand-wrap').addClass('facts__hand-wrap--bottom-fixed');
            $('.facts__hand-wrap').removeClass('facts__hand-wrap--screen-fixed');
        }else {
            $('.facts__hand-wrap').removeClass('facts__hand-wrap--screen-fixed');
        }
    }
});

function animateClass( animatedElement, animationClass ){
    $(animatedElement).addClass(animationClass);
}
