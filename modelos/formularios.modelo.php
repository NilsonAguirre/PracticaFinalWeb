<?php 

require_once "conexion.php";

class ModeloFormularios{
	/*=============================================
	=                       Registro            =
	=============================================*/
	
	static public function mdlRegistro($tabla,$datos,$valor){
			$stmt = conexion::conectar();
			if($valor==null){

				$reg = mysqli_query($stmt,("INSERT INTO  $tabla(nombre, apellido, email, password, departamento,foto) 
				VALUES ('$datos[nombre]', '$datos[apellido]', '$datos[email]', '$datos[password]', '$datos[departamento]', '$datos[foto]')"));

					if (isset($reg)){
						return "ok";
					}
					else{

						print_r(conexion::conectar()->errorInfo());
					}
			
					mysql_close($stmt);
			}else{
				$consul=mysqli_query($stmt,"SELECT * FROM $tabla WHERE `$datos` = '$valor'");
				$encontrado=mysqli_fetch_array($consul);
				
				return $encontrado;
				mysql_close($stmt);	
			 }
			}		
	static public function mdlBusqueda(){
			$stmt = conexion::conectar();
			return $stmt;
			mysql_close($stmt);
			
	}
	static public function mdlExcel($readcsv,$tabla){
		$stmt = conexion::conectar();

		//recorremos filas del csv
		foreach ($readcsv as $itemCsv) {

		//recorremos celdas del csv
		for ($i=0; $i<4;$i++){	
			$marca=$itemCsv[0];
			$nombre=$itemCsv[1];
			$precio=$itemCsv[2];
			$foto=$itemCsv[3];
		}
		
		mysqli_query($stmt,("INSERT INTO $tabla(marca,nombre,precio,foto) VALUES ('$marca', '$nombre', '$precio', '$foto')"));

	}

		

	if (isset($readcsv) && ($readcsv != null) ){
			return "ok";
		}
		else{

			print_r(conexion::conectar()->errorInfo());
		}
		mysql_close($stmt);
			
	}
}


 ?>