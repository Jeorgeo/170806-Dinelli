$(document).ready(function(){

    $('.cloud-form').submit(function(evt) {

        if($(".cloud-form__сonsent").attr("checked") == 'checked') {
            return;
        } else {
            window.alert('Дайте свое согласие на обработку данных!');
            $(".cloud-form__сonsent").css('border', '1px solid red');
            evt.preventDefault();  
        }
    });
});
