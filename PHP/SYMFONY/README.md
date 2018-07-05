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
- Lorsque l'on fait des modifications dans le dossier `assets`, pour que les changements prennent effet il faut rentrer cette commande dans le terminal : `npm run dev` 
- Installer fontawesome :
    - dans le terminal : `npm i @fortawesome/fontawesome-free-webfonts --save-dev`
    - dans `assets` trouver le fichier CSS ou SCSS et coller ces deux lignes dispo aussi [ici](https://www.npmjs.com/package/@fortawesome/fontawesome-free-webfonts) puis faire `npm run dev`
```
@import "~@fortawesome/fontawesome-free-webfonts/scss/fa-solid.scss";
@import "~@fortawesome/fontawesome-free-webfonts/scss/fontawesome.scss";
```
- Mettre à jour les bibliothèques (Fontawesome par exemple) : `npm update` 
- Lancer le serveur proposé par Symfony `php bin/console server:run`. Avantage : les liens ressemblent à ceux de la prod
- Nettoyer le cache : `php bin/console cache:clear`
- Statut des traductions `php bin/console debug:translation fr`
- Si erreur ci-dessous : dans `webpack.config.js`, ajouter cette partie en dessous de `Encore` : `.configureRuntimeEnvironment('dev')`

```
Error: Encore.setOutputPath() cannot be called yet because the runtime environment doesn't appear to be configured. Make sure you're using the encore executable or call Encore.configureRuntimeEnvironment() first if you're purposely not calling Encore directly.
```

BUNDLE SYMFONY
- `composer require knplabs/knp-menu-bundle` aide à faire des menus

---
## MEMO

### Installationgit add *
git commit -m "Update"
git push origin master


Via composer (gestionnaire de bibliothèques externes). `symfony/website-skeleton` peut être remplacé par un lien de dépot git.

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

### Webpack

Webpack permet de condenser tous les fichiers assets dans un seul. Par exemple, tous les fichiers JavaScript sont minifiés et placés dans un seul fichier.

Pour installer les modules

```
npm install --save-dev
```

#### Annotation

Les annotations sont des instructions définies dans un commentaire doc. Elles permettent de définir des paramètres rapidement sans aller dans les fichiers config. Par exemple pour définir les routes dans un controller :

```
/**
* @Route("/chemin/de/la/route")
*/
```

Avec paramètres :
```
/**
* @Route("/edit/{id}", requirements={"id":"\d+"})
*/
```

---
## Liens utiles

- [OPENCLASSROOMS - Développez votre site web avec le framework Symfony](https://openclassrooms.com/courses/3619856-developpez-votre-site-web-avec-le-framework-symfony)
- [SYMFONY - Querying for Objects: The Repository](http://symfony.com/doc/current/doctrine.html#querying-for-objects-the-repository)