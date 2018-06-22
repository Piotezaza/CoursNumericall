<?php 

class Article
{
    // Propriétés :
    private $titre = "Titre par défaut - NON dynamique"; 
    // si on ne set pas $titre a posteriori, $titre aura comme valeur cette string
    // il n'est pas obligatoire de définir cette propriété, on peut se contenter de la déclarer, 
    // auquel cas si on crée par la suite une instance sans donner de valeur à $titre, 
    // $titre sera vide

    private $contenu;
    private $statut;

    public static $counter = 0;

    // Contantes :
    const S_PUBLIC = 1;
    const S_PRIVATE = 0;

    // Contructeur :
    public function __construct($titre, $contenu)
    {
        $this->setTitre($titre);
        $this->statut = self::S_PUBLIC;
        self::$counter++;

        $this->setContenu($contenu);
    }

    // Méthodes :
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

    public function getCounter() 
    {
        return self::$counter;
    }

    // Getter / Setter obtenu avec clic droit sur $contenu :
    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getInfos()
    {
        return $this->getTitre() . ' ' . $this->getContenu();
    }
}



// echo Article::$counter . '< article(s) <br>';

// $monArticle = new Article("Article 1");
// echo Article::$counter . '< article(s) <br>';

// $article2 = new Article("Article 2");
// echo Article::$counter . '< article(s) <br>';

// echo Article::getCounter();

$article1 = new Article('Titre', 'Contenu');
echo $article1->getInfos();
echo '<br>';

$article1->setTitre('Nouveau titre');
$article1->setContenu('Nouveau contenu');
echo $article1->getInfos();

?>