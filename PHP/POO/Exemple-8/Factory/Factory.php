<?php

namespace Factory;

class Factory
{
    public static function create($name)
    {
        $className = "Form\\" . ucfirst($name) . "Item";
    }
}