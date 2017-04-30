/* Форма должна иметь класс .form
Идентификатор должен находиться у формы или попапа,
    элементу с идентификатором прописать класс .form-id
Каждое поле ввода должно иметь класс .form-input
Каждая ссылка для открытия попапа должна содержать класс .open_popup,
    а в свойстве href должна содержать /mail/id_попапа */

$(document).ready(function(){
    $('.thank').magnificPopup({
        type: 'inline',
        removalDelay: 500,
        callbacks: {
            beforeOpen: function() {
                this.st.mainClass ='mfp-zoom-in';
            }
        },
        midClick: true
    });

    // Изменение адреса ссылок для открытия попапов
    $('.open_popup').each(function () {
        var $this = $(this);
        var href = $this.attr('href');
        if (href[0] == '/'){
            $this.attr('href', '#' + href.substr(6));
        }
    });

    // Отмена встроенной браузерной валидации форм
    $('.form').each(function () {
        $(this).attr('novalidate', '')
    });

    // Предотвращение отправки формы через php при нажатии на кнопку
    $('.form').submit(function (e) {
        e.stopPropagation();
        e.preventDefault();
    });

    // Проверка почты на соответствие маске *@*.*
    function isEmail( mail ){
        regex = /\S+@\S+/igm;
        return regex.test(mail);
    }


    // Очистка формы
    function clearFields( selector ){
        $(selector).each(function(){
            if( $(this).attr('name') != 'form' && $(this).attr('name') != '_token'){
                $(this).val('');
                $(this).parent().removeClass('valid');
            }
        });
    }


    // Проверка отдельного поля на валидность
    function fieldValid( input ) {

        if( input.val() != '' ){

            if ( input.attr('type') == 'email' ){
                return isEmail( input.val() );
            } else {
                return true;
            }

        } else {
            return false;
        }

    }


    // Добавление классов полю по результатам валидации
    function fieldCheck( input ) {

        var parent = input.parent();

        if( fieldValid( input ) ){
            if( parent.hasClass('error') ){
                parent.removeClass('error')
            }
            parent.addClass('valid');

            if( input.hasClass('form-name') ){
                $('.img-name').addClass('visible');
            }
            if( input.hasClass('form-phone') ){
                $('.img-phone').addClass('visible');
            }
            if( input.hasClass('form-mail') ){
                $('.img-mail').addClass('visible');
            }
            if( input.hasClass('form-question') ){
                $('.img-question').addClass('visible');
            }

            return true;
        } else {
            if( parent.hasClass('valid') ){
                parent.removeClass('valid')
            }
            parent.addClass('error');

            if( input.hasClass('form-name') ){
                $('.img-name').removeClass('visible');
            }
            if( input.hasClass('form-phone') ){
                $('.img-phone').removeClass('visible');
            }
            if( input.hasClass('form-mail') ){
                $('.img-mail').removeClass('visible');
            }
            if( input.hasClass('form-question') ){
                $('.img-question').removeClass('visible');
            }

            return false;
        }
    }

    $('.form-input').on('change', function () {
        return fieldCheck( $(this) );
    });
    $('.form-input').on('focusout', function () {
        $(this).parent().removeClass('filling');
    });
    $('.form-input').on('input', function () {
        $(this).parent().addClass('filling');
    });


    // Проверка полей формы на отсутствие пустых полей и валидность
    function  fieldsCheck( selector ){
        var checked = true;
        var focus = true;
        $(selector).each( function () {
            checked = fieldCheck( $(this) ) && checked;
            if ( focus && !checked ){
                $(this).focus();
                focus = false;
            }
        });
        return checked;
    }


    // Сбор данных с формы и формирование объекта
    function addFields( selector, object ){

        $(selector).each(function () {
            $this = $(this);

            object[$this.attr('name')] = $this.val();
        });
    }

    // var captchaResult = false;
    function onSubmitReCaptcha(token) {
        /*console.log('Captcha test passed');

        cResponse['g-recaptcha-response'] = grecaptcha.getResponse();
        var capchaTest = $.ajax(
            {
                type: 'POST',
                url: '/',
                dataType: 'json',
                data: cResponse
            }
        );

        capchaTest.success(function(data){
            captchaResult = !data.error;
        });
        capchaTest.error(function(data){
            captchaResult = false;
        });*/
    }
    

    var active = true;
    $('.send-form').on('click', sendForm);

    function sendForm(token) {
        if( active ){
            unical = $(this).closest('.form-id').attr('id');
            active = false;
            var $this = $(this);
            var dataobj = {};

            var selector = '#'+unical+' .form-input';
            var validForm  = fieldsCheck( selector );

            // Если попап обратной связи не был открыт, то эта форма не валидна (т.к. отправляет письмо робот)
            if ( unical == 'partner' && !popupOpen ){
                validForm = false
            }

            if ( validForm && unical == 'become_partner' ) {
                console.log('Captcha test passed');

                cResponse = {};
                cResponse['g-recaptcha-response'] = grecaptcha.getResponse();
                var captchaTest = $.ajax(
                    {
                        type: 'POST',
                        url: '/captcha',
                        dataType: 'json',
                        data: cResponse
                    }
                );

                captchaTest.success(function(data){
                    if (data.error){
                        alert('Проверка не пройдена!');
                    }else{
                        addFields( selector, dataobj );

                        var deferred = $.ajax(
                            {
                                type: 'POST',
                                url: '/feedback/mail',
                                dataType: 'json',
                                data: dataobj
                            }
                        );

                        $this.addClass('load');

                        deferred.success(function(data){
                            if(!data.error){
                                $('.thank').click();
                                active = true;
                                clearFields( selector );
                                $this.removeClass('load');
                            }
                        });
                        deferred.error(function(data){
                            console.log(data);
                            $this.removeClass('load');
                        });
                    }
                    console.log('Captcha success');
                });

                captchaTest.error(function(data){
                    console.log('Captcha error');
                });

            }else if ( validForm ){
                addFields( selector, dataobj );

                var deferred = $.ajax(
                    {
                        type: 'POST',
                        url: '/feedback/mail',
                        dataType: 'json',
                        data: dataobj
                    }
                );

                $this.addClass('load');

                deferred.success(function(data){
                    if(!data.error){
                        $('.thank').click();
                        active = true;
                        clearFields( selector );
                        $this.removeClass('load');
                    }
                });
                deferred.error(function(data){
                    console.log(data);
                    $this.removeClass('load');
                });
            }else{
                active = true;
            }

        }

    }
});