<?php

require_once 'public/header.php';
?>
<!doctype html>
<html lang="en">
<head>
	<!-- Required meta tags -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.3.4/dist/leaflet.css"
   integrity="sha512-puBpdR0798OZvTTbP4A8Ix/l+A4dHDD0DGqYW6RQ+9jxkRFclaxxQb/SJAWZfWAkuyeQUytO7+7N4QKrDh+drA=="
   crossorigin=""/>
        
    <script src="https://unpkg.com/leaflet@1.3.4/dist/leaflet.js"
   integrity="sha512-nMMmRyTVoLYqjP9hrbed9S+FzjZHW5gY1TWCHA5ckwXZBadntCNs8kEqAWdrb9O7rxbCaA4lKTIWjDXZxflOcA=="
   crossorigin=""></script>
            
        <style>
            #mapid { height: 420px; }
        </style>
        <a href="index.php">Home Page</a>
        <a href="My_Profile.php">My profile</a>  
</head>
<body class="bg-info">
    <div class="container-fluid col-md-6 offset-md-3">
        <div class="card mt-3 col-md-6">
            
        
    <h1>My favourite place! </h1>
    <div id="mapid"></div>
    
   
            
            <script>
                var mymap = L.map('mapid').setView([36.161, -115.141], 13);
                
                L.marker([36.1092899, -115.1717385]).addTo(mymap)
                        .bindPopup("<b>Planet Hollywood!</b><br />My tournament win!").openPopup;
                L.marker([36.1472552, -115.155402]).addTo(mymap)
                        .bindPopup("<b>Stratosphere Tower!!</b><br />OMG, scary!").openPopup;
                L.circle ([36.0955, -115.176],{color: 'red', fillColor: '#f03', fillOpacity: 0.5, radius: 200}).addTo(mymap)
                        .bindPopup("<b>Luxor Hotel </b><br />Family holiday 2005").openPopup;
                L.polygon ([
                    [36.09972, -115.1780],
                    [36.0997, -115.174],
                    [36.0983, -115.174],
                    [36.09825, -115.1778]
                ]).addTo(mymap).bindPopup("<b>Excalibur Hotel </b><br /> Holiday with Chris 2006").openPopup;
                
                
               	L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1Ijoic3RldmVzZXJqZWFudCIsImEiOiJjanA2czl0NTUwdjl6M3FvMzJ2ajN2dHMwIn0.EEfhBeiLREXxzxbX6NIi5g', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);
                
            </script>
        </div>
    
        
    </div>
    
    
    
        
        
        
    

    
    
<!--</body>


<?php
require_once "public/includes/footer2.php"

?>
    
   