# RÉCAPITULATIF SYMFONY

## SOMMAIRE

- [Installation](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#installation)
    - [Nouveau projet](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#nouveau-projet)
    - [Projet existant sur Git](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#projet-existant-sur-git)
- [Projet](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#projet)
    - [Dossiers](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#dossiers)
- [Entité](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#entit%C3%A9)
    - [Création](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#cr%C3%A9ation)
    - [Relations](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#relations)
    - [Cycle de vie](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#cycle-de-vie)
- [Controller](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#controller)
    - [Routes](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#routes)
    - [Param Converter](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#param-converter)
    - [L'objet `Request`](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#lobjet-request)
    - [Les objets `Response`](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#les-objets-response)
- [Repository](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#repository)
    - [Écrire une requête](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#%C3%89crire-une-requ%C3%AAte)
    - [L'objet Paginator](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#lobjet-paginator)
    - [Appel dans un controller](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#appel-dans-un-controller)
    - [### Sauvegarder et supprimer les entités](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#sauvegarder-et-supprimer-les-entit%C3%A9s)
- [Formulaire](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#formulaire)
    - [FormBuilder](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#formbuilder)
    - [Types de champs](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#types-de-champs)
    - [Formulaires imbriqués](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#formulaires-imbriqu%C3%A9s)
    - [Les collections](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#les-collections)
    - [Création dans un controller](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#cr%C3%A9ation-dans-un-controller)
- [Les services](https://github.com/Piotezaza/CoursNumericall/blob/master/PHP/SYMFONY/Recap.md#les-services)

---
## Installation

### Nouveau projet

Via composer : 

```
composer create-project symfony/website-skeleton MonProjet
```

**Installer les bibliothèques :**

- PHP : `composer install`
- CSS & JavaScript : `npm install` 


### Projet existant sur Git

```
git clone http://github.com/projet`
```

**Mettre à jour les bibliothèques PHP, CSS & JavaScript :**

```
composer update
```

---
## Projet

### Dossiers

- **`ASSETS`** : contient tous les fichiers SCSS, JavaScript du projet
- **`BIN`** : contient la console (on intervient pas dessus)
- **`CONFIG`** : fichiers de configuration des modules (version Symfony < 4 : un seul fichier `config.yml`)
    - **`PACKAGES`** : contient les configs des bibliothèques externes
- **`NODE_MODULES`** : toutes les bibliothèques CSS/JavaScript
- **`PUBLIC`** : contient le fichier `index.php` (dossier `web` pour Symfony < 4) et les fichiers statiques créés par *[WebPack]()*
- **`SRC`** :  contient tous les fichiers source PHP de l'application
- **`TEMPLATES`** : contient toutes les vues (fichiers **Twig** `fichier.html.twig`)
- **`TESTS`** : contient les fichiers de tests PHPUnit pour faire des tests unitaires
- **`TRANSLATIONS`** : fichiers de traduction (version Symfony < 4 : les vues sont dans le dossier `Ressource/Views` des Bundle)
- **`VAR`** : contient le cache et les fichiers log
- **`VENDOR`** : bibliothèques PHP externes à notre application (comme Doctrine, Twig, SwiftMailer, etc)

### WebPack Encore

[Site WebPack](https://webpack.js.org/) contenant toute la doc officielle.

**Encore** est un module de Symfony pour faciliter l'intégration de **WebPack** dans un projet.

**WebPack** est une bibliothèque qui va interpréter et minifier automatiquement les fichiers **SCSS** et **JavaScript**. Il assemble les fichiers `assets` en un seul.

**Commande pour créer les fichiers publiques :**
```
npm run dev

npm run build
```

- `dev` ne minifie pas les fichiers, permet de retrouver les erreurs
- `build` minifie les fichiers (pour la prod)

---
## Entité

Les entités `Entity` sont des objets déstinés à être stockés dans la base de donnée. Ces fichiers sont dans `src/Entity`.

Une table = une entité.

### Création

**Créer une entité :**

```
php bin/console make:entity
```

La base de données est définie via les annotations (instructions dans les commentaires).

**Mettre à jour la base de données :**

```
php bin/console doctrine:schema:update --force
```

**Pour définir une colonne :**
```php
use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Column(name="nom_du_champ", type="string", length=80, nullable=true)
*/
private $nomDuChamp;
```

### Relations

Les relations permettent de faire des clés étrangères dans la base de données.

**EXEMPLES :**

1. **Une** image pour **un** article :
```php
/**
* @ORM\OneToOne(targetEntity="App\entity\Image", cascade="all", orphanRemoval=true)
*/
private $image;
```

2. **Plusieurs** articles pour **une** catégorie :
```php
/**
* @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
*/
private $category;
```

3. **Relation inverse** (obtenir les articles d'une catégorie) :
```php
/**
* @ORM\OneToMany(targetEntity="Article", mappedBy="category")
*/
private $articles; // Type ArrayCollecion
```

4. **Plusieurs** articles pour **plusieurs** utilisateurs (auteurs) :
```php
/**
* @ORM\ManyToMany(targetEntity="User", inversedBy="articles")
*/
private $users;
```

5. **Relation inverse** (tous les articles d'un utilisateur):
```php
/**
* @ORM\ManyToMany(targetEntity="Article", mappedBy="users")
*/
private $articles;
```

6. **Plusieurs** produits dans **plusieurs** paniers avec des **paramètres** :
```php
/*  -------------
    Entity Panier
    -------------
*/ 

/**
* @ORM\OneToMany(targetEntity="PanierProduit", mappedBy="panier")
*/
private $panierProduits;



/*  --------------------
    Entity PanierProduit
    --------------------
*/ 

/**
* @ORM\ManyToOne(targetEntity="Panier", inversedBy="panierProduits")
*/
private $panier;

/**
* @ORM\ManyToOne(targetEntity="Produit", inversedBy="panierProduits")
*/
private $produit;



/*  --------------
    Entity Produit
    --------------
*/ 

/**
* @ORM\OneToMany(targetEntity="PanierProduit", mappedBy="panier")
*/
private $panierProduit;
```

7. **Comportement** de l'article lors de la **suppression** d'une catégorie :

Met l'attribut `category` à `null` si la catégorie est supprimée.
```php
//Entity Article

/**
* @ORM\ManyToOne(targetEntity="Category")
* @ORM\JoinColumn(onDelete="SET NULL")
*/
private $category;
```


**Attributs**

- `cascade` : Si l'article est supprimé, les images liées le seront également.
- `orphanRemoval` : Supprime les orphelins. (ex: pour article déjà enregistré avec un lien vers une image, si je supprime l'image (état passe à `null`) et que je sauvegarde mon article, ça supprime l'image.
- `inversedBy` : L'attribut `inversedBy` désigne le champ dans l'entité qui est le côté inverse de la relation.
- `mappedBy` : Cette option spécifie le nom de propriété sur le targetEntity qui est du côté possédant cette relation. C'est un attribut requis pour le côté inverse d'une relation.

### Cycle de vie

Permet à **Doctrine** d'appeler automatiquement des méthodes de l'entité lors d'une action (ex: `persist` ou `remove`).

**Avant la déclaration de la classe :**
```php
/**
* @ORM\HasLifecycleCallbacks
*/
```

**Juste avant la méthode à appeler :**

```php
/**
* @ORM\PrePersist()
* @ORM\PreUpdate()
* @ORM\PreRemove()
* @ORM\PostPersist()
* @ORM\PostUpdate()
* @ORM\PostRemove()
*/
public function prePersist() { /*...*/ }
```



---
## Controller

Les `controllers` sont les classes qui vont être utilisées lors de l'appel d'une route, ils sont stockés dans le dossier `src/Controller`.

### Routes

1. Pour **définir** un **préfixe** pour toutes les routes d'un `controller`, mettre avant la déclaration de la `class`:
```php
use Symfony\Component\Routing\Annotation\Route;

/**
 * @Route("/prefixe/article/")
 */
class ArticleController extends Controller {}
```

2. **Avant** la déclaration d'une **méthode** :
```php
/**
 * @Route("/new")
 */
public function new() {}
```


3. Pour **définir** les **paramètres** :
```php
/**
 * @Route("/edit/{id}", name="article_edit", requirements={"id" = "\d+"})
 */
public function edit($id) {}
```

- `requirements`: obligatoire
- `d` : chiffre
- `+` : 1 ou plusieurs

4. **Valeur par défaut** :
```php
/**
 * @Route("/list/{page}", requirements={"page" = "\d+"}, defaults={"page" = 1})
 */
public function list($page) {}
```

**Commande pour afficher les routes de l'application**
```
php bin/console debug:router
```

### Param Converter

Il permet de nous envoyer les types demandés dans une méthode d'un controller.

```php
/**
 * @Route("/edit/{id}", requirements={"id" = "\d+"})
 */
public function edit(Article $article) {}
```

Le param converter retourne automatiquement un objet Article en fonction de son id.

```php
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Entity;

/**
 * @Route("/show/{id}/{comment_id}", requirements={"id" = "\d+", "comment_id" = "\d+"})
 * @Entity("comment", expr="repository.find(comment_id)")
 */
public function show(Article $article, Comment $comment) {}
```


### L'objet `Request`

L'objet `Request` permet d'obtenir des informations sur la requête client (POST/GET etc.)

```php
use Symfony\Component\HttpFoundation\Request;

public function new(Request $request) { /*...*/ }
```

1. **Hydrater** un **formulaire** à partir des données `$_POST` :
```php
$form -> handleRequest($request);
```

2. **Récupérer** des **valeurs** de la requête :
```php
$post = $request -> request -> get('nom', 'valeur par défaut'); // $_POST['nom']
$get = $request -> query -> get('nom'); // $_GET['nom']
```

3. **Tester** si la requête est en **AJAX** :
```php
if( $request -> isHmlHttpRequest() ) { /*...*/ }
```

### Les objets `Response`

Une action d'un `Controller` doit toujours retourner un objet de type `Response`.

1. **Retourner** une **réponse** qui **contient une vue Twig** :
```php
return $this -> render('chemin/de/la/vue.html.twig', array(
    'param1' => $param1,
    'param2' => $param2
));
```

2. **Retourner** une **redirection** :
```php
return $this -> redirectToRoute('nom_de_la_route');
return $this -> redirect('lien');
```

3. **Retourner** une réponse **JSON** :
```php
use Symfony\Component\HttpFoundation\JsonResponse;

return new JsonResponse(array(
    'donnee1' => $donnee1,
    'donnee2' => $donnee2
));
```

---
## Repository

Le repository contient les requêtes d'une entité (une entite = un repository)

### Écrire une requête

```php
// Article Repository

public function findByName($name)
{
    $queryBuilder = $this -> createQueryBuilder('a') // Alias de l'objet
        -> where ('a.name = :name')
        -> setParameter('name', $name)
    ;

    return $queryBuilder -> getQuery() -> getResult();
}
```

**Quelues méthodes du query builder :**

```php
-> where('e.value = :value')
-> andWhere('...')
-> orWhere('...')
-> orderBy('e.id', 'ASC|DESC')
-> setMaxResults(10) // LIMIT
-> setFirstResult(0) // OFFSET
-> leftJoin('e.objet', 'o')
-> distinct()
-> groupBy('e.val')

// Resultat
-> getResult()
-> getOneResult();
-> getOneOrNullResult();
-> getScalarResult(); // -> select('COUNT(e)')
```

### L'objet Paginator

Objet pour gérer une pagination, retourne les entités d'une page et le nombre total d'entités.

```php
use Doctrine\ORM\Tools\Pagination\Paginator;

return new Paginator($queryBuilder);
```

### Appel dans un controller

Il faut déjà récupérer l'entity manager puis appeler le repository de l'entité.

```php
$entityManager = $this -> getDoctrine() -> getManager();

$articleRepository = $entityManager -> getRepository(Article::class);
$articles = $articleRepository -> findByName('nom');
```

### Sauvegarder et supprimer les entités

```php
$entityManager -> persist($article) // Persist d'une entité
// Persist = prépare une requête
$entityManager -> remove($article); // Supprime
$entityManager -> flush(); // Execute les requêtes
```
---
## Formulaire

Les formulaires d'entité sont dans des classes à part dans le dossier `src/Form`, elles sont nommées avec le suffixe `Type` (`ArticleType`).

**Pour créer un formulaire :**
```
php bin/console make:form
```

### FormBuilder

Dans une classe de formulaire une méthode `buildForm` doit être implémentée. 

```php
public function buildForm(FormBuilderInterface $builder, array $options) { /*...*/ }
```

### Types de champs
### Formulaires imbriqués
### Les collections
### Création dans un controller

---
## Les services