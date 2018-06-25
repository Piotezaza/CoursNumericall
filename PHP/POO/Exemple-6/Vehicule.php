<?php

class Vehicule 
{
    protected $nombreRoues;
    protected $estMotorise;
    protected $nombrePortes;
    protected $couleur;
    protected $dateCreation;
    protected $type;
    const STATUT_ENPANNE = 'en panne';
    const STATUT_REPARE = 'réparé';

    public function __construct(string $couleur)
    {
        $this->setCouleur($couleur);
        $this->dateCreation = new DateTime;
        $this->type ="Vehicule";
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

    public function getNombrePortes()
    {
        return $this->nombrePortes;
    }

    public function setNombrePortes($nombrePortes)
    {
        $this->nombrePortes = $nombrePortes;

        return $this;
    }
}