$(document).ready(function(){$('.thank').magnificPopup({type:'inline',removalDelay:500,callbacks:{beforeOpen:function(){this.st.mainClass='mfp-zoom-in';}},midClick:true});$('.open_popup').each(function(){var $this=$(this);var href=$this.attr('href');if(href[0]=='/'){$this.attr('href','#'+href.substr(6));}});$('.form').each(function(){$(this).attr('novalidate','')});$('.form').submit(function(e){e.stopPropagation();e.preventDefault();});function isEmail(mail){var regex=/\S+@\S+/igm;return regex.test(mail);}function clearFields(selector){$(selector).each(function(){if($(this).attr('name')!='form'&&$(this).attr('name')!='_token'){$(this).val('');$(this).parent().removeClass('valid');}});}function fieldValid(input){if(input.val()!=''){if(input.attr('type')=='email'){return isEmail(input.val());}else{return true;}}else{return false;}}function fieldCheck(input){var parent=input.parent();if(fieldValid(input)){if(parent.hasClass('error')){parent.removeClass('error')}parent.addClass('valid');if(input.hasClass('form-name')){$('.img-name').addClass('visible');}if(input.hasClass('form-phone')){$('.img-phone').addClass('visible');}if(input.hasClass('form-mail')){$('.img-mail').addClass('visible');}if(input.hasClass('form-question')){$('.img-question').addClass('visible');}return true;}else{if(parent.hasClass('valid')){parent.removeClass('valid')}parent.addClass('error');if(input.hasClass('form-name')){$('.img-name').removeClass('visible');}if(input.hasClass('form-phone')){$('.img-phone').removeClass('visible');}if(input.hasClass('form-mail')){$('.img-mail').removeClass('visible');}if(input.hasClass('form-question')){$('.img-question').removeClass('visible');}return false;}}$('.form-input').on('change',function(){return fieldCheck($(this));});$('.form-input').on('focusout',function(){$(this).parent().removeClass('filling');});$('.form-input').on('input',function(){$(this).parent().addClass('filling');});function fieldsCheck(selector){var checked=true;var focus=true;$(selector).each(function(){checked=fieldCheck($(this))&&checked;if(focus&&!checked){$(this).focus();focus=false;}});return checked;}function addFields(selector,object){$(selector).each(function(){var $this=$(this);object[$this.attr('name')]=$this.val();});}function ajaxDataSend(type,url,data,headers){headers=headers||{};return $.ajax({type:type,url:url,dataType:'json',data:data,headers:headers});}window.onSubmitReCaptcha=function(token){active=false;sendButton.addClass('load');console.log('Captcha test start');var csrfT={'X-CSRF-TOKEN':$('meta[name="csrf-token"]').attr('content')};var cResponse={'g-recaptcha-response':grecaptcha.getResponse()};var capchaTest=ajaxDataSend('POST','/captcha',cResponse,csrfT);capchaTest.success(function(data){if(data.error){alert('Проверка не пройдена!');sendButton.removeClass('load');active=true;}else{console.log('CaptchaTest success');sendForm();}});capchaTest.error(function(data){alert('При отправке сообщения произошла ошибка');console.log('CaptchaTest error');sendButton.removeClass('load');active=true;});};var unical,sendButton,selector;var active=true;function finalValidation(){if(active){sendButton=$(this);unical=sendButton.closest('.form-id').attr('id');selector='#'+unical+' .form-input';var validForm=fieldsCheck(selector);if(validForm){grecaptcha.reset();grecaptcha.execute();}}}$('.send-form').on('click',finalValidation);function sendForm(){var dataobj={};addFields(selector,dataobj);var response=ajaxDataSend('POST','/feedback/mail',dataobj);response.success(function(data){if(!data.error){$('.thank').click();clearFields(selector);}sendButton.removeClass('load');active=true;});response.error(function(data){console.log(data);sendButton.removeClass('load');active=true;});}});