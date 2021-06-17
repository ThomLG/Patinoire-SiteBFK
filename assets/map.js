//  Initialisation de l'objet qui aura l'id "map" dans la div créée avec un centrage et un zoom par défaut.
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
            // les données sont traitées et le fichier json est converti en objet JavaScript
            let data = JSON.parse(xmlhttp.responseText);
            Object.entries(data).forEach(stadium => {
                    //personnalisation des marqueurs (image, taille, etc.)
                    let myMarker = L.popup({
                    });
                    //affichage des pop-up
                    let marker = L.marker([stadium[1].latitude, stadium[1].longitude],
                        {
                            popup: myMarker,
                            className: "leaflet-marker-icon"
                        }).addTo(map);
                    marker.bindPopup("<p>"+stadium[1].name+"</p>",{
                        closeButton:false,
                        closeOnClick: false,
                        closeOnEscapeKey:false,
                        className:"leaflet-popup"
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
