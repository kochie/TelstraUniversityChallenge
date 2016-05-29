/**
 * Created by Robert on 27/05/2016.
 */
// Note: This example requires that you consent to location sharing when
// prompted by your browser. If you see the error "The Geolocation service
// failed.", it means you probably did not give permission for the browser to
// locate you.

/**
 * Initialises the google map via the input script
 */
function initMap() {
    var map = new google.maps.Map(document.getElementById('map'), {
        center: {lat: -34.397, lng: 150.644},
        zoom: 9
    });
    var homeMarker = new google.maps.Marker({
        map: map
    });
    getLocation(function(pos){
        setHome(map, pos, homeMarker);
    });
}

/**
 * Set's the maps current position to geolocation
 * @param map - map instance
 * @param pos - object containing lat, lng coordinates
 * @param homeMarker - marker object defined for home location
 */
function setHome(map, pos, homeMarker){
    if (homeMarker) {
        homeMarker.setPosition(pos);
    }
    else{
        console.log("homeMarker not defined");
    }
    map.setCenter(pos);
    map.setZoom(17);
}

/**
 * error handler for geolocation
 * @param browserHasGeolocation
 */
function handleLocationError(browserHasGeolocation) {
    console.log(browserHasGeolocation ?
        'Error: The Geolocation service failed.' :
        'Error: Your browser doesn\'t support geolocation.');
}

/**
 * gets the location of the client in terms google maps can understand
 * @param success - callback function on successful location tracking
 */
function getLocation(success){
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            success({
                lat: position.coords.latitude,
                lng: position.coords.longitude
            });
        }, function() {
            handleLocationError(true);
        });
    }
    else {
        // Browser doesn't support Geolocation
        handleLocationError(false);
    }
}