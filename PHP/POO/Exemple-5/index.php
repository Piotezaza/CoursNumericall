<?php

require_once('Include/header.php');

require_once('Form/Form.php');

$myform = new Form ("login");
echo $myform->createView();

require_once('Include/footer.php');