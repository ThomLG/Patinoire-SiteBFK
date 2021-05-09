// initialize the map on the "map" div with a given center and zoom
let map = L.map('map').setView([48.117266, -1.6777926],15);

L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png',
    {attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'})
    .addTo(map);