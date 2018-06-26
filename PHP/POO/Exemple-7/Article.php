<?php

class Article
{
    public function getData()
    {
        return "DATA";
    }

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
        if(strlen($name) == strlen("getData"))
        {
            trigger_error("La méthode " . $name . " n'existe pas, voulez-vous dire getData ?");
        }
        echo "Méthode " . $name . " appelée </br>";
    }

    // Pour une méthode statique
    public static function __callStatic($name, $attr)
    {
        echo "Méthode statique " . $name . " appelée </br>";
    }

    // Appelée lors de la lecture d'une propriété inaccessible
    public function __get($name)
    {
        echo "Propriété " . $name . " est appelée </br>";

        $method = 'get' . ucfirst($name);

        if(method_exists($this, $method))
        {
            return $this->$method();
        }
    }
}