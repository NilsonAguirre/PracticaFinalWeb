<?php 

require_once "conexion.php";

class ModeloFormularios{
	/*=============================================
	=                       Registro            =
	=============================================*/
	
	static public function mdlRegistro($tabla,$datos){
			$stmt = conexion::conectar();

			mysqli_query($stmt,("INSERT INTO $tabla(nombre, apellido, email, password, ciudad, departamento,foto) VALUES ('$datos[nombre]', '$datos[apellido]', '$datos[email]', '$datos[password]', '$datos[ciudad]', '$datos[departamento]', '$datos[foto]')"));

			if (isset($stmt) ){
				return "ok";
			}
			else{

				print_r(conexion::conectar()->errorInfo());
			}
	}
}


 ?>