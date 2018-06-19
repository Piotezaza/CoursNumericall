// Déclaration des variables

var url = "http://api.zippopotam.us/fr/";
var CPInput = document.getElementById('codePostal');
var villeInput = document.getElementById('ville');
var xhttp = new XMLHttpRequest();

CPInput.onkeyup = function()
{
    if(CPInput.value.length != 5)
    {
        return;
    }

    xhttp.open("GET", url + CPInput.value, true);
}