<?php

namespace Maison;

class Maison
{
    private $materiauxStructure;
    private $materiauxToiture;
    public $pieces;

    // public function __construct($materiauxStructure, $materiauxToiture)
    // {
    //     $this -> materiauxStructure = $materiauxStructure;
    //     $this -> materiauxToiture = $materiauxToiture;
    // }

    // public function showMaison()
    // {
    //     echo "La maison a une structure en <strong>" . $this->materiauxStructure . "</strong> et une toiture en <strong>" . $this->materiauxToiture . "</strong>.</br>";
    // }

    public function getMateriauxStructure()
    {
        return $this->materiauxStructure;
    }

    public function setMateriauxStructure(string $materiauxStructure)
    {
        $this->materiauxStructure = $materiauxStructure;

        return $this;
    }

    public function getMateriauxToiture()
    {
        return $this->materiauxToiture;
    }
 
    public function setMateriauxToiture(string $materiauxToiture)
    {
        $this->materiauxToiture = $materiauxToiture;

        return $this;
    }

    public function getPieces()
    {
        return $this->pieces;
    }

    public function setPieces(array $pieces)
    {
        $this->pieces = $pieces;

        return $this;
    }
}