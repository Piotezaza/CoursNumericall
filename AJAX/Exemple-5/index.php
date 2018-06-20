<?php

require_once('src/utils.php');
$pdo = dbConnect();

$template = "login";
$registrationError = "";

// INSCRIPTION
if(isset($_POST['register']))
{
    $result = register($pdo, $_POST, $_FILES);

    if(!$result['success'])
    {
        $registrationError = $result['message'];
    }
}

require_once('view/header.php');
require_once('view/' . $template . '.php');
require_once('view/footer.php');