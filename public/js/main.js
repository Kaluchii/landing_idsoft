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
//setTimeout($('.animate__img--printer').addClass('animate__img--printer-animated'), 5000);
//setTimeout($('.animate__img--scanner').addClass('animate__img--scanner-animated'), 5000);
///*setTimeout(animateClass('.animate__img--sensor', 'animate__img--sensor-animated'), 500);
// setTimeout(animateClass('.animate__img--printer', 'animate__img--printer-animated'), 2000);*/
$(document).ready(function () {

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

function animateClass(animatedElement, animationClass) {
    $(animatedElement).addClass(animationClass);
}
