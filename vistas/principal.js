window.onload = function(){

function registro(){
	var nombre=document.getElementById("validationDefault01").value;
    var apellido=document.getElementById("validationDefault02").value;
    var correo=document.getElementById("validationDefaultUsername").value;
    var pass=document.getElementById("validationpass").value;
    var nfoto=document.getElementById("fuser");
    var iuser=document.getElementById("imuser")

    console.log(nombre);
    console.log(apellido);
	console.log(correo);
    console.log(pass);
    console.log(nfoto)

    if(nombre!=0 && apellido != 0 && correo!=0 && pass != 0 ){
    alert("Registro satisfactorio "+"Bienvenido "+nombre+" "+apellido);

    document.getElementById("nusuario").innerHTML=nombre+ " "+ apellido;
    iuser.src="./imagenes/usr.png"
    }
    else{
    	alert("Los datos son incorrectos intentalo de nuevo");

    }
    return
}

function limpiar(){
	var foto=document.getElementById("imuser")
	document.getElementById("nusuario").innerHTML="Mi Cuenta";
	foto.src="./imagenes/icono1.png";
	return	
}


function Breg(){
	
}

function Blogin(){
	
	alert("has hecho click");
}
}	