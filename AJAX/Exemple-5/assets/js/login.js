var url = 'src/checkUser.php';
var $username = $('#register-form [name="username"]');
var $email = $('#register-form [name="email"]');

function checkUser(e)
{
    // $form = $('#register-form');
    // $data = $form.serialize();
    $.getJSON(url, {username: $username.val(), email: $email.val()} /* data */, function(result){
        console.log(result);
    });
}

$username.keyup(checkUser);
$email.keyup(checkUser);