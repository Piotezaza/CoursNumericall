# Consignes

Création d'une application de gestion d'énergie d'une maison

1. Modélisation de la maison


Une **maison** contient des **pièces**

Créer une classe **maison** avec les attributs **privés** suivants
- Matériaux pour la structure : `materiauxStructure` | Type STRING
- Matériaux pour la toiture : `materiauxToiture` | Type STRING

La classe `Maison` contient un ou plusieurs objets `Piece`

Créer une classe `Piece` avec les attributs privés suivants :
- `surface` | > 0
- `hauteur` | > 0
- `nbFenetres` | >= 0

Créer les setter & getter 

Créer un objet `Maison` qui va contenir plusieurs objets `Piece` (dans `index.php`)

Créer un autoload

---

**Info** : une classe par fichier avec le même nom.