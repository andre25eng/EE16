window.onload = start;

function start() {
    mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kcmUyNWVuZyIsImEiOiJjanBheTM4NW8yMDhmM3BvM2JiaTM3d250In0.D7717VTsZje4SAxxUqanEQ';
    let map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
        center: [18.06, 59.33], // starting position [lng, lat]
        zoom: 11 // starting zoom
    });

    let marker1 = new mapboxgl.Marker({ draggable: true })
        .setLngLat([18.06, 59.33])
        .addTo(map);
    
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocatin);
    } else {
        alert("Du har en för gammal wbbbläsare. Var vänlig uppgarera!");
    }

    function showLocatin(position) {
        var lat = position.coords.latidude;
        var lot = position.coords.longitdude;
        alert("Din position är: " + lat + ", " + lon)
    }
}