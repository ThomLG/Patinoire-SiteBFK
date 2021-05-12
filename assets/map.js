// initialize the map on the "map" div with a given center and zoom

const map = L.map('map').setView([48.117266, -1.6777926], 13);

L.tileLayer('https://{s}.tile.openstreetmap.fr/osmfr/{z}/{x}/{y}.png',
    {
        attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors',
        minZoom: 1,
        maxZoom: 20,
    }).addTo(map);

let xmlhttp = new XMLHttpRequest();
xmlhttp.onreadystatechange = () => {
    if (xmlhttp.readyState === 4) {
        if (xmlhttp.status === 200) {
            let data = JSON.parse(xmlhttp.responseText);
            Object.entries(data).forEach(stadium => {
                    //personnalisation des marqueurs (image, taille, etc.)
                    let myMarker = L.popup({
                    });
                    //affichage des pop-up
                    let marker = L.marker([stadium[1].latitude, stadium[1].longitude],
                        {
                            popup: myMarker,
                        }).addTo(map);
                    marker.bindPopup("<p>"+stadium[1].name+"</p>",{
                        closeButton:false,
                        closeOnClick: false,
                        closeOnEscapeKey:false,
                });
                });
        } else {
            console.log(xmlhttp.statusText);
        }
    }
};
//API créée
xmlhttp.open("GET", "https://127.0.0.1:8000/api/stadiums/list");
xmlhttp.send(null);
