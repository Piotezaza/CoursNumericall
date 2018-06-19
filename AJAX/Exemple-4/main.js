// Déclaration des variables

var url = "http://api.zippopotam.us/fr/";
var $cpInput = $('#codePostal');
var $villeInput = $('#ville');

$cpInput.keyup(function()
{
    // AJAX
    var xhr = $.ajax({
        method: "GET",
        url: url+ $cpInput.val(),
        dataType : 'json'
    });

    xhr.done(function(data){
        console.log(data);
    });
})