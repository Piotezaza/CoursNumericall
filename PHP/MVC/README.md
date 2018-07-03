# L'architecture MVC

MVC signifie **Modèle Vue Contrôleur**, c'est un motif d'architecture logicielle destiné aux interfaces graphiques et une manière d'organiser un programme en séparant les couches présentation, traitement et accès aux données.

- **Modèle** : s'occupe des accès à la base de données
- **Vue** : contient les fichiers qui affichent le code HTML
- **Contrôleur** : traitement des requêtes clients

## Le système de routing

Lors du développement d'un site web en PHP, le fichier `index.php` définit la page à afficher en fonction des valeurs get.

Pour le lien `monsite.com/index.php?page=editarticle&id=23` on utilise généralement un **switch** sur la valeur page pour afficher l'édition d'un article.

Le principe des **routes** permet d'avoir des liens plus jolis mais surtout plus explicites et adaptés pour le *SEO*.

Ainsi la route pour le lien orécédent devient `monsite.com/article/edit/23`.

Les routes affichent une arborescence qui n'existe pas physiquement sur le serveur, le **contrôleur frontal** interprète ces routes.