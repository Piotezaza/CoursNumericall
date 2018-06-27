<?php
    require_once('../inc/init.php');
    require_once('inc/header.php');
    require_once("../objects/Classes/DAOCommande.php");
    $contenu ="";
    $liste= getAllCommands();
    foreach ($liste as $command) {
        $contenu .= $command->toHTMLTable();
    }

    


?>

<h1>Gestion des commandes</h1>


<?= $contenu ?>

<?php require_once('inc/footer.php'); ?>