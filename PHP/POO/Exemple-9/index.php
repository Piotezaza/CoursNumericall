<?php

spl_autoload_register(function($className)
{
    if(file_exists($className . '.php'))
    {
        require_once($className . '.php');
    }
});

require_once('inc/header.php');

use \Maison\Maison;
use \Pieces\Pieces;

$maison = new Maison("Bois", "Tuiles");
// $maison -> setMateriauxStructure("Briques");

echo $maison -> getMateriauxStructure();
echo '<hr/>';
echo $maison -> getMateriauxToiture();



require_once('inc/footer.php');