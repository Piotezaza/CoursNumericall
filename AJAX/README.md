# Mémo AJAX

## JAVASCRIPT

- `var hxr = new XMLHttpRequest` : faire un appel AJAX en natif
- `xhr.open(METHOD, URL, ASYNC)` : prépare la requête
- `this.status` : Status de la réponse serveur
- `this.readyState` : État de la requête, 200 = OK // 4 = requête finir, le serveur a répondu
- `this.responseText` : Contenu de la réponse
- `JSON.parse(STRING)` : Transforme une chaîne (JSON) en objet JS
- `JSON.stringify(OBJECT)` : Transforme un objet en chaîne (JSON)
- `xhr.send()` : envoi de la requête

### CODE TYPE

```
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

## JQUERY

- `url: ''` : Lien vers le script à appeler
- `method: 'POST'` : ou GET
- `data: {}` : **objet** `{ username: 'Bob', password: '1234' }` ou **chaîne** `( "username=Bob&password=1234" )`
- `dataType: 'html'` : ou JSON
- `console.log(data);` : affichage du contenu de la réponse
- `` : 

### CODE TYPE

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

### Permet de paramétrer toutes les prochaînes requêtes AJAX (et donc de gagner du temps)


```
$.ajaxSetup({
    url: 'script.php'
});

$.ajax({}).done(...);
```

---

### Requête GET & POST

```
$.get(URL, DATA, function(data){}, DATATYPE); // Requête GET
$.post(URL, DATA, function(data){}, DATATYPE); // Requête POST
$.getJSON(URL, DATA, function(data){}); // Requête GET type JSON
$.post(URL, DATA, function(data){}, 'json'); // Requête GET type JSON
```

--- 

- `$('form').serialize()` : retourne les données d'un formulaire sous forme de chaîne encodée pour les URL