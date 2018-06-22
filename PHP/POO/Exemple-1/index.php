<?php

class Article
{
    public $titre = "Mon article";

    public function getTitre()
    {
        return $this->titre;
    }

    public function setTitre($titre)
    {
        
    }
}

$monArticle = new Article;
$article2 = new Article;

echo $monArticle->getTitre();