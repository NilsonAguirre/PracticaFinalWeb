  <div class="container-fluid d-none d-lg-block">
    <nav class="row navbar navbar-expand-lg navbar-dark bg-success">
      <div class="col-lg-12 collapse navbar-collapse" id="navbarSupportedContent">
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
              <button type="button" onclick=""  class="btn btn-success " id="limpiars">
                Limpiar sesion
              </button></a>
              <li class="nav-item  ml-auto ">
                <a class="nav-link text-center " href="index.php?pagina=ingreso"> <img src="vistas/iconos/user.png" width="50" height="50" id="imuser" class="img-fluid rounded-circle">
                  <!-- Button trigger modal -->
                  <button type="button" class="btn btn-success " href="index.php?pagina=ingreso" id="nusuario" data-toggle="modal" data-target="#staticBackdrop">
                    Mi Cuenta
                  </button></a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
        <div>
                 <?php 
            if (isset($_GET['pagina'])) {
                
                if($_GET["pagina"] == "ingreso" ||
                   $_GET["pagina"] == "registro"){

                    include "paginas/".$_GET["pagina"].".php";
                    
                    }
            }
            

          ?>   
            <nav>
                
            


            </nav>
            
        </div>
	