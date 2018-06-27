<?php

require_once("produit.php");

class Commande{

    private $id;
    private $membre;
    private $montant;
    private $dateEnregistrement;
    private $etat;
    private $listeProduit;

    public function __construct($id, $membre,$montant,$dateEnregistrement,$etat){
        $this->id=$id;
        $this->membre=$membre;
        $this->montant=$montant;
        $this->dateEnregistrement=$dateEnregistrement;
        $this->etat=$etat;
        $listeProduit= [];
    }

    public function addProduit($produit){
        if($produit instanceof Produit && $produit!=null){
            $this->listeProduit[] = $produit;
        }
    }

    public function selectAllProduit(){
        $dsn = 'mysql:host=localhost; dbname=boutique';
    $login = 'root';
    $pwd = '';
    $attributes = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8',
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];

    $pdo = new PDO($dsn, $login, $pwd, $attributes);
        $details = $pdo->prepare("SELECT d.id_produit, p.reference, p.categorie, p.titre, p.description, p.couleur, p.taille, p.public, p.photo, p.prix, p.stock FROM details_commande d, produit p WHERE d.id_produit = p.id_produit AND d.id_commande = :id_commande");
        $details->bindValue(':id_commande', $this->id, PDO::PARAM_STR);
        $details->execute();
        
        $detailcommande = $details->fetchAll();
        foreach ($detailcommande as $produit) 
        {
            $this->addProduit(new Produit($produit['id_produit'],$produit['reference'],$produit['categorie'],$produit['titre'],$produit['description'],$produit['couleur'],$produit['taille'],$produit['public'],$produit['photo'], $produit['prix'], $produit['stock']));
        }
    }


    public function toHTMLTable(){
        $contenu = "";
        $contenu .= '<div class="border border-secondary p-2 mb-3">';
        $contenu .= '<h3>Infos commande</h3>';
        $contenu .= '<p>id commande : ' . $this->id . ' | date d\'enregistrement : ' . $this->dateEnregistrement . ' | Montant : ' . $this->montant . ' | État de la commande : ' . $this->etat . '</p>';
        $contenu .= '<a class="btn btn-info" href="'. URL . '/admin/etat_commande.php?id=' . $this->id .'" role="button">Modifier l\'état de la commande</a>';
        $contenu .= '<h3 class="mt-4">Infos produits</h3>';
        $contenu .= "<table class='table mt-4'>";
        $contenu .= "<thead><tr class='text-center'>";
        $contenu .= returnHTMLRowReducedTitle();
        $contenu .= "</tr></thead><tbody>";
        foreach ($this->listeProduit as $produit) {
            $contenu .="<tr>";
            $contenu .= $produit->returnHTMLRowReduced();
            $contenu .="</tr>";
        }
        $contenu .="</tbody></table></div>";
        return $contenu;
    }

}

?>