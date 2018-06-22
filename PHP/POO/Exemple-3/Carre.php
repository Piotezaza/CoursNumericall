<?php 

require_once('Forme.php');

final class Carre extends Forme
{
    private $cote;

    public function __construct($posX, $posY, $cote)
    {
        $this->cote = $cote;
        parent::__construct($posX, $posY);
    }

    public function aire()
    {
        $this->cote * $this->cote; // pow($this->cote, 2)
    }
}