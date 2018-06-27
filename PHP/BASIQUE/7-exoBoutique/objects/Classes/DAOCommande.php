<?php
require_once("commande.php");

function returnHTMLRowReducedTitle(){
    $contenu = "";
    $contenu .= "<th>id</th>";
    $contenu .= "<th>reference</th>";
    $contenu .= "<th>categorie</th>";
    $contenu .= "<th>titre</th>";
    $contenu .= "<th>description</th>";
    $contenu .= "<th>couleur</th>";
    $contenu .= "<th>taille</th>";
    $contenu .= "<th>public</th>";
    $contenu .= '<th>photo</th>';
    $contenu .= "<th>prix</th>";
    $contenu .= "<th>stock</th>";
    return $contenu;
}
 // GET commande DAO
function getAllCommands(){
    $dsn = 'mysql:host=localhost; dbname=boutique';
    $login = 'root';
    $pwd = '';
    $attributes = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $pdo = new PDO($dsn, $login, $pwd, $attributes);
    $resultat = $pdo->query("SELECT c.id_commande, c.date_enregistrement, c.montant, c.etat, m.id_membre, m.pseudo, m.nom, m.prenom, m.adresse, m.code_postal, m.ville FROM commande c, membre m WHERE c.id_membre = m.id_membre");
    $commandes = $resultat->fetchAll();
    
    $listeCommande= array();
    foreach ($commandes as $commande) {
        $myCommand= new Commande($commande['id_commande'],$commande['pseudo'],$commande['montant'],$commande['date_enregistrement'],$commande['etat']);
        $myCommand->selectAllProduit();
        array_push($listeCommande,$myCommand);
    }
    return $listeCommande;
}

?>