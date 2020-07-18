window.onload = function(position){
	if(navigator.geolocation){
		navigator.geolocation.getCurrentPosition(visualizarPosicion,error);
	}
}

var mapa;
var labels = ["Chevrolet ayurá motor","Centro comercial automotriz","Vehículos del camino Ford","Automontaña Mazda","Alemautos"];
var locations = [
    {lat: 6.187392, lng: -75.585518},
    {lat: 6.223122, lng: -75.570429},
    {lat: 6.231113, lng: -75.570023},
    {lat: 6.227433, lng: -75.569776},
    {lat: 6.214028, lng: -75.580552}
];
var icons = "imagenes/car.png";
var descriptions = ["(4)3321110","(4)2323798","(4)6050025","(4)2620200","(4)4442369"];
var pages = ["http://www.ayuramotor.com.co/views/home.php","https://movicentro.co/portal/","https://vehiculosdelcamino.com/ford/","https://www.automontana.com/","https://alemautos.com.co/"];
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
		icon: "imagenes/user2.png",
		animation: google.maps.Animation.BOUNCE,
		map: mapa
	};
    var marca = new google.maps.Marker(opMarcaUser);
    
    for (var i = 0; i <= labels.length; i++) {
        marcas(locations, icons, labels, i);

    }
    
    var locationayuramotor = [
        {lat: 6.187293, lng: -75.585758},
        {lat: 6.187157, lng: -75.585590},
        {lat: 6.187440, lng: -75.585308},
        {lat: 6.187523, lng: -75.585405}
    ];

    var locationccautomotriz = [
        {lat: 6.223178, lng: -75.570462},
        {lat: 6.223106, lng: -75.570491},
        {lat: 6.223079, lng: -75.570416},
        {lat: 6.223155, lng: -75.570357}
    ];

    var locationford = [
        {lat: 6.231150, lng: -75.569999},
        {lat: 6.231060, lng: -75.570002},
        {lat: 6.230944, lng: -75.570084},
        {lat: 6.231141, lng: -75.570151}
    ];

    var locationmazda = [
        {lat: 6.227417, lng: -75.569844},
        {lat: 6.227490, lng: -75.569813},
        {lat: 6.227459, lng: -75.569741},
        {lat: 6.227389, lng: -75.569765}
    ];

    var locationalemautos = [
        {lat: 6.214121, lng: -75.580329},
        {lat: 6.213610, lng: -75.580516},
        {lat: 6.213791, lng: -75.581114},
        {lat: 6.214324, lng: -75.580891}
    ];

    var poligonos =[
        locationayuramotor, locationccautomotriz, locationford, locationmazda, locationalemautos 
    ];

    var opPoligono = {
		paths: poligonos,
		strokeColor: '#FF0000',
		strokeWeight: 3,
		fillColor: '#FF0000',
		fillOpacity: 0.2,
		map: mapa
	};
    var Poligonos = new google.maps.Polygon(opPoligono);

    function marcas(locations,icons,labels,i){
		var m = {
			position: locations[i],
            label: "",
            icon: "imagenes/car.png",
            map: mapa,
            animation: google.maps.Animation.DROP
        };
        
        var j = i + 1;
        var contenido = 
        '<div>' + '<img src="imagenes/car.png" height="150" width="150" align=center border="3">' + '</div>' +
        '<h3>' + labels[i] + '<h3>' +
        '<p>' + descriptions[i] + '</p>';

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
    var seleccion = parseInt(document.H.concesionarios[document.H.concesionarios.selectedIndex].value);
    
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