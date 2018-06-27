<?php

// Autoload
spl_autoload_register(function($className)
{
    if(file_exists($className . '.php'))
    {
        require_once($className . '.php');
    }
});


// Singleton

// Me permet de ne pas mettre \Singleton\ devant ma classe en dessous. Peut être utile lors de l'appel de beaucoup de classes.
use Singleton\Singleton; 

$singleton = /*\Singleton\*/Singleton::getInstance("NOM");
$singleton2 = /*\Singleton\*/Singleton::getInstance("NOM");
