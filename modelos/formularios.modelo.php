<?php 

require_once "conexion.php";

class ModeloFormularios{
	/*=============================================
	=                       Registro            =
	=============================================*/
	
	static public function mdlRegistro($tabla,$datos,$valor){
			$stmt = conexion::conectar();
			
			if($valor==null){

			mysqli_query($stmt,("INSERT INTO $tabla(nombre, apellido, email, password, ciudad, departamento,foto) VALUES ('$datos[nombre]', '$datos[apellido]', '$datos[email]', '$datos[password]', '$datos[ciudad]', '$datos[departamento]', '$datos[foto]')"));

					if (isset($stmt) ){
						return "ok";
					}
					else{

						print_r(conexion::conectar()->errorInfo());
					}
			}
			else{

				$acceso = mysqli_query($stmt,("SELECT * FROM $tabla WHERE $datos =$valor"));
				$okay = mysqli_fetch_array($acceso);
						
					if(isset($stmt)){
						return $okay;
					}
					else{
						print_r(conexion::conectar()->errorInfo());	
					} 
			
			}
	}
}


 ?>