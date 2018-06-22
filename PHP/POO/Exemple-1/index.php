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
        echo $titre . '</br>';
        echo $this->titre;
    }
}

$monArticle = new Article;
$article2 = new Article;

echo $monArticle->setTitre("Nouvel Article");