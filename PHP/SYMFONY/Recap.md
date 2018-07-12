# Récap

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

Via composer : `composer create-project symfony/website-skeleton MonProjet`

**Installer les bibliothèques :**

- PHP : `composer install`
- CSS & JavaScript : `npm install` 


### Projet existant sur Git

`git clone http://github.com/projet` 

**Mettre à jour les bibliothèques PHP, CSS & JavaScript :**

`composer update`

---
## Projet

### Dossiers

- **`ASSETS`** : contient tous les fichiers SCSS, JavaScript du projet
- **`BIN`** : contient la console (on intervient pas dessus)
- **`CONFIG`** : fichiers de configuration des modules (version Symfony < 4 : un seul fichier `config.yml`)
    - **`PACKAGES`** : contient les configs des bibliothèques externes
- **`NODE_MODULES`** : toutes les bibliothèques CSS/JavaScript
- **`PUBLIC`** : contient le fichier `index.php` (dossier `web` pour Symfony < 4) et les fichiers statiques créés par *WebPack*
- **`SRC`** :  contient tous les fichiers source PHP de l'application
- **`TEMPLATES`** : contient toutes les vues (fichiers **Twig**)
- **`TESTS`** : fichiers pour les tests unitaires 
- **`TRANSLATIONS`** : fichiers de traduction (version Symfony < 4 : les vues sont dans le dossier `Ressource/Views` des Bundle)
- **`VAR`** : contient le cache et les fichiers log
- **`VENDOR`** : bibliothèques externes à notre application (comme Doctrine, Twig, SwiftMailer, etc)

---
## Entité

### Création



### Relations



### Cycle de vie




---
## Controller