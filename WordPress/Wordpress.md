# Wordpress

## Installer Wordpress en localhost :

- Télécharger les [fichiers de Wordpress](https://wordpress.org/download)
- Les placer dans un dossier du serveur (htdocs sur Xamp ou www sur Wamp)
- Créer une base de donnée avec un utilisateur qui n'a accès qu'à cette base de donnée
    - PHPMYADMIN 
        - Selectionner la base de donnée fraîchement créée (encodage : `utf8_general_ci`)
        - Dans l'onglet "privilèges"
        - Ajouter un compte d'utilisateur
            - Nom d'utilisateur `wordpress1`
            - Nom d'hôte local / `localhost`
            - Mot de passe `wp1`
            - C'EST TOUT !
                
- Se rendre en http sur l'URL du dossier et éxecuter l'assistant d'installation
    - Choisir la langue
    - Rentrer toutes les infos
    - Adresse de la BDD : Localhost
    - Préfixe des tables : changer
    - Informations nécessaires
        - Site en construction : demander aux moteurs de recherche de ne pas indexer ce site

-------

## Réglages de base 

Se rendre dans `Réglages` et régler TOUTES les informations afin de les adapter à nos besoins.
- Dans `Option de lecture` : Choisir le type d'affichage de la page d'accueil (page statique / derniers articles)

Créer l'architecture du site en créant de nouvelles pages.
Aller dans `Apparence` → `Menus` et créer vos menus

-------

## Thème enfant Wordpress

Avantages :
- Continuer à profiter des mises à jour
- Accélère le temps de développement
- Bonne façon de commencer pour apprendre

Les fichiers du thème enfant:
- wp-config.php
- wp-content/
    - languages/
    - plugins/
    - themes/
        - thèmes par défaut
        - thème utilisé/
        - THÈME ENFANT
        - index.php
    - upgrade/
    - uploads/
    - index.php

Pour créer un thème enfant :

- Reprendre le **MÊME NOM DE DOSSIER** que le thème de base suivi de `-child` à la fin (*ex: twentyfifteen-child*).
- Copier-coller le fichier `style.css` du dossier d'origine dans le dossier enfant.
- Garder uniquement le 1er commentaire.
- À la fin du `Theme Name`, rajouter le terme `child`.
- En dessous de cette ligne, écrire `Template: <nom du thème parent>`. **ATTENTION AUX ESPACES**
- Aller dans `Apparence` et sélectionner le thème enfant.

```
/*
Theme Name: Twenty Fifteen child
Tempalte: twentyfifteen
// d'autres mensions facultatives renseignant sur l'auteur, l'url de téléchargement...
*/
```

- Importer la feuille de style du thème parent. Ici : `@import url('../twentyfifteen/style.css')` 