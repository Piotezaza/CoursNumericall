<?php 

require_once('Produit.php');

final class Livre extends Produit
{
    private $isbn;

    public function __construct($prix, $poids, $sibn)
    {
        $this->setIsbn($isbn);
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;

        return $this;
    }
}