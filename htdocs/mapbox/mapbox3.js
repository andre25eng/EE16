window.onload = start;

function start() {
    const eBox = document.querySelector(".coordinates");

        mapboxgl.accessToken = 'pk.eyJ1IjoiYW5kcmUyNWVuZyIsImEiOiJjanBheTM4NW8yMDhmM3BvM2JiaTM3d250In0.D7717VTsZje4SAxxUqanEQ';
        let map = new mapboxgl.Map({
        container: 'map', // container id
        style: 'mapbox://styles/andre25eng/cjpb2s8a9a4ya2slmb0z2nyem', // stylesheet location
        center: [18.06, 59.33], // starting position [lng, lat]
        zoom: 11 // starting zoom
        });

        map.on("click",  addMarker);

        function addMarker(e) {
            let marker1 = new mapboxgl.Marker({draggable: true})
                .setLngLat(e.lngLat)
                .addTo(map);

                console.log(e.lngLat);
            eBox.innerHTML += e.lngLat.lng + ", " + e.lngLat.lat + ",\n";
        }
}