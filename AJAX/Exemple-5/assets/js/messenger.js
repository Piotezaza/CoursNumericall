$(function()
{
    var $form = $('#message-form');
    var lastId = 0;
    var $messageMe = $('#messages .me');
    var $messageNotMe = $('#messages .not-me');

    function showMessages(data)
    {
        $.each(data, function(index, value){
            $message = (data.user.id == value.user? $messageMe.clone(): $messageNotMe.clone()); // ATTENTION !!!!!! Si la BDD c'est user_id, bien penser à rajouter le _id !!! 
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