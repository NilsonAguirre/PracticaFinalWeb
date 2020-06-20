<!DOCTYPE html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CarsCol</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="">
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script type="text/javascript" src="principal.js"></script>
    <!---ultima version de fontawesome -->
    <script src="https://kit.fontawesome.com/342fa4d5a9.js" crossorigin="anonymous"></script>
     
</head>

<body class="bodypr" >
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
                   $_GET["pagina"] == "registro" ||
                   $_GET["pagina"] == "inicio"){

                    include "paginas/".$_GET["pagina"].".php";
                    
                    }
            }else{
                    include "paginas/inicio.php";
            }

          ?>   
            <nav>
                
            


            </nav>
            
        </div>

</body>
</html>   