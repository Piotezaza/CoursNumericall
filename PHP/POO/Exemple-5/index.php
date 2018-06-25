<?php

require_once('Include/header.php');

// require_once('Form/Form.php');
// require_once('Form/TextItem.php');
// require_once('Form/SelectItem.php');
// require_once('Entity/User.php');

spl_autoload_register(function($className)
{
    // "Entity\User.php => "Entity\User
    if(file_exists(/*'Entity/' .*/ $className . '.php'))
    {
        require_once(/*'Entity/' .*/ $className . '.php');
    }
    // else if(file_exists('Form/' . $className . '.php'))
    // {
    //     require_once('Form/' . $className . '.php');
    // }

    // echo "Classe appelée :" . $className . "</br>";
});

use Entity\User;
use Form\Form;
use Form\TextItem;
use Form\SelectItem;

$fauxArticle = new \Entity\Produit\Produit();
$user = new \Entity\User("Piote", "Azerty", "superemail@gmail.com", "IT");
// echo $user->getPassword();

$myform = new \Form\Form ("login", "POST", "", array("class" => "form", "id" => "login-form"));
$myform->setData($user);
$myform->addItem(new \Form\TextItem("username", "Nom d'utilisateur"));
$myform->addItem(new \Form\TextItem("email", "Adresse email"));
$myform->addItem(new \Form\TextItem("rien", "Rien"));
$myform->addItem(new \Form\SelectItem("sexe", "Sexe", array("Homme" => "h", "Femme" => "f", "Autre" => "a")));
$myform->addItem(new \Form\SelectItem("pays", "Pays", array("Pologne" => "PL", "France" => "FR", "Allemagne" => "DE", "Italie" => "IT")));

echo $myform->createView();

require_once('Include/footer.php');