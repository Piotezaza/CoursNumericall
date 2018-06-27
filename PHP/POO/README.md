# PHP Orienté Objet

## Sommaire

- [Liens de cours](https://github.com/Piotezaza/CoursNumericall/tree/master/PHP/POO#liens-de-cours)
- [Résumé des explications du prof](https://github.com/Piotezaza/CoursNumericall/tree/master/PHP/POO#r%C3%A9sum%C3%A9-des-explications-du-prof)
- [Petites explications maison](https://github.com/Piotezaza/CoursNumericall/tree/master/PHP/POO#petites-explications-maison)
- [Mémo](https://github.com/Piotezaza/CoursNumericall/tree/master/PHP/POO#m%C3%A9mo)

---
## Liens de cours

- [OPENCLASSROOMS - Programmez en orienté objet en PHP](https://openclassrooms.com/courses/programmez-en-oriente-objet-en-php/introduction-a-la-poo)
- [GRAFIKART - La POO en PHP](https://www.grafikart.fr/formations/programmation-objet-php)
- [PHP.NET - Les classes et les objets](http://php.net/manual/fr/language.oop5.php)
- [PHP.NET - NAMESPACE](http://php.net/manual/fr/language.namespaces.rationale.php)
- [EXPLICATION : DESIGN PATTERN / SINGLETON](https://apprendre-php.com/tutoriels/tutoriel-45-singleton-instance-unique-d-une-classe.html)

---
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

---
## Petites explications maison

> J'suis pas douée mais le peu que je sais je veux bien tenter d'expliquer.

Une **classe** c'est ce qui va contenir l'objet (un peu comme un moule) et l'**objet** c'est ce qui définit ton moule (s'il est carré, rond, etc.).

Elle va contenir par pas mal de choses comme des **attributs** ou encore des **méthodes**.

### Les **attributs**

[Explication Openclassrooms](https://openclassrooms.com/courses/programmez-en-oriente-objet-en-php/introduction-a-la-poo#/id/r-1669226).

Les attributs ont des status de visibilité différents. Ils indiquent à partir d'où on peut y avoir accès. La déclaration d'attributs dans une classe se fait en écrivant le nom de l'attribut à créer, précédé de sa visibilité. On peut initialiser les attributs lorsqu'on les déclare (par exemple, leur mettre une valeur de 0 ou autre)

**ATTENTION**

La valeur que vous leur donnez par défaut doit être une expression scalaire statique. Par conséquent, leur valeur ne peut par exemple pas être issue d'un appel à une fonction `private $_attribut = strlen('azerty')` ou d'une variable, superglobale ou non `private $_attribut = $_SERVER['REQUEST_URI']`. Si votre version de PHP est antérieure à la 5.6, vous ne pouvez spécifier que des valeurs statiques, ce qui rend impossible l'assignation du résultat d'une opération. Par exemple, vous ne pouvez pas faire de `private $_attribut = 1 + 1` ou bien `private $_attribut = 'Hello ' . 'world !'` .

#### L'attribut `public`

On peut y avoir accès depuis n'importe où, depuis l'intérieur de l'objet (dans les méthodes qu'on a créées), comme depuis l'extérieur

#### L'attribut `private` : 

Impose quelques restrictions : on n'aura accès aux attributs et méthodes seulement depuis l'intérieur de la classe, c'est-à-dire que seul le code voulant accéder à un attribut privé ou une méthode privée écrit(e) à l'intérieur de la classe fonctionnera. Pour s'y retrouver correctement dans le code, il est préférable d'utiliser la notation `PEAR` qui dit que chaque nom d'élément privé (ici il s'agit d'attributs, il peut aussi s'agir de méthodes) doit être précédé d'un underscore. Exemple : `$_attribut`.

#### L'attribut `protected` :

Ce type de visibilité est, au niveau restrictif, à placer entre `public` et private. Le type de visibilité `protected` est en fait une petite modification du type `private` : il a exactement les mêmes effets que `private`, à l'exception que toute classe fille aura accès aux éléments protégés.

EXEMPLE :

```
<?php
class ClasseMere
{
  protected $attributProtege;
  private $_attributPrive;
  
  public function __construct()
  {
    $this->attributProtege = 'Hello world !';
    $this->_attributPrive = 'Bonjour tout le monde !';
  }
}

class ClasseFille extends ClasseMere
{
  public function afficherAttributs()
  {
    echo $this->attributProtege; // L'attribut est protégé, on a donc accès à celui-ci.
    echo $this->_attributPrive; // L'attribut est privé, on n'a pas accès celui-ci, donc rien ne s'affichera (mis à part une notice si vous les avez activées).
  }
}

$obj = new ClasseFille;

echo $obj->attributProtege; // Erreur fatale.
echo $obj->_attributPrive; // Rien ne s'affiche (ou une notice si vous les avez activées).

$obj->afficherAttributs(); // Affiche « Hello world ! » suivi de rien du tout ou d'une notice si vous les avez activées.
```

### Les **méthodes**

Pour la déclaration de méthodes, il suffit de faire précéder le mot-clé `function` à la visibilité de la méthode. Les types de visibilité des méthodes sont les mêmes que les attributs. Les méthodes n'ont en général pas besoin d'être masquées à l'utilisateur, vous les mettrez souvent en `public` (à moins que vous teniez absolument à ce que l'utilisateur ne puisse pas appeler cette méthode, par exemple s'il s'agit d'une fonction qui simplifie certaines tâches sur l'objet mais qui ne doit pas être appelée n'importe comment).
 
- `static` : toutes les variables appelées dans la fonction ne peuvent être modifiées 


Micro explications :

```
<?php
class Personnage // Présence du mot-clé class suivi du nom de la classe.
{
  // Déclaration des attributs et méthodes ici.
}
```



---
## Mémo

- Autoload : 

```
spl_autoload_register(function($className)
{
    if(file_exists($className . '.php'))
    {
        require_once($className . '.php');
    }
});
```
---
- Espace de nom / Namespace

[Cours rapide Openclassrooms](https://openclassrooms.com/courses/les-espaces-de-noms-namespace)

À savoir : 

-> Ça regroupe des variables et des fonctions, des classes, tout ce que vous voulez dans un même ensemble. 
-> Il doit TOUJOURS être au début de la requête, sinon une erreur fatale va apparaître

```
namespace NomDuDocument;
```

---
- STARTER TEMPLACE CRÉATION OBJET

```
<?php

namespace ;

class OBJET /* extends PARENT*/
{
    // private $attribut; //Ne pas oublier de faire le getter & setter en fonction du cas d'utilisation de l'attribut
    // public $attribut;
    // protected $attribut;

    /*public | private | protected | static*/ function __construct(/*ARGUMENTS*/)
    {
        # CODE ...
    }

}
```

---
- TEXT

```

```

---
- TEXT

```

```

---
- TEXT

```

```

---
- TEXT

```

```

---
- TEXT

```

```