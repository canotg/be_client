<!DOCTYPE html>
<html>
<head>
	
	<title>Layers Control Tutorial - Leaflet</title>

	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="shortcut icon" type="image/x-icon" href="docs/images/favicon.ico" />

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
    <script src="https://github.com/shramov/leaflet-plugins/blob/master/layer/Marker.Rotate.js"></script>
    <script src="https://d3js.org/d3.v4.min.js"></script>


	<style>
		html, body {
			height: 100%;
			margin: 0;
		}
		#map {
			position : relative;
            width : 100.0%;
            height: 100.0%;
            left: 0.0%;
            top: 0.0%;
         	}
	</style>

	
</head>
<body>

<div id='map'></div>

<script>
	
	var planeIcon = L.icon({
    iconUrl: 'plane_0.svg',
    iconSize:     [35, 35], // size of the icon
    iconAnchor:   [27, 27], // point of the icon which will correspond to marker's location
    popupAnchor:  [-3, -76] // point from which the popup should open relative to the iconAnchor
});
	
	var avions = L.layerGroup();

	L.marker([46.641957,0.361985], {icon: planeIcon}).bindPopup('Avion 01').addTo(avions),
	L.marker([46.652957,0.361985], {icon: planeIcon}).bindPopup('Avion 02').addTo(avions),
	L.marker([46.663957,0.361985], {icon: planeIcon}).bindPopup('Avion 03').addTo(avions),
	L.marker([46.674957,0.361985], {icon: planeIcon}).bindPopup('Avion 04').addTo(avions);

	var mbAttr = 'Map data &copy; <a href="http://openstreetmap.org">OpenStreetMap</a> contributors, ' +
			'<a href="http://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		mbUrl = 'https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw';

	var	simple  = L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {id: 'mapbox.streets',   attribution: mbAttr});

	var map = L.map('map', {
		center: [46.660957,0.361985],
		zoom: 13,
		layers: [simple, avions]
	});

// Cercles de réceptivité de l'antenne

	var circle_01 = L.circle(
    	[46.660957,0.361985],
        {
		"bubblingMouseEvents": true, 
		"color": "#3186cc", 
		"dashArray": null, 
		"dashOffset": null, 
		"fill": true, 
		"fillColor": "#3186cc", 
		"fillOpacity": 0.2, 
		"fillRule": "evenodd", 
		"lineCap": "round", 
		"lineJoin": "round", 
		"opacity": 1.0, 
		"radius": 5000, 
		"stroke": true, 
		"weight": 3
		}
    ).addTo(map);
                
	var circle_02 = L.circle(
    	[46.660957,0.361985],
        {
		"bubblingMouseEvents": true, 
		"color": "#cc3193", 
		"dashArray": null, 
		"dashOffset": null, 
		"fill": true, 
		"fillColor": "#3186cc", 
		"fillOpacity": 0.2, 
		"fillRule": "evenodd", 
		"lineCap": "round", 
		"lineJoin": "round", 
		"opacity": 1.0, 
		"radius": 7500, 
		"stroke": true, 
		"weight": 3
		}
    ).addTo(map);

    var circle_03 = L.circle(
        [46.660957,0.361985],
        {
		"bubblingMouseEvents": true, 
		"color": "#cc3131", 
		"dashArray": null, 
		"dashOffset": null, 
		"fill": true, 
		"fillColor": "#3186cc", 
		"fillOpacity": 0.2, 
		"fillRule": "evenodd", 
		"lineCap": "round", 
		"lineJoin": "round", 
		"opacity": 1.0, 
		"radius": 10000, 
		"stroke": true, 
		"weight": 3
		}
	).addTo(map);


</script>



</body>
</html>

