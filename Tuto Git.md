#  **EN TRAVAUX**
--- 

## Tuto GIT

Tu veux utiliser Git mais tu comprends rien ? Ce tuto est pour toi !

> Attention, les astuces que je vais te donner sont approximatives, ça fonctionnera mais ça ne sera pas du tout optimal, j'ai pas encore mon BAC+8 en Git ಠ_ಠ

### Créer un projet GIT

Tu veux uploader ton projet (déjà créé ou non) sur un repository github mais t'es COM-PLÈ-TE-MENT largué(e) ? Voici la démarche à faire :

- Sur GitHub, [créé un nouveau repository](https://github.com/new)
- Choisis un nom, entre une description et coche `initialize this repository with a README`
- Une fois créé, quand tu es sur ton projet, cliques sur le bouton vert `Clone or download` et copie le lien.
- Maintenant, sur ton PC, vas dans le dossier où TOUT ton projet va se trouver.
- Installes [Git](https://git-scm.com/downloads)
- Lorsque tu fais un clic droit, tu devrais voir apparaître `Git Bash Here`
- Cliques dessus, un terminal va s'ouvrir
- Tu vas devoir entrer une série de commandes pour initialiser Git dans ton dossier

Prêt à écrire toutes les commandes ? Go !

- `git init` : un dossier `.git` va apparaître dans ton dossier
- `git clone <lien que tu as copié avant>` : un dossier avec le nom de ton projet va appraître
- Supprime le fichier `.git`
- Dans le dossier ajouté automatiquement, coupe tout et colle-le dans le dossier que TU as créé.
- Supprime le dossier vide

**LE TOUR EST JOUÉ !**

### Dans Visual Studio Code

Maintenant, en bas à gauche de ta fenêtre, tu vas voir apparaître `master` avec la représentation d'une branche Git. Si tu as ça, TOUT EST NORMAL, c'est que tout est bien installé. Je vais te lister les commandes dont tu vas avoir besoin pour gérer ton projet. Tu devras les effectuer dans cet ordre, sinon ça ne fonctionnera pas.

Si tu veux tout mettre sur ta branche principale (le tron de ton arbre = branche *master*)

 - Pour initialiser les dossiers de ton projet sur ton git local.
    - `git add *` : initialise TOUS les dossiers
    - `git add <nom du dossier>` : initialise un dossier en particulier