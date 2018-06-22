<?php

class Article
{
    public $titre;
}

$monArticle = new Article;
$monArticle->titre = "Mon super article";

echo $monArticle->titre;

$article2 = new Article;
$article2->titre = "Encore un !";

echo $article2->titre;