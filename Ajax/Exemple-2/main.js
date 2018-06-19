var url ="lastArticles.json?r="; 
var refreshButton = document.getElementById('refresh');
var lastNews = document.getElementById('last-news');
var xhttp = new XMLHttpRequest();

refreshButton.onclick = function(){
    document.getElementById('refresh-icon').classList.add("fa-spin");
    xhttp.open("GET", url + Math.random()); // Prépare la requête

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200)
        {
            var data = JSON.parse(this.responseText); // Transforme la réponse en objet JSON
            console.log(data);
            document
                .getElementById('refresh-icon')
                .classList.remove('fa-spin');
        }
    };

    xhttp.send(); // Envoie la requête au serveur
};