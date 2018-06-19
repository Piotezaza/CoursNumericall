<?php

require_once('src/utils.php');
$pdo = dbConnect();

$template = "login";

// INSCRIPTION
if(isset($_POST['register']))
{
    
}

require_once('view/header.php');
require_once('view/' . $template . '.php');
require_once('view/footer.php');