// Déclaration des variables

var url = "http://api.zippopotam.us/fr/";
var $CPInput = $('codePostal');
var $villeInput = $('ville');

$CPInput.keyup(function()
{
    // AJAX
    $.ajax({
        method: "GET",
        url: url+ $CPInput.val(),
        dataType : 'json',
    });
})