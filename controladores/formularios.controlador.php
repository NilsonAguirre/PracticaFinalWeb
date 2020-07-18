<?php

class ControladorFormularios{
	/*----------  registro  ----------*/
	
	public function ctrRegistro(){
		if (isset($_POST["registroNombre"])){
			$tabla = "bdusuarios";
			$datos = array('nombre' => $_POST["registroNombre"], 'apellido' => $_POST["registroApellido"], 'email' => $_POST["registroEmail"], 'password' => $_POST["registroPassword"], 'foto' => $_FILES["registroFoto"]['name']);
			$nombre_imagen=$_FILES['registroFoto']['name'];
			$tipo_imagen=$_FILES['registroFoto']['type'];
			$tamanho_imagen=$_FILES['registroFoto']['size'];
			$carpeta=$_SERVER['DOCUMENT_ROOT'].'/proyectos/Club_Cars/imagenes/';
			move_uploaded_file($_FILES['registroFoto']['tmp_name'],$carpeta.$nombre_imagen);

			$respuesta = ModeloFormularios::mdlRegistro($tabla,$datos,null);

			if($respuesta == "ok"){
				  echo '<script>
				  if( window.history.replaceState){
				    window.history.replaceState(null,null,window.location.href);
				  }
				  window.location="index.php?pagina=ingreso"
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
			
			if($respuesta=="no resultado"){
				/*=============================================
				 limpiar las variables guardadas en el navegador
				 la memoria cache y variables post para que se 
				 quite el letrero de ingreso exitoso.
				=============================================*/

				 echo '<script>
				 if( window.history.replaceState){
				    window.history.replaceState(null,null,window.location.href);
				 }</script>';
				 echo '<div class="alert alert-danger text-center">El correo y/o la contraseña son incorrectos</div>';

			}	
			else{
				
				 if(($respuesta['password']==$psw)){

					setcookie("useremail",$respuesta['email'],time()+300*300,'/');
					setcookie("usernombre",$respuesta['nombre'],time()+300*300,'/');
				 	setcookie("userapellido",$respuesta['apellido'],time()+300*300,'/');
				 	setcookie("userfoto",$respuesta['foto'],time()+300*300,'/');
				 	$_SESSION["miperfil"] = "ok";
					echo '<script>
					  if( window.history.replaceState){
					    window.history.replaceState(null,null,window.location.href);
					  }

					  window.location="index.php?pagina=inicio"
					  </script>';
					  
				}else{
					return "no valido";
				}
			}

			}
	}
	public function ctrPersonal(){
		$tabla = "bdusuarios";
		$datos = "email";
		$valor =$_COOKIE['useremail'];
		$respuestaP = ModeloFormularios::mdlPersonal($tabla,$datos,$valor);
		if($respuestaP=="no resultado"){
			/*=============================================
			 limpiar las variables guardadas en el navegador
			 la memoria cache y variables post para que se 
			 quite el letrero de ingreso exitoso.
			=============================================*/

			 echo '<script>
			 if( window.history.replaceState){
				window.history.replaceState(null,null,window.location.href);
			 }</script>';
		}	
		else{
			return $respuestaP;
		}
	}
	public function ctractual(){
		$tabla = "bdusuarios";
		if(isset($_POST['cambio1'])){
			$datos = "password";
			$valor =$_POST['cambio1'];
		}
		
		$respuestaA = ModeloFormularios::mdlactual($tabla,$datos,$valor);
		if($respuestaA=="no resultado"){
			 return $respuestaA;
		}	
		else{
			return "ok";
		}
	}



	public function ctrBusqueda(){
			$link = ModeloFormularios::mdlBusqueda();
			return $link;
		}

	
	public function ctrExcel($readcsv){
		$tabla = "pruebacarros";
		$link = ModeloFormularios::mdlExcel($readcsv,$tabla);
	
}
}	

?>