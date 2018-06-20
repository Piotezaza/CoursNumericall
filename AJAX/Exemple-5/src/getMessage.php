<?php

session_start();
require_once('utils.php');

$pdo = dbConnect();

$messages = getLastMessages($pdo);

header("Content-Type : application/json");
echo json_encode($messages);