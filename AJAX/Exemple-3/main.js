// Déclaration des variables

var url = "http://api.zippopotam.us/fr/";
var CPInput = document.getElementById('codePostal');
var villeInput = document.getElementById('ville');

CPInput.onkeyup = function()
{
    if(CPInput.value.length != 5)
    {
        return;
    }
}