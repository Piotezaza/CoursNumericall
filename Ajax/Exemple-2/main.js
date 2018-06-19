// DÉCLARATION DES VARIABLES

var url ="lastArticles.json?r="; 
var refreshButton = document.getElementById('refresh');
var lastNews = document.getElementById('last-news');
var lastNewsFooter = document.getElementById('last-news-footer');
var articleTemplate = lastNews.querySelector('li.media');
var xhttp = new XMLHttpRequest();

articleTemplate.remove();
console.log(articleTemplate);

refreshButton.onclick = function(){
    document.getElementById('refresh-icon').classList.add("fa-spin");
    xhttp.open("GET", url + Math.random()); // Prépare la requête

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200)
        {
            // Transforme la réponse en objet JSON
            var data = JSON.parse(this.responseText); 

            console.log(data);

            lastNewsFooter.innerHTML = data.count + " articles";

            // Affichage des articles
            

            document
                .getElementById('refresh-icon')
                .classList.remove('fa-spin');
        }
    };

    xhttp.send(); // Envoie la requête au serveur
};