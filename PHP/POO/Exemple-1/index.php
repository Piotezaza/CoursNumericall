<?php

class Article
{
    // Propriétés
    private $titre;
    private $statut;
    private static $counter = 0;
    const S_PUBLIC = 1;
    const S_PRIVATE = 0;

    // Constructeur
    public function __construct($titre)
    {
        $this->setTitre($titre);
        $this->statut = self::S_PUBLIC;
        self::$counter++;
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

    public static function getCounter()
    {
        return self::counter;
    }
}

echo Article::$counter . ' articles(s) </br>';
$monArticle = new Article("Article 1");
echo Article::$counter . ' articles(s) </br>';
$article2 = new Article("Article 2");
echo Article::$counter . ' articles(s) </br>';
echo Article::getCounter();