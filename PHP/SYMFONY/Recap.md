# Récap

## SOMMAIRE

- [Installation]()
    - [Nouveau projet]()
    - [Projet existant sur Git]()
- [Dossiers]()
- [Entité]()
    - [Création]()
    - [Relations]()
    - [Cycle de vie]()
- [Controller]()

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
## Dossiers

- **ASSETS** : fichiers JS/CSS
- **BIN** : fichiers binaire tel que la console
- **CONFIG** : fichiers de configuration des modules (version Symfony < 4 : un seul fichier `config.yml`)
- **PUBLIC** : contient `index.php` et les fichiers statiques créés par *WebPack*
- **SRC** :  tout le code source de l'application
- **TEMPLATES** : contient toutes les vues (fichiers **Twig**)
- **TESTS** : fichiers pour les tests unitaires 
- **TRANSLATIONS** : fichiers de traduction (version Symfony < 4 : les vues sont dans le dossier `Ressource/Views` des Bundle)
- **VAR** : contient le cache et les fichiers log
- **VENDOR** : bibliothèques externes à notre application (comme Doctrine, Twig, SwiftMailer, etc)

---
## Entité

### Création



### Relations



### Cycle de vie




---
## Controller