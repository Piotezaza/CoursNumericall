<?php

class Article
{
    // Appelée lors de l'instanciation
    public function __construct()
    {
        echo "Objet article créé </br>";
    }

    // Appelée lors de la destruction (fin du script)
    public function __destruct()
    {
        echo "Objet article détruit </br>";
    }

    // Appelée lors d'un appel d'une méthode inaccessible 
    public function __call($name, $attr)
    {
        echo "Méthode " . $name . ""
    }
}