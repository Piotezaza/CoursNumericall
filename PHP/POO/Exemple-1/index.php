<?php

class Article
{
    private $titre = "Mon article";

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        
        $this->titre = $titre;
    }
}

$monArticle = new Article;
$article2 = new Article;

echo $monArticle->getTitre();
$monArticle->setTitre("Nouvel Article");
echo '</br>';
echo $monArticle->getTitre();