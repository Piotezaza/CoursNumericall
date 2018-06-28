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
$infos = $maison->getInfos();



?>

<form method="POST" action="enregistrerAjax.php">
<div class="form-group">
  <input type="text" class="form-control" name="nom" placeholder="Nom de la maison">
</div>
<div class="form-group">
  <input type="text" class="form-control" name="matStructure" value"<?= $infos['matStructure'] ?>" placeholder="Matériaux de la structure">
</div>
<div class="form-group">
  <input type="text" class="form-control" name="matToiture" value"<?= $infos['matToiture'] ?>" placeholder="Matériaux de la toiture">
</div>
<div class="form-group">
    <textarea class="form-control" name="pieces" id="pieces" rows="3">

<?php 
    foreach ($infos['pieces'] as $key => $value) {
        echo "PIECES $key 
        ";
        echo "Nom: " . $value['nom'] ."
        ";
        echo "Surface: " . $value['surface'] . "
        ";
        echo "Hauteur: " . $value['hauteur'] . "
        ";
        echo "Nombre de fenêtre: " . $value['nbFenetres'] . "
            ";
    }
?>
    </textarea>
</div>
<button type="submit" class="btn btn-primary">Envoyer</button>
</form>

<?php require_once('inc/footer.php');?>