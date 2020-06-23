<?php 
require_once "conexion.php";
class ModeloFormularios{
	static public function mdlRegistro($tabla,$datos,$valor){
		$stmt = conexion::conectar();
		if($valor===null){
/*=============================================
=              Registro                     =
=============================================*/
mysqli_query($stmt,("INSERT INTO $tabla(nombre, apellido, email, password, ciudad, departamento,foto) VALUES ('$datos[nombre]', '$datos[apellido]', '$datos[email]', '$datos[password]', '$datos[ciudad]', '$datos[departamento]', '$datos[foto]')"));
if (isset($stmt) ){
	return "ok";
}
else{
	print_r(conexion::conectar()->errorInfo());
}
mysql_close($stmt);
}else{
/*=============================================
=              Ingreso                     =
=============================================*/
$consul=mysqli_query($stmt,"SELECT * FROM $tabla WHERE `$datos` = '$valor'");
$encontrado=mysqli_fetch_array($consul);
return $encontrado;
mysql_close($stmt);	
} 
}
}
?>