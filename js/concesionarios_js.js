window.onload = function(position){
	if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(visualizarPosicion,error);
	}
}

var mapa;
var labels = ["Clínica Antioquia","Hospital San Rafael","Hospital Venancio Díaz Díaz","Hospital del sur","Hospital Manuel Uribe Ángel"];
var locations = [
    {lat: 6.169748, lng: -75.612753},
    {lat: 6.171813, lng: -75.613305},
    {lat: 6.148300, lng: -75.621641},
    {lat: 6.164820, lng: -75.622179},
    {lat: 6.166955, lng: -75.580049}
];
//var icons = ["h1.png","h2.png","h3.png","h4.png","h5.png"];
var descriptions = ["(4)3222211","(4)4482224","(4)2889701","(4)4445755","(4)3394800"];
var pages = ["http://www.clinicantioquia.com.co/","https://hsanrafael.gov.co/","http://www.esevenanciodiaz-sabaneta-antioquia.gov.co/","https://www.hospitaldelsur.gov.co/","https://www.hospitalmua.gov.co/"];
var flag = 0;

function visualizarPosicion(position){
	console.log(position.coords);
	var pos = document.getElementById("ubicacion");
    pos.innerHTML = position.coords.latitude + ", "+position.coords.longitude;
    var coordusr = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

    if (flag==0){
        var coord = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);
    }
    else{
        var coord = new google.maps.LatLng(lati,lngi);
    }
	console.log(coord);

	var opMapa = {
		center: coord,
		zoom: 20,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		zoomControl: true,
		fullscreenControl: false,
		streetViewControl: false,
		scaleControl: true
	};
	mapa = new google.maps.Map(document.getElementById("mapa"),opMapa);

	var opMarcaUser = {
		position: coordusr,
		title: "Su ubicación",
		label: "",
		icon: "../imagenes/invalid.png",
		animation: google.maps.Animation.BOUNCE,
		map: mapa
	};
    var marca = new google.maps.Marker(opMarcaUser);
    
    for (var i = 0; i <= labels.length; i++) {
        marcas(locations, icons, labels, i);

    }
    
    var locationClinicaAntioquia = [
        {lat: 6.169535, lng: -76.612794},
        {lat: 6.169986, lng: -75.613007},
        {lat: 6.169999, lng: -75.612707},
        {lat: 6.169631, lng: -75.612568}
    ];

    var locationSanRafael = [
        {lat: 6.171810, lng: -75.613786},
        {lat: 6.171409, lng: -75.613611},
        {lat: 6.171705, lng: -75.612898},
        {lat: 6.172153, lng: -75.613032}
    ];

    var locationVenancio = [
        {lat: 6.148477, lng: -75.621692},
        {lat: 6.148242, lng: -75.621453},
        {lat: 6.147730, lng: -75.621871},
        {lat: 6.147935, lng: -75.622150}
    ];

    var locationSur = [
        {lat: 6.164659, lng: -75.622509},
        {lat: 6.165056, lng: -75.622375},
        {lat: 6.164923, lng: -75.621916},
        {lat: 6.164519, lng: -75.622056}
    ];

    var locationManuelUribe = [
        {lat: 6.166507, lng: -75.580248},
        {lat: 6.167606, lng: -75.580366},
        {lat: 6.167462, lng: -75.579496},
        {lat: 6.166573, lng: -75.579321}
    ];

    var poligonos =[
        locationClinicaAntioquia, locationSanRafael, locationVenancio, locationSur, locationManuelUribe 
    ];

    var opPoligono = {
		paths: poligonos,
		strokeColor: '#FF0000',
		strokeWeight: 3,
		fillColor: '#FF0000',
		fillOpacity: 0.2,
		map: mapa
	};
    var PoligonosHospitales = new google.maps.Polygon(opPoligono);

    function marcas(locations,icons,labels,i){
		var m = {
			position: locations[i],
            label: "",
            //icon: icons[i],
            map: mapa,
            animation: google.maps.Animation.DROP
        };
        
        var j = i + 1;
        //var contenido = 
        //'<div>' + '<img src="h' + j + '.png" height="150" width="150" align=center border="3">' + '</div>' +
        //'<h3>' + labels[i] + '<h3>' +
        //'<p>' + descriptions[i] + '</p>';

        info = new google.maps.InfoWindow;
        var marcador = new google.maps.Marker(m);
        marcador.info = new google.maps.InfoWindow({
            content: contenido
        });
        google.maps.event.addListener(marcador, 'mouseover', function() {
            marcador.info.open(mapa, marcador);
        });
        google.maps.event.addListener(marcador, 'mouseout', function() {
            marcador.info.close(mapa, marcador);
        });

        google.maps.event.addListener(marcador, 'dblclick', function() {

            window.location.href = pages[i];
        });

    }

}

function seleccionar() {
    var seleccion = parseInt(document.H.hospitalesSur[document.H.hospitalesSur.selectedIndex].value);
    
    if (seleccion == 0){
        flag = 0;
        if (navigator.geolocation){
            navigator.geolocation.getCurrentPosition(visualizarPosicion, error); 
        }
        else {
            alert("No se pudo obtener la ubicación");   
        }
    }

    else{
        flag = 1;
        lati = locations[seleccion-1].lat;
        lngi = locations[seleccion-1].lng;

        if (navigator.geolocation){
            navigator.geolocation.getCurrentPosition(visualizarPosicion, error); 
        }
        else {
            alert("No se pudo obtener la ubicación");   
        }
    }
}

function error(){
	alert("No se pudo obtener la posición.")
}