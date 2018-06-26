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
// use Form\{
//     Form,
//     TextItem,
//     SelectItem  
//   };
use Form\Form;
use Form\TextItem;
use Form\SelectItem;
use Form\TextareaItem;


$user = new \Entity\User("Piote", "Azerty", "superemail@gmail.com", "IT");
// echo $user->getPassword();

$myform = new Form ("login", "POST", "", array("class" => "form", "id" => "login-form"));
$myform->setData($user);
$myform->addItem(new TextItem("username", "Nom d'utilisateur"));
$myform->addItem(new TextItem("email", "Adresse email"));
$myform->addItem(new TextItem("rien", "Rien"));
$myform->addItem(new SelectItem("sexe", "Sexe", array("Homme" => "h", "Femme" => "f", "Autre" => "a")));
$myform->addItem(new SelectItem("pays", "Pays", array("Pologne" => "PL", "France" => "FR", "Allemagne" => "DE", "Italie" => "IT")));
$myform->addItem(new TextareaItem("presentation", "Présentation"));
echo $myform->createView();

$newForm = $myform;
$newForm->setName("nouveau");
echo $newForm->getName();
echo '</br>';
echo $myform->getName();

require_once('Include/footer.php');