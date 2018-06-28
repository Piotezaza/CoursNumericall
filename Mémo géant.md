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
---


## AJAX

### SOMMAIRE

- [COURS]()

#### COURS

- [OPENCLASSROOMS - Introduction à AJAX](https://openclassrooms.com/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920925-quest-ce-que-lajax)

#### AVEC JAVASCRIPT 
- `var hxr = new XMLHttpRequest` : fais un appel AJAX en natif
- `xhr.open(METHOD, URL, ASYNC)` : prépare la requête
- `this.status` : status de la réponse serveur
- `this.readyState` : état de la requête, 200 = OK // 4 = requête finir, le serveur a répondu
- `this.responseText` : contenu de la réponse
- `JSON.parse(STRING)` : transforme une chaîne (JSON) en objet JS
- `JSON.stringify(OBJECT)` : transforme un objet en chaîne (JSON)
- `xhr.send()` : envoi de la requête

#### CODE TYPE

```
var hxr = new XMLHttpRequest;git add *
git commit -m "Update"
git push origin master

xhr.open(METHOD, URL, ASYNC);

xhr.onreadystatechange = function()
{
    this.status;
    this.readyState;
    this.responseText;
    JSON.parse(STRING);
    JSON.stringify(OBJECT);
}

xhr.send();
```

### AVEC JQUERY

- `url: ''` : lien vers le script à appeler
- `method: 'POST'` : ou GET
- `data: {}` : **OBJET** `{ username: 'Bob', password: '1234' }` ou **CHAÎNE** `( "username=Bob&password=1234" )`
- `dataType: 'html'` : ou JSON
- `console.log(data);` : affichage du contenu de la réponse

#### CODE TYPE

```
$.ajax({

    url: '',
    method: 'POST',
    data: {},
    dataType: 'html',
    beforeSend: function(){

    },
}).done(functiond(data){

    console.log(data);

}).fail(function(xhr, textStatus){

    // Erreur

});
```

---

#### Permet de paramétrer toutes les prochaînes requêtes AJAX (et donc de gagner du temps)


```
$.ajaxSetup({
    url: 'script.php'
});

$.ajax({}).done(...);
```

---

#### Requête GET & POST

```
$.get(URL, DATA, function(data){}, DATATYPE); // Requête GET
$.post(URL, DATA, function(data){}, DATATYPE); // Requête POST
$.getJSON(URL, DATA, function(data){}); // Requête GET type JSON
$.post(URL, DATA, function(data){}, 'json'); // Requête GET type JSON
```

--- 

- `$('form').serialize()` : retourne les données d'un formulaire sous forme de chaîne encodée pour les URL

---

---
---


## BOOTSTRAP

### SOMMAIRE

- []()

1. TEXTE

---
---


## CSS

### SOMMAIRE

- []()

1. TEXTE

---
---


## HTML

### SOMMAIRE

- []()

1. TEXTE

---
---


## JAVASCRIPT

### SOMMAIRE

- []()

1. TEXTE

---
---


## JQUERY

### SOMMAIRE

- []()

1. TEXTE

---
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

- `$this` 
- `::set` représente l'objet depuis lequel il est appelé. Peut également s'écrire de la manière suivante (pas trop recommandée) > `::objet`

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
---
##### **ESPACE DE NOM / NAMESPACE**

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
---
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
---
##### **TESTER LE TYPE D'ATTRIBUT (string, array, ...)**

```
public function setAttribut(string $attribut)
{
    $this->attribut = $attribut;

    return $this;
}

```

---
---


## SQL

### SOMMAIRE

- []()

1. TEXTE

---
---


## SYMPHONY

### SOMMAIRE

- []()

1. TEXTE

---
