var url ="lastArticles.html"; 
var refreshButton = document.getElementById('refresh');
var lastNews = document.getElementById('last-news');
var xhttp = new XMLHttpRequest();

refreshButton.onclick = function(){
    document.getElementById('refresh-icon').classList.add("fa-spin");
    xhttp.open("GET", url); // Prépare la requête

    xhttp.onreadystatechange = function(){

        if(this.readyState == 4 && this.status == 200)
        {
            lastNews.innerHTML = this.responseText;
        }
    };

    xhttp.send(); // Envoie la requête au serveur
};