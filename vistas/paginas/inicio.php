 <script type="text/javascript" src="vistas/practica.js"></script>
<div class="container-fluid d-none d-md-block">
    <nav class="row navbar navbar-expand-md navbar-dark bg-success">
      <div class="col-md-12 collapse navbar-collapse" id="navbarSupportedContent">
        <a href="#" class="navbar-brand tpag btn btn-success ">
          <img src="vistas/iconos/car1.png" width="50" height="50" class="d-inline-block align-top" alt="">
        CarsColudea</a>
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#menu"><span class="navbar-toggler-icon"></span></button>

        <form class="form-row form-inline col-lg-6 col-xl-7 ">
          <input class=" form-control-lg text-center border-0 col-lg-11"  placeholder="¿Que estas buscando?" width="80">
          <button class="btn btn btn-outline-dark border-0 col-lg-1" type="submit"><img src="vistas/iconos/busqueda.png" width="30" height="30" class="d-inline-block align-top"></button>
        </form>
        
        <ul class=" navbar-nav col-lg-4 col-xl-3  ">
          <li class="nav-item active ml-auto">
            <a class="nav-link text-center " href="">
              <button type="button"  class="btn btn-success " id="ejemplo">
                Limpiar sesion
              </button></a>
              <li class="nav-item  ml-auto ">
				   <div class="btn-group" role="group">
				   	<a class="nav-link text-center " href="" > <img src="vistas/iconos/user.png" width="50" height="50" id="imuser" class="img-fluid rounded-circle"></a>
				   <button type="button" class="btn btn-success dropdown-toggle " href="index.php?pagina=ingreso" id="nusuario" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Cuenta</button>
				    <div class="dropdown-menu" aria-labelledby="nusuario">
				      <a class="dropdown-item" id="boton1" href="index.php?pagina=ingreso">ingresar</a>
				      <a class="dropdown-item" id="boton2" href="index.php?pagina=registro">registrarse</a>
				      <a class="dropdown-item d-none" id="boton3" href="index.php?pagina=perfil">mi perfil</a>
              <a class="dropdown-item d-none" id="boton4" href="index.php?pagina=salir">cerrar sesion</a>
				  
				    </div>
				  </div>
			
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div>
<nav>
<?php 
  if(isset($_SESSION["miperfil"])){
          if($_SESSION["miperfil"]=="ok"){
              if(isset($_COOKIE['usernombre'])){
              echo '<script>
                      document.getElementById("nusuario").innerHTML= "'.$_COOKIE['usernombre'].'"+" "+ "'.$_COOKIE['userapellido'].'";
                      var foto="'.$_COOKIE['userfoto'].'";
                      document.getElementById("imuser").src="vistas/imagenes/"+foto;
                      document.getElementById("boton1").classList.add("d-none");
                      document.getElementById("boton2").classList.add("d-none");
                      document.getElementById("boton3").classList.remove("d-none");
                      document.getElementById("boton4").classList.remove("d-none");
                      document.getElementById("boton3").classList.add("d-block");
                      document.getElementById("boton4").classList.add("d-block");
       
              </script>';       
              }             
          }           
  }
?>   
        
</nav>
            
        </div>
	