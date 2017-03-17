$(window).on('load', function () {
    $('.animate__img--sensor').delay(0, animateClass1);
    $('.animate__img--printer').delay(0, animateClass2);
    /*setTimeout(animateClass('.animate__img--sensor', 'animate__img--sensor-animated'), 500);
    setTimeout(animateClass('.animate__img--printer', 'animate__img--printer-animated'), 2000);*/
});

function animateClass1(){
    $(this).addClass('animate__img--sensor-animated');
}
function animateClass2(){
    $(this).addClass('animate__img--printer-animated');
}