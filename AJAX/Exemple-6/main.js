function initMap(){
    var piennes = {lat: 49.3074446, lng: 5.7676179}
    var map = new google.maps.Map($('#map')[0], {
        center : piennes, 
        zoom: 8
    });
}