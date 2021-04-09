// let's draw map
let map = L.map("earthquake-map").setView([0, 0], 2);
L.tileLayer("https://cartodb-basemaps-{s}.global.ssl.fastly.net/light_nolabels/{z}/{x}/{y}.png", {
    attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> - <a href="https://github.com/itwizz26">Itwizz26</a>',
    maxZoom: 19
}).addTo(map);

// load GeoJSON from an earthquake api
fetch (templateUri + '/inc/earthquake-catalog-api.php')
    .then(function(response) {
        return response.json();
    })
    .then(function(data) {
        L.geoJSON(data).addTo(map);
});
