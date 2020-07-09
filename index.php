<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.6.0/dist/leaflet.css"
   integrity="sha512-xwE/Az9zrjBIphAcBb3F6JVqxf46+CDLwfLMHloNu6KEQCAWi6HcDUbeOfBIptF7tcCzusKFjFw2yuvEpDL9wQ=="
   crossorigin=""/>

   <style>

      #mapid { height: 700px; }
   </style>
</head>
<body>
    
    <div id="mapid"></div>
    <script src="leaflet.js"></script>

    <script>

        var mymap = L.map('mapid').setView([-3.790176, 114.775731], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap </a>'
        }).addTo(mymap);

        var wifiIcon = L.icon({
            iconUrl: 'wifi.png',
          

            iconSize:     [40, 50], // size of the icon
            iconAnchor:   [22, 94], // point of the icon which will correspond to marker's location
            shadowAnchor: [4, 62],  // the same for the shadow
            popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
        });

        L.marker([-3.801557, 114.788902], {icon: wifiIcon}).addTo(mymap).bindPopup("<b>Ruang Terbuka Hijau </b><br>Jl. Kolonel Soepirman");
        L.marker([-3.799773, 114.780411], {icon: wifiIcon}).addTo(mymap).bindPopup("<b>Orchid Park</b><br>Jl. Haji Boejasin.");
        L.marker([-3.799292, 114.783331], {icon: wifiIcon}).addTo(mymap).bindPopup("<b>Depan Diskominfo</b><br>Jl. A. Syairani");
        L.marker([-3.799292, 114.783331], {icon: wifiIcon}).addTo(mymap).bindPopup("<b>Depan Kantor Bupati Tanah Laut</b><br>Jl. A Syarani");
        L.marker([-3.799292, 114.783331], {icon: wifiIcon}).addTo(mymap).bindPopup("<b>Depan Kantor Bupati Tanah Laut</b><br>Jl. A Syarani");
        L.marker([-3.799292, 114.783331], {icon: wifiIcon}).addTo(mymap).bindPopup("<b>Depan Kantor Bupati Tanah Laut</b><br>Jl. A Syarani");
    </script>
</body>
</html>