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
    var markerList = [];
    var heatList = [];
    var heatmap = new google.maps.visualization.HeatmapLayer({
        map: map
    });
    updateHeatMap(heatmap);
    getLocation(function(pos){
        setHome(map, pos, homeMarker);
    });
    setClickEvent(map, markerList, heatmap);
    buildAutocomplete(map, homeMarker);
}

function buildAutocomplete(map, homeMarker){
    var input = document.getElementById('pac-input');
    map.controls[google.maps.ControlPosition.TOP_CENTER].push(input);
    var autocomplete = new google.maps.places.Autocomplete(input);
    autocomplete.bindTo('bounds', map);
    autocomplete.addListener('place_changed', function() {
        var place = autocomplete.getPlace();
        if (!place.geometry) {
            window.alert("Autocomplete's returned place contains no geometry");
            return;
        }
        map.setCenter(place.geometry.location);
        map.setZoom(17);
        homeMarker.setPosition(place.geometry.location);
    });
}

function setClickEvent(map, markerList, heatmap){
    map.addListener('click', function(event) {
        addMarker(event.latLng, markerList, map);
    });
    var clearButton = document.getElementById('clearButton');
    map.controls[google.maps.ControlPosition.TOP_RIGHT].push(clearButton);
    clearButton.addEventListener('click', function(){
        markerList = deleteMarkers(markerList);
    });
    var uploadButton = document.getElementById('uploadButton');
    map.controls[google.maps.ControlPosition.TOP_RIGHT].push(uploadButton);
    uploadButton.addEventListener('click', function(){
        [markerList, heatmap] = uploadMarkers(markerList, heatmap);
    });
    var heatmapButton = document.getElementById('heatmapButton');
    map.controls[google.maps.ControlPosition.TOP_RIGHT].push(heatmapButton);
    heatmapButton.addEventListener('click', function(){
        heatmap.setMap(heatmap.getMap() ? null : map);
    });

}

function updateHeatMap(heatmap){
    $.ajax({
        type: "GET",
        url: "/bins",
        contentType: 'application/json',
        success: function(response){
            var heatList = [];
            for (var i=0; i<response.length; i++){
                heatList.push(new google.maps.LatLng(response[i]['lat'], response[i]['lng']));
            }
            heatmap.setData(heatList);
        }
    });
}

function uploadMarkers(markerList, heatmap){
    var list = [];
    for (var i = 0; i < markerList.length; i++) {
        console.log(markerList[i].getPosition().lat(), markerList[i].getPosition().lng());
        var data = {
            lat: markerList[i].getPosition().lat(),
            lng: markerList[i].getPosition().lng(),
            bin_id: 1,
            time: new Date()
        };
        list.push(data);
    }
    $.ajax({
        type: "POST",
        url: "/bins",
        contentType: 'application/json',
        data: JSON.stringify({points: list}),
        success: function(){
            updateHeatMap(heatmap);
        }
    });
    markerList = deleteMarkers(markerList);

    //console.log(JSON.stringify(list));

    console.log("Upload Complete");
    return [markerList, heatmap];
}

function addMarker(location, markerList, map) {
    var marker = new google.maps.Marker({
        position: location,
        map: map
    });
    markerList.push(marker);
}

function deleteMarkers(markerList) {
    clearMarkers(markerList);
    markerList = [];
    return markerList
}

function setMapOnAll(map, markerList) {
    for (var i = 0; i < markerList.length; i++) {
        markerList[i].setMap(map);
    }
}

function clearMarkers(markerList) {
    setMapOnAll(null, markerList);
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


