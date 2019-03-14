window.onload = start;

function start() {
    var lat = 59.335393;
    var lon = 18.058185;

    mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kcmUyNWVuZyIsImEiOiJjanBheTM4NW8yMDhmM3BvM2JiaTM3d250In0.D7717VTsZje4SAxxUqanEQ';
    let map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/mapbox/streets-v9', // stylesheet location
        center: [18.058185, 59.335393], // starting position [lng, lat]
        zoom: 14 // starting zoom
    });
    
    var nti = document.createElement('div');
    nti.className = 'marker';
    let marker = new mapboxgl.Marker(nti)
                .setLngLat([lon, lat])
                .addTo(map);

    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(showLocatin);
    } else {
        alert("Du har en för gammal wbbbläsare. Var vänlig uppgarera!");
    }

    function showLocatin(position) {
        /* var lat = position.coords.latitude;
        var lon = position.coords.longitude; */
        console.log("Din position är: " + lat + ", " + lon);

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
                console.log(stop[0], stop[1], stop[2]);

                var popup = new mapboxgl.Popup({
                    offset: 25
                })
                .setText(stop[0]);

                let marker = new mapboxgl.Marker()
                .setLngLat([stop[2], stop[1]])
                .setPopup(popup)
                .addTo(map);
            });
        }
    }
}