function initMap(){
    var piennes = {lat: 49.3074446, lng: 5.7676179}
    var map = new google.maps.Map($('#map')[0], {
        center : piennes, 
        zoom: 8
    });

    var geocoder = new google.maps.Geocoder;

    function codeAddress(){
        geocoder.geocode( { 'address': $('address').val() }, function(results, status){
            console.log(status);
            console.log(results);
        });
    }

    $('#address').keyup(_.debounce(codeAddress, 1000));
}