# Micro cours

## Liens de cours

- [OPENCLASSROOMS - Programmez en orienté objet en PHP](https://openclassrooms.com/courses/programmez-en-oriente-objet-en-php/introduction-a-la-poo)
- [GRAFIKART - La POO en PHP](https://www.grafikart.fr/formations/programmation-objet-php)
- [PHP.NET - Les classes et les objets](http://php.net/manual/fr/language.oop5.php)
- [PHP.NET - NAMESPACE](http://php.net/manual/fr/language.namespaces.rationale.php)

## Résumé des explications du prof 

Une **classe** c'est un **modèle de donnée** avec **attributs** & des **méthodes** qui va définir le comportement d'un objet.

Un **objet** est une **instance de classe**, c'est donc une variable que l'on peut utiliser comme le modèle le définit.

Une **classe** est un **moule** et un **objet** est un **gateau** (le moule indique qu'il faut des ingrédients, l'objet indique lesquels)

La pseudo variable `$this` peut se traduite par **"TON"** ou **"TA"** (utilise **TON** premier ingrédient avec **TON** deuxième et appelle **TA** méthode "mélanger")

`self::` fait référence à la **classe** contrairement à `$this` qui fait référence à **l'instance**

---

"encapsulation" définir si les propriétés sont publiques, privées, protected...

Le constructeur `__construct` est une méthode magique (appelée automatiquement par PHP)

Les constantes `const` sont des valeurs qui ne peuvent pas varier.

Une classe abstraite est une classe qui va contenir au moins une fonction abstraite. Elle ne peut pas être instanciée, elle est obligatoirement héritée.


**Opérateur ternaire**

```
$value == "val" ? "OUI" : "NON"
if($value == "val"){$result = "OUI";} else {$result = "NON";}
```

## Petites explications maison

> J'suis pas douée mais le peu que je sais je veux bien tenter d'expliquer.

Une **classe** c'est ce qui va contenir l'objet (un peu comme un moule) et l'**objet** c'est ce qui définit ton moule (s'il est carré, rond, etc.).

Elle va contenir par pas mal de choses :

### Des **attributs**

Les attributs ont des status de visibilité différents. Ils indiquent à partir d'où on peut y avoir accès. [Explication Openclassrooms](https://openclassrooms.com/courses/programmez-en-oriente-objet-en-php/introduction-a-la-poo#/id/r-1669226)

- `protected` : 
- `private` : impose quelques restrictions. On n'aura accès aux attributs et méthodes seulement depuis l'intérieur de la classe, c'est-à-dire que seul le code voulant accéder à un attribut privé ou une méthode privée écrit(e) à l'intérieur de la classe fonctionnera
- `public` : on peut y avoir accès depuis n'importe où, depuis l'intérieur de l'objet (dans les méthodes qu'on a créées), comme depuis l'extérieur

### Des **méthodes**

- `protected` : 
- `private` : 
- `public` : 
- `static` : toutes les variables appelées dans la fonction ne peuvent être modifiées 


- `` : 


Micro explications :

```
<?php
class Personnage // Présence du mot-clé class suivi du nom de la classe.
{
  // Déclaration des attributs et méthodes ici.
}
```

