# Micro cours

## Liens de cours

- [OPENCLASSROOMS - Programmez en orienté objet en PHP](https://openclassrooms.com/courses/programmez-en-oriente-objet-en-php/introduction-a-la-poo)
- [La POO en PHP](https://www.grafikart.fr/formations/programmation-objet-php)

> Résumé des explications du prof 

Une **classe** c'est un **modèle de donnée** avec **attributs** & des **méthodes** qui va définir le comportement d'un objet.

Un **objet** est une **instance de classe**, c'est donc une variable que l'on peut utiliser comme le modèle le définit.

Une **classe** est un **moule** et un **objet** est un **gateau** (le moule indique qu'il faut des ingrédients, l'objet indique lesquels)

La pseudo variable `$this` peut se traduite par **"TON"** ou **"TA"** (utilise **TON** premier ingrédient avec **TON** deuxième et appelle **TA** méthode "mélanger")

---

"encapsulation" définir si les propriétés sont publiques, privées, protected...

- public : 
- private : 
- protected : 

Le constructeur `__construct` est une méthode magique (appelée automatiquement par PHP)

Les constantes `const` sont des valeurs qui ne peuvent pas varier.

Une classe abstraite est une classe qui va contenir au moins une fonction abstraite. Elle ne peut pas être instanciée, elle est obligatoirement héritée.


**Opérateur ternaire**

```
$value == "val" ? "OUI" : "NON"
if($value == "val"){$result = "OUI";} else {$result = "NON";}
```