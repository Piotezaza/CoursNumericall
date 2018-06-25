<?php

class Vehicule 
{
    protected $nombreRoues;
    protected $estMotorise;
    protected $nombrePortes;
    protected $couleur;

    public function __construct(string $couleur)
    {
        $this->setCouleur($couleur);
        $this->dateCreation = new DateTime;
    }

    public function setCouleur(string $couleur)
    {
        if(strlen($couleur) == 7)
        {
            $this->couleur = $couleur;
        }
        else
        {
            trigger_error("La couleur n'est pas valide");
        }
    }

    public function getCouleur()
    {
        return $this->couleur;
    }

    public function toString()
    {
        return "Vehicule couleur " . $this->getCouleur();
    }
}