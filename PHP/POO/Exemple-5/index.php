<?php

require_once('Include/header.php');

require_once('Form/Form.php');
require_once('Form/TextItem.php');

$myform = new Form ("login", "POST", "", array("class" => "form", "id" => "login-form");

echo $myform->createView();

require_once('Include/footer.php');