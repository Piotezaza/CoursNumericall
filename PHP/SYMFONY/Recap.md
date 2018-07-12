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

/*
* @ORM\Column(name="nom_du_champ", type="string", length=80, nullable=true)
*/
private $nomDuChamp;
```

### Relations

Les relations permettent de faire des clés étrangères dans la base de données.

**EXEMPLES :**

**Une** image pour **un** article :
```php
/*
* @ORM\OneToOne(targetEntity="App\entity\Image", cascade="all", orphanRemoval=true)
*/
private $image;
```
- `cascade` : Si l'article est supprimé, les images liées le seront également.
- `orphanRemoval` : Supprime les orphelins. (ex: pour article déjà enregistré avec un lien vers une image, si je supprime l'image (état passe à `null`) et que je sauvegarde mon article, ça supprime l'image.


**Plusieurs** articles pour **une** catégorie :
```php
/*
* @ORM\ManyToOne(targetEntity="Category", inversedBy="articles")
*/
private $category;
```
- `inversedBy` : L'attribut `inversedBy` désigne le champ dans l'entité qui est le côté inverse de la relation.


**Relation inverse** (obtenir les articles d'une catégorie) :
```php
/*
* @ORM\OneToMany(targetEntity="Article", mappedBy="category")
*/
private $articles; // Type ArrayCollecion
```
- `mappedBy` : Cette option spécifie le nom de propriété sur le targetEntity qui est du côté possédant cette relation. C'est un attribut requis pour le côté inverse d'une relation.


### Cycle de vie




---
## Controller