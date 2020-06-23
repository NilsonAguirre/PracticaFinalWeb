<?php 

class conexion{
	
	static public function conectar(){
		$link = mysqli_connect("localhost","root","","bdproyecto");

		$link = new mysqli("localhost", "root","","bdproyecto");
		
		return $link;
	}
	}

 ?>
