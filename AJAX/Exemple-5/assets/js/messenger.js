$(function()
{
    var $form = $('#message-form');

    function postMessage()
    {
        // $.ajax({ url: '...', method: 'POST', data: $form.serialize()}).done(function(data){})
        $.post(
            'src/postMessage.php', 
            $form.serialize() /* {message: $message.val(), ...} */, 
            function(data)
            {
                console.log(data);
            }
            , 'json'
        );

        return false;
    }

    $form.submit(postMessage);
});