<?php

namespace Singleton;

class Singleton
{
    private function __construct($name)
    {
        echo "Création du Singleton " . $name . '</br>';
    }
}