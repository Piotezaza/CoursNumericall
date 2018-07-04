# SYMFONY

- [MEMO](https://github.com/Piotezaza/CoursNumericall/tree/master/PHP/SYMFONY#memo)
- [Liens utiles](https://github.com/Piotezaza/CoursNumericall/tree/master/PHP/SYMFONY#liens-utiles)

---
## Commandes

- Installer la toolbar Apache : `composer require symfony/apache-pack`, à la fin, faire yes : `y`.
- Afficher la liste des routes : `php bin/console debug:router` 
- Créer une base de données :
    - Dans le fichier `.env`, modifier la ligne **23** (dans l'exemple1 : `DATABASE_URL=mysql://root@127.0.0.1:3306/Sf_exo`) 
    - Dans le terminal : `php bin/console doctrine:database:create`

---
## MEMO

### Installation

Via composer (gestionnaire de bibliothèques externes)

```
composer create-project symfony/website-skeleton NomDuProjet
```

### Dossiers

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
## Liens utiles

- [OPENCLASSROOMS - Développez votre site web avec le framework Symfony](https://openclassrooms.com/courses/3619856-developpez-votre-site-web-avec-le-framework-symfony)