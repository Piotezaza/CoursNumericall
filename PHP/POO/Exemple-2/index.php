<?php

require_once('DVD.php');

$monDVD = new DVD();
$monDVD->setPrix(12.99);

echo $monDVD->getPrix();

