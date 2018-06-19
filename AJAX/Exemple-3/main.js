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
    
    xhttp.onreadystatechange = function()
    {
        if(this.readyState == 4)
        {
            // Active le SELECT
            villeInput.disabled = false;

            // Reset du SELECT
            villeInput.innerHTML = "";

            if(this.status == 200)
            {
                var result = JSON.parse(this.responseText);

                result.places.forEach(function(place){

                    // Nouvelle option pour le select
                    var option = document.createElement("option");
                    option.text = place['place name'];
                    option.value = place['place name'];
                    villeInput.add(option);
                })
            }
            
        }
    };
    xhttp.send();
}