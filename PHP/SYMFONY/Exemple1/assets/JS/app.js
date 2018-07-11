import 'bootstrap';

$(document).ready(function(){

    var $form = $('form[name="form"]');

    $form.submit(function(){

        $.post($form.attr('action'), $form.serialize(), function(data){
            console.log(data);
        }, 'json');
    });

});