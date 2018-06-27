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
use \Maison\Piece;

$maison = new Maison("Bois", "Tuiles");
// $maison -> setMateriauxStructure("Briques");

$chambre1 = new Piece("Chambre 1", 16, 2.5);
$cuisine = new Piece("Cuisine", 20, 2.5);

$pieces = [$chambre1, $cuisine];
$maison->setPieces($pieces);

// echo $maison -> getMateriauxStructure();
// echo '<hr/>';
// echo $maison -> getMateriauxToiture();

var_dump($maison->getInfos());

require_once('inc/footer.php');