# Mémo géant

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

- [AJAX](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#ajax--up-)
- [BOOTSTRAP](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#bootstrap--up-)
- [CSS](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#css--up-)
- [HTML](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#html--up-)
- [JAVASCRIPT](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#javascript--up-)
- [JQUERY](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#jquery--up-)
- [PHP](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#php--up-)
- [SQL](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sql--up-)
- [SYMPHONY](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#symphony--up-)
- [AUTRES LIENS UTILES](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#autres-liens-utiles--up-)

---
---


## AJAX [↑ UP ↑](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sommaire)

### SOMMAIRE

- [COURS](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#cours)
- [AVEC JAVASCRIPT](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#avec-javascript)
    - [CODE TYPE](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#code-type)
- [AVEC JQUERY](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#avec-jquery)
    - [CODE TYPE](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#code-type-1)

### COURS

- [OPENCLASSROOMS - Introduction à AJAX](https://openclassrooms.com/courses/1916641-dynamisez-vos-sites-web-avec-javascript/1920925-quest-ce-que-lajax)

### AVEC JAVASCRIPT 
- `var hxr = new XMLHttpRequest` : fais un appel AJAX en natif
- `xhr.open(METHOD, URL, ASYNC)` : prépare la requête
- `this.status` : status de la réponse serveur
- `this.readyState` : état de la requête, 200 = OK // 4 = requête finie, le serveur a répondu
- `this.responseText` : contenu de la réponse
- `JSON.parse(STRING)` : transforme une chaîne (JSON) en objet JS
- `JSON.stringify(OBJECT)` : transforme un objet en chaîne (JSON)
- `xhr.send()` : envoi de la requête

#### CODE TYPE

```javascript
var hxr = new XMLHttpRequest;

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
- `method: 'POST'` : ou GET (par défaut)
- `data: {}` : **OBJET** `{ username: 'Bob', password: '1234' }` ou **CHAÎNE** `( "username=Bob&password=1234" )`
- `dataType: 'html'` : ou JSON
- `console.log(data);` : affichage du contenu de la réponse

#### CODE TYPE

```javascript
$.ajax({

    url: '',
    method: 'POST',
    data: {},
    dataType: 'html',
    beforeSend: function(){

    },
}).done(function(data){

    console.log(data);

}).fail(function(xhr, textStatus){

    // Erreur

});
```

---

#### Permet de paramétrer toutes les prochaînes requêtes AJAX (et donc de gagner du temps)


```javascript
$.ajaxSetup({
    url: 'script.php'
});

$.ajax({}).done(...);
```

---

#### Requête GET & POST

```javascript
$.get(URL, DATA, function(data){}, DATATYPE); // Requête GET
$.post(URL, DATA, function(data){}, DATATYPE); // Requête POST
$.getJSON(URL, DATA, function(data){}); // Requête GET type JSON
$.post(URL, DATA, function(data){}, 'json'); // Requête GET type JSON
```

--- 

- `$('form').serialize()` : retourne les données d'un formulaire sous forme de chaîne encodée pour les URL

---
---


## BOOTSTRAP [↑ UP ↑](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sommaire)

### SOMMAIRE

- [STARTER TEMPLATE](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#starter-template)
- [FORMULAIRE TEMPLATE](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#formulaire-template)
- [MODAL POP-UP / POP-OUT](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#modal-pop-up--pop-out)

### STARTER TEMPLATE

```html
<!doctype html>
<html lang="fr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    <h1>Hello, world!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
  </body>
</html>
```

### FORMULAIRE TEMPLATE

```html
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
```

### MODAL POP-UP / POP-OUT

Fonction pour faire apparaître un modal Boostrap pendant 2,5 secondes. L'attribut `modal` doit être remplacé par **l'ID** du modal visé.

```javascript
function popUp_OutModal(modal) {
    $(modal).modal('show');
    setTimeout(function() { $(modal).modal('hide'); }, 2500);
}

// Exemple d'utilisation
popUp_OutModal('#modalQuiDechire')

```

---
---


## CSS [↑ UP ↑](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sommaire)

### SOMMAIRE & LIENS

- [FLEXBOX FROGGY](http://flexboxfroggy.com/#fr)
- [CSS ZEN GARDEN](http://www.csszengarden.com/)
- [OBJECT-POSITION](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#object-position)
- [OBJECT-FIT](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#object-fit)
- [OPENCLASSROOMS - COMPRENDRE FLEXBOX](https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/la-mise-en-page-avec-flexbox)
- [APPRENDRE LES LAYOUTS CSS](http://learnlayout.com/)

### OBJECT-POSITION

La propriété `object-position` détermine l'alignement d'un élément remplacé au sein de sa boîte. Les zones de la boîtes qui ne sont pas recouvertes par le contenu de l'élément remplacé montreront l'arrière-plan de l'élément. [MDN](https://developer.mozilla.org/fr/docs/Web/CSS/object-position)

### OBJECT-FIT

La propriété CSS `object-fit` définit la façon dont le contenu d'un élément remplacé doit s'adapter à son parent en utilisant sa largeur et sa hauteur. [MDN](https://developer.mozilla.org/fr/docs/Web/CSS/object-fit)

---
---


## HTML [↑ UP ↑](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sommaire)

### SOMMAIRE

- [ALSACREATIONS - Nouveautés](https://www.alsacreations.com/article/lire/750-HTML5-nouveautes.html)
- [ALSACREATIONS - Section, article, nav...](https://www.alsacreations.com/article/lire/1376-html5-section-article-nav-header-footer-aside.html)
- [ALSACREATIONS - Le contexte de formatage block en CSS](https://www.alsacreations.com/astuce/lire/1543-Le-contexte-de-formatage-block-en-CSS.html)

### TITRE

---
---


## JAVASCRIPT [↑ UP ↑](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sommaire)

### SOMMAIRE

- [GRAFIKART - Tuto JSON](https://www.grafikart.fr/tutoriels/jquery/json-77)
- [AUTOFILL ARRAY](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#autofill-array)

### AUTOFILL ARRAY

```javascript
// PREMIERE VERSION
var element = {}, cart = [];
var counter = 5;

for(i=0; i < counter; i++)
{
    id = i + ' id';
    quantity = i + ' quantity';
    cart.push({id, quantity});
}

console.log(cart);

// Return
(5) [{…}, {…}, {…}, {…}, {…}]
0: {id: "4 id", quantity: "4 quantity"}
1: {id: "4 id", quantity: "4 quantity"}
2: {id: "4 id", quantity: "4 quantity"}
3: {id: "4 id", quantity: "4 quantity"}
4: {id: "4 id", quantity: "4 quantity"}

// Récupérer la 3ème ligne
cart[2]["id"];
cart[2]["quantity"];

// SECONDE VERSION
var element = {}, cart = [];
var counter = 5;

for(i=0; i < counter; i++)
{
    element.id = i + ' id';
    element.quantity = i + ' quantity';
    cart.push({element: element});
}

console.log(cart);

// Return
(5) [{…}, {…}, {…}, {…}, {…}]
0: element: {id: "4 id", quantity: "4 quantity"}
1: element: {id: "4 id", quantity: "4 quantity"}
2: element: {id: "4 id", quantity: "4 quantity"}
3: element: {id: "4 id", quantity: "4 quantity"}
4: element: {id: "4 id", quantity: "4 quantity"}

// Récupérer la 3ème ligne
cart[2]["element"]["id"];
cart[2]["element"]["quantity"];
```

---
---


## JQUERY [↑ UP ↑](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sommaire)

### SOMMAIRE

- [CDN JQUERY](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#cdn-jquery)

### CDN JQUERY

```html
<script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
``` 

---
---


## PHP [↑ UP ↑](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sommaire)

### SOMMAIRE

- [FONCTIONS DE BASE](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#fonctions-de-base)
- [BASIQUE](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#basique)
    - [Enregistrer des informations dans un fichier](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#enregistrer-des-informations-dans-un-fichier)
- [ORIENTÉ OBJET](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#orient%C3%89-objet)
    - [AUTOLOAD](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#autoload)
    - [ESPACE DE NOM / NAMESPACE](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#espace-de-nom--namespace)
    - [STARTER TEMPLATE CRÉATION OBJET](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#starter-template-cr%C3%89ation-objet)
    - [TESTER LE TYPE D'ATTRIBUT (string, array, ...)](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#tester-le-type-dattribut-string-array-)
- [FONCTIONS UTILES](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#fonctions-utiles)
    - [CRÉATION AUTOMATIQUE DE LA DATE DU JOUR](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#cr%C3%A9ation-automatique-de-la-date-du-jour---doc)
    - [INSERTION DE PLUSIEURS LIGNES DANS LA TABLE GRACE A PDO](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#insertion-de-plusieurs-lignes-dans-la-table-grace-a-pdo)
    - [ALTERNATIVE AU lastInsertId()](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#alternative-au-lastinsertid)

### FONCTIONS DE BASE

- `PHP_EOL` : permet de sauter une ligne dans un fichier
- `require_once("fichier.txt")` : bloque l'execution du code si le fichier n'est pas trouvé
- `strlen()` retourne la longueur d'une chaîne 
- `` 

### BASIQUE

#### ENREGISTRER DES INFORMATIONS DANS UN FICHIER

```php
// VERSION À FAIRE À CHAQUE FOIS (methode dans if et ensuite le reste dans le if)
    if($_POST)
    {
        if(empty($_POST['pseudo']))
        {
            echo "Pas de pseudo renseigné";
        }
        else 
        {
            echo "Bienvenue sur le site " .$_POST['pseudo'];
        }
    }

    extract($_POST); // Cette fonction nous permet de créer des variables via les indices du tableau et affecte leur valeur

    echo '<br>';

    echo $pseudo . " - " . $email;


    # On souhaite inscrire les valeurs récupérées par le formulaire dans un fichier externe.

    $f = fopen("liste.txt", "a"); //on enregistre dans une variable l'opération d'ouverture d'un fichier. 'a' nous permet d'ouvrir le fichier et s'il n'existe pas, de le créer. La fonction fopen prend 2 arguments : nom du fichier + méthodoligie

    /*
        r  => lecture seule du fichier, début de fichier
        r+ => lecture et écriture du fichier, début de fichier
        w  => écriture seule, écrase le reste du fichier
        w+ => lecture et écriture, écrase le reste du fichier
        a  => écriture seule, fin du fichier
        a+ => lecture et écriture, fin du fichier
    */

    fwrite($f, $_POST['pseudo'] . ' - ');
    fwrite($f, $_POST['email'] . "\n");

    $f = fclose($f); // pas indispensable mais libère de la ressource

```


### ORIENTÉ OBJET

- `$this` 
- `self::` représente l'objet depuis lequel il est appelé. Peut également s'écrire de la manière suivante (pas trop recommandée) > `::objet`. À utiliser **uniquement** sur les `const` et les `static`.
- [COURS MADE IN MAZA](https://github.com/Piotezaza/CoursNumericall/tree/master/PHP/POO#petites-explications-maison)

#### **AUTOLOAD**

[Doc PHP.NET](http://php.net/manual/fr/function.spl-autoload-register.php)

```php
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
#### **ESPACE DE NOM / NAMESPACE**

[Cours rapide Openclassrooms](https://openclassrooms.com/courses/les-espaces-de-noms-namespace) | Pour plus de détails sur le code ci-dessous : [PHP.NET - Utilisation des espaces de noms : importation et alias](http://php.net/manual/fr/language.namespaces.importing.php)

À savoir : 

-> Ça regroupe des variables et des fonctions, des classes, tout ce que vous voulez dans un même ensemble. 

-> Il doit TOUJOURS être au début de la requête, sinon une erreur fatale va apparaître

```php
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
#### **STARTER TEMPLATE CRÉATION OBJET**

```php
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
#### **TESTER LE TYPE D'ATTRIBUT (string, array, ...)**

```php
public function setAttribut(string $attribut)
{
    $this->attribut = $attribut;

    return $this;
}

```

### FONCTIONS UTILES

#### **CRÉATION AUTOMATIQUE DE LA DATE DU JOUR - [DOC](http://php.net/manual/fr/function.date.php)**

```php
$today = date('d-m-Y H:i:s') // Retourne 26-10-2018 09:56:58
```

#### **INSERTION DE PLUSIEURS LIGNES DANS LA TABLE GRACE A PDO**

```php
function pdoMultiInsert($tableName, $data, $pdoObject){
    
    // Contiendra les extraits de code SQL
    $rowsSQL = array();
 
    // Contiendra les valeurs que nous devons lier.
    $toBind = array();
    
    // Récupère la liste des noms de colonnes à utiliser dans la requete SQL
    $columnNames = array_keys($data[0]);
 
    // Boucle sur l'array $data.
    foreach($data as $arrayIndex => $row){
        $params = array();
        foreach($row as $columnName => $columnValue){
            $param = ":" . $columnName . $arrayIndex;
            $params[] = $param;
            $toBind[$param] = $columnValue; 
        }
        $rowsSQL[] = "(" . implode(", ", $params) . ")";
    }
 
    // Creation de l'instruction SQL
    $sql = "INSERT INTO `$tableName` (" . implode(", ", $columnNames) . ") VALUES " . implode(", ", $rowsSQL);
 
    // On prepare la requete
    $pdoStatement = $pdoObject->prepare($sql);
 
    // On bind les values
    foreach($toBind as $param => $val){
        $pdoStatement->bindValue($param, $val);
    }
    
    // On execute
    return $pdoStatement->execute();
}

// UTILISATION

// Connexion avec le PDO
$pdo = new PDO('mysql:host=localhost;dbname=test', 'root', '');
 
// Exemple d'array avec des valeurs qu'on injecte dans la table
$rowsToInsert = array(
    array(
        'name' => 'John Doe',
        'dob' => '1993-01-04',
    ),
    array(
        'name' => 'Jane Doe',
        'dob' => '1987-06-14',
    ),
    array(
        'name' => 'Joe Bloggs',
        'dob' => '1989-09-29',
    )
);
 
// Exemple d'array avec des valeurs qu'on injecte dans la table en plus des datas précédentes
$rowsToInsert[] = array(
    'name' => 'Patrick Simmons',
    'dob' => '1972-11-12'
);
 
// On appelle notre fonction
pdoMultiInsert('people', $rowsToInsert, $pdo);
```

#### **ALTERNATIVE AU lastInsertId()**

```php
function getLastId($pdo)
{
    try
    {
        $req = null;
        $retdata = array();

        $req = $pdo->prepare("SELECT MAX(ColonneVisee) AS ID FROM maTable");
        $req->execute();

        while( $data = $req->fetch(PDO::FETCH_OBJ) )
        {
            $retdata[] = $data;
        }

        return $retdata;
    }
    catch(Exception $e)
    {
        return $e->getMessage();
    }
}

/* getLastId($pdo) retourne :

Array
(
    [0] => stdClass Object
        (
            [ID] => 27
        )
)
*/


function insertDansMaTable($Name, $Address)
{
    $attributes = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ];
    $pdo = new PDO('sqlite:BDD/data.db', null, null, $attributes);
    $req = $pdo->prepare("INSERT INTO Employees (Name) VALUES (:Name)");

    $req->bindValue(':Name', $Name, PDO::PARAM_STR); 

   if( $req->execute() )
   {
        $lastID = getLastId($pdo);

        foreach($lastID as $val)
        {
            $lastID = $val -> ID;
        }

        //J'appelle la fonction insertDansMonAutreTable car maintenant je connais mon $lastID
        insertDansMonAutreTable( $Address, $lastID);        
   }
   else 
   {
        $req->errorCode();
        echo "Fail";
   }
}
```

---
---


## SQL [↑ UP ↑](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sommaire)

### SOMMAIRE    

- []()

### TITRE

---
---


## SYMPHONY [↑ UP ↑](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sommaire)

### SOMMAIRE

- []()

### TITRE

---
---

## AUTRES LIENS UTILES [↑ UP ↑](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#sommaire)

### SOMMAIRE

- [COURS / DOCUMENTATION](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#cours--documentation)
    - [ACCESSIBILITÉ](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#accessibilit%C3%A9)
    - [UX DESIGN](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#ux-design)
    - [SEO](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#seo)
- [LANGAGES / FRAMEWORKS / BIBLIOTHEQUES](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#langages--frameworks--bibliotheques)
- [PLUGINS](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#plugins)
- [OUTILS / LOGICIELS](https://github.com/Piotezaza/CoursNumericall/blob/master/M%C3%A9mo%20g%C3%A9ant.md#outils--logiciels)

### COURS / DOCUMENTATION

- [SOLOLEARN](https://www.sololearn.com/) | Cours programmation - en ligne et sur application mobile (en anglais)
- [OPENCLASSROOMS](https://openclassrooms.com/fr/) | Cours en ligne (en français)
- [ABONNEMENT PREMIUM SOLO OPENCLASSROOMS](https://openclassrooms.com/fr/partners/pole-emploi/offers) | 0€ si inscrit à Pôle Emploi
- [SQL](https://sql.sh/)

#### ACCESSIBILITÉ
- [Web Content Accessibility Guidelines (WCAG)](https://www.w3.org/TR/WCAG20) | Version un peu moche
- [Checklist WCAG](https://webaim.org/standards/wcag/checklist)
- [Google developers - Web - Accessibilité](https://developers.google.com/web/fundamentals/accessibility)
- [Contrast Checker](https://webaim.org/resources/contrastchecker)
- [Certification OpQuast](https://shop.opquast.com/)

#### UX DESIGN
- [Material.io](https://material.io/)

#### SEO
- [Google PageSpeed Insights - Wordpress](https://kinsta.com/blog/google-pagespeed-insights/)


### LANGAGES / FRAMEWORKS / BIBLIOTHEQUES
- [FUNDATION](https://foundation.zurb.com/) | Framework Boostrap like


### PLUGINS
- [DATATABLES](https://datatables.net/manual/) | Créé des tableaux "automatiques" avec Ajax (Javascript)
    - [FONCTIONS PRINCIPALES](https://github.com/Piotezaza/draft/tree/master/DataTables#fonctions-principales) | Mémo des fonctions principales sur Datatables
- [SUMMERNOTE](https://summernote.org/) | WISIWYG éditeur de texte à intégrer (Javascript)
- [CHAINED](https://appelsiini.net/projects/chained/) | Plugin jQuery qui relie des selects entre eux pour créer une dépendence [EXEMPLE](https://codepen.io/piotezaza/pen/WaNOYQ)


### OUTILS / LOGICIELS
- [DB Browser for SQLite - BDD]( https://sqlitebrowser.org/)
- [Visual Studio Code - Windows](https://code.visualstudio.com/docs/?dv=win)
- [ColorPic](https://www.clubic.com/telecharger-fiche14962-colorpic.html)
- [Adobe XD](https://www.adobe.com/lu_fr/products/xd.html) | GRATUIT - Pour créer des layouts d'application, site web... Cousin de [Sketch](https://www.sketchapp.com/) (payant)
- [Affinity](https://affinity.serif.com/fr/) | Logiciels equivalents à Photoshop & Illustrator
- [Codepen.io](https://codepen.io/) | Coder directement en ligne et trouver des idées
- [StackOverflow](http://stackoverflow.com) | Forum de devs'
- [Wappalyzer - Extension Chrome & Firefox](https://www.wappalyzer.com/download) | Permet de savoir ce qui est utilisé comme techno. sur un site
- [ColorZilla - Extension Chrome](https://chrome.google.com/webstore/detail/colorzilla/bhlhnicpbhignbdhedgjhgdocnmhomnp) | Pipette pour récupérer les couleurs de sites web (extrêmement pratique)
- [LightHouse](https://chrome.google.com/webstore/detail/lighthouse/blipmdconlkpinefehnmjammfjpmpbjk) | Fais un compte rendu sur les performances du site où l'extension est utilisée
