# SYMFONY

- [CONSULTER - Projet de base](https://github.com/Piotezaza/CoursNumericall/tree/master/PHP/SYMFONY/BASE)
- [TÉLÉCHARGER - Projet de base](https://github.com/Piotezaza/CoursNumericall/archive/master/PHP/SYMFONY/BASE.zip)
- [MEMO](https://github.com/Piotezaza/CoursNumericall/tree/master/PHP/SYMFONY#memo)

**ATTENTION, PAS MAL DE DOSSIERS SONT IGNORÉS PAR LE `.gitignore`.** Ils sont dispo **uniquement** dans le dossier de base que vous pouvez télécharger.

Si quelqu'un en a besoin quand même, demandez-moi ! ^^

---
## Commandes

Installer la toolbar Apache : `composer symfony/apache-pack`, à la fin, faire yes : `y`.

---
## MEMO

### Installation

Via composer (gestionnaire de bibliothèques externes)

```
composer create-project symfony/website-skeleton NomDuProje
```

### Dossiers

- **ASSETS** : fichiers JS/CSS
- **BIN** : fichiers binaire tel que la console
- **CONFIG** : fichiers de configuration des modules (version Symfony < 4 : un seul fichier `config.yml`)
- **PUBLIC** : contient `index.php` et les fichiers statiques créés par *WebPack*
- **SRC** :  tout le code source de l'application
- **TEMPLATES** : contient toutes les vues (fichiers **Twig**)
- **TESTS** : fichiers pour les tests unitaires 
- **TRANSLATIONS** : fichiers de traduction
- **** : 

---
## Liens utiles

- [OPENCLASSROOMS - Développez votre site web avec le framework Symfony](https://openclassrooms.com/courses/3619856-developpez-votre-site-web-avec-le-framework-symfony)