/*$(window).on('load', function () {
    $('.animate__img--sensor').delay(0, animateClass1);
    $('.animate__img--printer').delay(0, animateClass2);
    setTimeout(animateClass('.animate__img--sensor', 'animate__img--sensor-animated'), 500);
    setTimeout(animateClass('.animate__img--printer', 'animate__img--printer-animated'), 2000);
});

function animateClass1(){
    $(this).addClass('animate__img--sensor-animated');
}
function animateClass2(){
    $(this).addClass('animate__img--printer-animated');
}*/

$(window).on('load', function () {
    setTimeout($('.animate__img--sensor').addClass('animate__img--sensor-animated'), 500);
    setTimeout($('.animate__img--printer').addClass('animate__img--printer-animated'), 5000);
    setTimeout($('.animate__img--scanner').addClass('animate__img--scanner-animated'), 5000);
    /*setTimeout(animateClass('.animate__img--sensor', 'animate__img--sensor-animated'), 500);
     setTimeout(animateClass('.animate__img--printer', 'animate__img--printer-animated'), 2000);*/
});

$(window).on('scroll', function () {
    var bottomPosition = $(window).scrollTop() + $(window).height();
    var blockTop = $('.about').offset().top;

    if ( bottomPosition >= blockTop ){

        var blockBottom = blockTop + $('.about').height();
        var handHeight = $('.facts__hand-wrap').height();

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
