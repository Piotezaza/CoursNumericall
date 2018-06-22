<?php

class Article
{
    // Propriétés
    private $titre;
    private $statut;
    const S_PUBLIC = 1;
    const S_PRIVATE = 0;

    // Constructeur
    public function __construct($titre)
    {
        $this->setTitre($titre);
        $this->statut = self::S_PUBLIC;
    }

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($nouveauTitre)
    {
        
        $this->titre = $nouveauTitre;
    }

    public function isPublic()
    {
        return $this->statut == self::S_PUBLIC;
    }
}


$monArticle = new Article("Article 1");
$article2 = new Article("Article 2");

echo $monArticle->isPublic();