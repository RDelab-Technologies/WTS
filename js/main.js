"use strict"

$(window).on("load", function() {
    $('.btn-forget').on('click',function(e){
        e.preventDefault();
        var inputField = $(this).closest('form').find('input');
        if(inputField.attr('required') && inputField.val()){
            $('.error-message').remove();
            $('.form-items','.form-content').addClass('hide-it');
            $('.form-sent','.form-content').addClass('show-it');
        }else{
            $('.error-message').remove();
            $('<small class="error-message">Please fill the field.</small>').insertAfter(inputField);
        }

    });
    
    $('.btn-tab-next').on('click',function(e){
        e.preventDefault();
        $('.nav-tabs .nav-item > .active').parent().next('li').find('a').trigger('click');
    });
    $('.custom-file input[type="file"]').on('change', function(){
        var filename = $(this).val().split('\\').pop();
        $(this).next().text(filename);
    });
});


       // JavaScript to toggle the registration form and backdrop
document.getElementById('create-account-button').addEventListener('click', function () {
    document.getElementById('registration-container').classList.add('active');
    document.getElementById('backdrop').classList.add('active');
});

document.getElementById('close-registration-button').addEventListener('click', function () {
    document.getElementById('registration-container').classList.remove('active');
    document.getElementById('backdrop').classList.remove('active');
});

 