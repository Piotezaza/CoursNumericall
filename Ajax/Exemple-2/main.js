// DÉCLARATION DES VARIABLES

var url ="lastArticles.json?r="; 
var refreshButton = document.getElementById('refresh');
var lastNews = document.getElementById('last-news');
var lastNewsFooter = document.getElementById('last-news-footer');
var articleTemplate = lastNews.querySelector('li.media');
var xhttp = new XMLHttpRequest();

articleTemplate.remove();

refreshButton.onclick = function(){
    document.getElementById('refresh-icon').classList.add("fa-spin");

    // Préparation de la requête
    xhttp.open("GET", url + Math.random()); 

    xhttp.onreadystatechange = function()
    {

        if(this.readyState == 4 && this.status == 200)
        {
            // Transforme la réponse en objet JSON
            var data = JSON.parse(this.responseText); 

            console.log(data);

            // Affichage du nombre d'articles
            lastNewsFooter.innerHTML = data.count + " articles";

            // Affichage des articles
            data.articles.forEach(function(article)
            {
                var newArticleHTML = articleTemplate.cloneNode(true);
                newArticleHTML.querySelector('img').src = article.image;
                newArticleHTML.querySelector('h2').src = article.title;
                newArticleHTML.querySelector('p').src = article.description;
            });

            document
                .getElementById('refresh-icon')
                .classList.remove('fa-spin');
        }
    };

    xhttp.send(); // Envoie la requête au serveur
};