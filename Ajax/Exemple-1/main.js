var url ="lastArticles.html"; 
var refreshButton = document.getElementById('refresh');
var lastNews = document.getElementById('last-news');
var xhttp = new XMLHttpRequest();

refreshButton.onclick = function(){
    console.log('AJAX');
    xhttp.open("GET", url)
};