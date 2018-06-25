<?php

require_once('Include/header.php');

require_once('Form/Form.php');
require_once('Form/TextItem.php');
require_once('Entity/User.php');

$user = new User("Loic", "Azerty", "ovigne.loic@gmail.com");
echo $user->getPassword();

$myform = new Form ("login", "POST", "", array("class" => "form", "id" => "login-form"));
$myform->addItem(new TextItem("username"));

echo $myform->createView();

require_once('Include/footer.php');