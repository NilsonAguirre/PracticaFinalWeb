<?php
class ControladorFormularios{
	/*----------  registro  ----------*/
	public function ctrRegistro(){
		if (isset($_POST["registroNombre"])){
			$tabla = "bdusuarios";
			$datos = array('nombre' => $_POST["registroNombre"], 'apellido' => $_POST["registroApellido"], 'email' => $_POST["registroEmail"], 'password' => $_POST["registroPassword"], 'ciudad' => $_POST["registroCiudad"], 'departamento' => $_POST["registroDepartamento"], 'foto' => $_FILES["registroFoto"]['name']);
			$nombre_imagen=$_FILES['registroFoto']['name'];
			$tipo_imagen=$_FILES['registroFoto']['type'];
			$tamanho_imagen=$_FILES['registroFoto']['size'];
			$carpeta=$_SERVER['DOCUMENT_ROOT'].'/proyectos/PracticaFinalWeb/vistas/imagenes/';
			move_uploaded_file($_FILES['registroFoto']['tmp_name'],$carpeta.$nombre_imagen);
			$respuesta = ModeloFormularios::mdlRegistro($tabla,$datos,null);
			if($respuesta == "ok"){
				echo '<script>
				if( window.history.replaceState){
					window.history.replaceState(null,null,window.location.href);
				}
				window.location="index.php?pagina=inicio"
				alert("El usuario ha sido registrado Exitosamente!");
				</script>';
			}
		}
	}
	/*----------  ingreso  ----------*/
	public function ctrIngreso(){
		if (isset($_POST["ingresoEmail"])){
			$tabla = "bdusuarios";
			$datos ="email";
			$valor = $_POST["ingresoEmail"];
			$psw =$_POST["ingresoPass"];
			$respuesta = ModeloFormularios::mdlRegistro($tabla,$datos,$valor);
			if(!isset($respuesta)){
				echo '<script>
				if( window.history.replaceState){
					window.history.replaceState(null,null,window.location.href);
				}</script>';
				echo '<div class="alert alert-danger text-center">El correo y/o la contraseña son incorrectos</div>';
			}	
			else{
				if(($respuesta['password']==$psw)){
					echo '<script>
					if( window.history.replaceState){
						window.history.replaceState(null,null,window.location.href);
					}
					window.location="index.php?pagina=inicio";
					alert("El usuario ha sido registrado Exitosamente!");
					</script>';
				}else{
					echo '<script>
					if( window.history.replaceState){
						window.history.replaceState(null,null,window.location.href);
					}</script>';
					echo '<div class="alert alert-danger text-center">El correo y/o la contraseña son incorrectos</div>';
				}
			}
		}	
	}
}
?>