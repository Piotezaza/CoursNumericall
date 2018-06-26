<?php

require_once('Article.php');

$article = new Article;
$article->getDate();
Article::getCounter();
echo $article->name;
echo '</br>';
$article->name = "Nouveau nom";
echo $article->name;