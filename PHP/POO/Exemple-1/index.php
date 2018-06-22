<?php

class Article
{
    private $titre = "Mon article";

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($nouveauTitre)
    {
        
        $this->titre = $nouveauTitre;
    }
}

$monArticle = new Article;
$article2 = new Article;

echo $monArticle->getTitre();
$monArticle->setTitre("Nouvel Article");
echo '</br>';
echo $monArticle->getTitre();