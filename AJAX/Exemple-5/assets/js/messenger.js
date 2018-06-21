$(function()
{
    var $form = $('#message-form');
    var lastId = 0;
    var $messageMe = $('#messages .me');
    var $messageNotMe = $('#messages .not-me');

    function showMessages(data)
    {
        $.each(data, function(index, value){
            
        });
    }

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

    function getMessage()
    {
        $.getJSON('src/getMessage.php', {lastId: lastId}, function(data){
            showMessages(data);
        })
    }

    getMessage();
});