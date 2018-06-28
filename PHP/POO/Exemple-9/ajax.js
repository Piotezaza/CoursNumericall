$form=$("form");

function postMessage(e)
    {
        e.preventDefaults(); // Pout être sûr qu'il n'y aura pas d'autres méthodes submit appelées
        
        /* 
        $.ajax({ 

            url: '...', 
            method: 'POST', 
            data: $form.serialize()
        })
        .done(function(data){})
        */

        $.post(
            'src/enregistrerAjax.php', 
            $form.serialize() /* {message: $message.val(), ...} */, 
            function(data)
            {
                $form.find('[name="message"]').val('');
            }
            , 'json'
        );

        return false; // évite le rechargement de la page
    }

    $form.submit(postMessage);