<?php

class ControladorFormularios{
	
	public function ctrRegistro(){
		if (isset($_POST["registroNombre"])){
			$tabla = "bdusuarios";
			$datos = array('nombre' => $_POST["registroNombre"], 'apellido' => $_POST["registroApellido"], 'email' => $_POST["registroEmail"], 'password' => $_POST["registroPassword"], 'ciudad' => $_POST["registroCiudad"], 'departamento' => $_POST["registroDepartamento"], 'foto' => $_FILES["registroFoto"]['name']);

			$nombre_imagen=$_FILES['registroFoto']['name'];
			$tipo_imagen=$_FILES['registroFoto']['type'];
			$tamanho_imagen=$_FILES['registroFoto']['size'];
			$carpeta=$_SERVER['DOCUMENT_ROOT'].'/proyectos/PracticaFinal/vistas/imagenes/';
			move_uploaded_file($_FILES['registroFoto']['tmp_name'],$carpeta.$nombre_imagen);


			$respuesta = ModeloFormularios::mdlRegistro($tabla,$datos);
			return $respuesta;
		}
	}
}
?>