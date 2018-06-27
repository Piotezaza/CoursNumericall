# Mémo géant

Plutôt que de fouiller dans TOUS les dossiers pour retrouver TOUS mes mémos, tout sera écrit ici. 

La structure de ce fichier sera la suivante : 

**SOMMAIRE GÉNÉRAL**

- LIEN VERS LE LANGUAGE 1
- LIEN VERS LE LANGUAGE 2
- LIEN VERS LE LANGUAGE 3

[...]

**SOMMAIRE LANGUAGE 1**

- THEME 1 
- THEME 2 
- THEME 3


---

## SOMMAIRE

- [AJAX](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#ajax)
- [BOOTSTRAP](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#bootstrap)
- [CSS](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#css)
- [HTML](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#html)
- [JAVASCRIPT](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#javascript)
- [JQUERY](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#jquery)
- [PHP](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#php)
- [SQL](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sql)
- [SYMPHONY](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#symphony)

---

## AJAX

### SOMMAIRE

- []()

1. TEXTE

---

## BOOTSTRAP

### SOMMAIRE

- []()

1. TEXTE

---

## CSS

### SOMMAIRE

- []()

1. TEXTE

---

## HTML

### SOMMAIRE

- []()

1. TEXTE

---

## JAVASCRIPT

### SOMMAIRE

- []()

1. TEXTE

---

## JQUERY

### SOMMAIRE

- []()

1. TEXTE

---
---

## PHP

### SOMMAIRE

- [FONCTIONS DE BASE]
- [POO](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#orient%C3%89-objet)
    - [AUTOLOAD](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#autoload)
    - [ESPACE DE NOM / NAMESPACE]()
    - [STARTER TEMPLATE CRÉATION OBJET]()
    - [TESTER LE TYPE D'ATTRIBUT (string, array, ...)]()

#### FONCTIONS DE BASE


#### ORIENTÉ OBJET

##### **AUTOLOAD**

[Doc PHP.NET](http://php.net/manual/fr/function.spl-autoload-register.php)

```
spl_autoload_register(function($className)
{
    // /* remplacer les \ par des / mac OS X UNIQUEMENT */ $className = str_replace('\\', '/', $className); 

    if(file_exists($className . '.php'))
    {
        require_once($className . '.php');
    }
});
```

##### **Espace de nom / Namespace**

[Cours rapide Openclassrooms](https://openclassrooms.com/courses/les-espaces-de-noms-namespace) | Pour plus de détails sur le code ci-dessous : [PHP.NET - Utilisation des espaces de noms : importation et alias](http://php.net/manual/fr/language.namespaces.importing.php)

À savoir : 

-> Ça regroupe des variables et des fonctions, des classes, tout ce que vous voulez dans un même ensemble. 

-> Il doit TOUJOURS être au début de la requête, sinon une erreur fatale va apparaître

```
namespace foo;
use My\Full\Classname as Another;

// Ceci est la même chose que use My\Full\NSname as NSname
use My\Full\NSname;

// importation d'une classe globale
use ArrayObject;

// importation d'une function (PHP 5.6+)
use function My\Full\functionName;

// alias d'une fonction (PHP 5.6+)
use function My\Full\functionName as func;

// importation d'une constante (PHP 5.6+)
use const My\Full\CONSTANT;

// instantie un objet de la classe foo\Another
$obj = new namespace\Another;

// instantie un objet de la classe My\Full\Classname
$obj = new Another;

// appelle la fonction My\Full\NSname\subns\func
NSname\subns\func();

// instantie un objet de la classe ArrayObject
$a = new ArrayObject(array(1));

// Sans l'instruction "use ArrayObject" nous aurions instantié un objet de la classe foo\ArrayObject
func(); // Appel la fonction My\Full\functionName

// affiche la valeur de My\Full\CONSTANT
echo CONSTANT; 
```

##### **STARTER TEMPLATE CRÉATION OBJET**

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

##### **Tester le type d'attribut (string, array,...)**

```
public function setAttribut(string $attribut)
{
    $this->attribut = $attribut;

    return $this;
}

```

---

## SQL

### SOMMAIRE

- []()

1. TEXTE

---

## SYMPHONY

### SOMMAIRE

- []()

1. TEXTE

---
