$(function()
{
    var $form = $('#message-form');

    function postMessage()
    {
        $.post('src/postMessage.php', $form.serialize() /* {message: $message.val(), ...} */, function(data){
            console.log(data);
        }, 'json');
    }

    $form.submit(postMessage);
});