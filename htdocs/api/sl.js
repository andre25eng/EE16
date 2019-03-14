window.onload = start;

function start() {
    mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kcmUyNWVuZyIsImEiOiJjanBheTM4NW8yMDhmM3BvM2JiaTM3d250In0.D7717VTsZje4SAxxUqanEQ';
    let map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
        center: [18.06, 59.33], // starting position [lng, lat]
        zoom: 11 // starting zoom
    });
    
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocatin);
    } else {
        alert("Du har en för gammal wbbbläsare. Var vänlig uppgarera!");
    }

    function showLocatin(position) {
        var lat = position.coords.latitude;
        var lon = position.coords.longitude;
        console.log("Din position är: " + lat + ", " + lon);

        lat = "59.335393";
        lon = "18.058185";

        var postData = new FormData();
        postData.append("lat", lat);
        postData.append("lon", lon);

        var ajax = new XMLHttpRequest();
        ajax.open("POST", "sl.php", true);
        ajax.send(postData);

        ajax.addEventListener("loadend", fetchStops);
        function fetchStops() {
            var stopsJson = this.responseText;
            console.log(stopsJson);

            var stops = JSON.parse(stopsJson);

            stops.forEach(stop => {
                console.log("Hållplats: ", stop[0], stop[1], stop[2]);

                let marker = new mapboxgl.Marker()
                .setLngLat([stop[1], stop[2]])
                .addTo(map);
            });
        }
    }
}