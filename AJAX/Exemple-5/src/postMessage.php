<?php

session_start();
require_once('utils.php');

$pdo = dbConnect();

if($user = getUser())
{
    
}