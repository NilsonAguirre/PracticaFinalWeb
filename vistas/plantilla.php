<?php 
 session_start();
 ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Club_Cars</title>
    <!-- Bootstrap CSS -->

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/estilomenu.css">
    <link rel="stylesheet" href="css/estilo_inicio.css">
    <link rel="stylesheet" href="css/estiloplantilla.css">
    <link rel="stylesheet" href="css/estilo_categorias.css">

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <link href='https://cdn.jsdelivr.net/npm/boxicons@2.0.5/css/boxicons.min.css' rel='stylesheet'>
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,700&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;0,800;1,500&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,700;0,800;1,500&family=Roboto+Condensed:wght@300;400;700&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/342fa4d5a9.js" crossorigin="anonymous"></script>
</head>

<body >
<header id="myheader">
    <div class="head-ing container-fluid">
       <a href="index.php?pagina=inicio"><img src="imagenes/icono_car.png" class="icono_carro">
        CarsClub</a>
    </div>
</header>
<div class="acceso">
<a class="nav-link float-left " > <img src="imagenes/user.png" width="50" height="50" id="imuser" class="img-fluid rounded-circle "></a>
<div class="btn-group" role="group">
<button type="button" class="btn btn-transparent text-white rounded dropdown-toggle" href="index.php?pagina=ingreso" id="nusuario" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Mi Cuenta</button>
<div class="dropdown-menu " aria-labelledby="nusuario">
    <a class="dropdown-item " id="boton1" href="index.php?pagina=ingreso">ingresar</a>
    <a class="dropdown-item " id="boton2" href="index.php?pagina=registro">registrarse</a>
    <a class="dropdown-item  d-none" id="boton3" href="index.php?pagina=perfil">mi perfil</a>
    <a class="dropdown-item  d-none" id="boton4" href="index.php?pagina=salir">cerrar sesion</a>

</div>

</div>

</div>

<?php 
//ubicacion csv

define('CSV', '100Recordsm.csv');
//leer csv
$readCsv = array_map('str_getcsv', file(CSV));
$TablaExcel = new ControladorFormularios();
$TablaExcel->ctrExcel($readCsv);


if (isset($_GET['pagina'])) {
  
  if($_GET["pagina"] == "perfil"){
    
    if(isset($_SESSION["miperfil"])){
      if($_SESSION["miperfil"]=="ok"){
        if(!isset($_COOKIE['usernombre'])){
          echo '<script>
          if( window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
          }</script>';
          include "paginas/inicio.php";          
        }else{
          echo '<script> document.getElementById("myheader").style.display="block";</script>';
          include "paginas/perfil.php";
 
        }      
      }else{
        include "paginas/inicio.php";
      }
      
    }else{
      include "paginas/inicio.php";
    }
    
  }
  
  else if($_GET["pagina"] == "ingreso" ||
  $_GET["pagina"] == "registro" ||
  $_GET["pagina"] == "inicio" ||
  $_GET["pagina"] == "suv" ||
  $_GET["pagina"] == "salir"){
    if($_GET["pagina"] != "inicio"){
      echo '<script> document.getElementById("myheader").style.display="block";</script>';
    }
    $ubi=$_GET["pagina"];
    include "paginas/".$_GET["pagina"].".php";
  }
}
else{
  include "paginas/inicio.php";
}

?>    

<?php 
  include "paginas/menu_navegacion.php";
  if(isset($_GET["pagina"]) && ($_GET["pagina"] != "ingreso") && ($_GET["pagina"] != "registro") && ($_GET["pagina"] != "perfil")){
    echo '<script> document.getElementById("'.$_GET["pagina"].'").classList.toggle("active");</script>';
    echo '<script> document.getElementById("inicio").classList.toggle("active");</script>';
    echo '<script> 
    if("'.$_GET["pagina"].'"=="suv"){
      document.getElementById("categorias").classList.toggle("active");
    }
    </script>';
  }
  ?>


<script src="js/menu.js"></script>
<?php
      /*----------  cambiar los datos y botones cuando ingresa  ----------*/
      
      
    if(isset($_SESSION["miperfil"])){
      
      if($_SESSION["miperfil"]=="ok"){
        if(isset($_COOKIE['usernombre'])){
          echo ' <script > 
          document.getElementById("nusuario").innerHTML= "'.$_COOKIE['usernombre'].'"+" "+ "'.$_COOKIE['userapellido'].'"; 
         document.getElementById("boton1").classList.add("d-none");
         document.getElementById("boton2").classList.add("d-none");
         document.getElementById("boton3").classList.remove("d-none");
         document.getElementById("boton4").classList.remove("d-none");
         document.getElementById("boton3").classList.add("d-block");
         document.getElementById("boton4").classList.add("d-block");     
         </script>';  
         if(isset($_COOKIE['userfoto']) && ($_COOKIE['userfoto'] != NULL)){
          echo ' <script > 
          var foto="'.$_COOKIE['userfoto'].'";
          document.getElementById("imuser").src="imagenes/"+foto;
         </script>';  
         
        }
      }
        else{
          echo '<script>
          if( window.history.replaceState){
            window.history.replaceState(null,null,window.location.href);
          }</script>';
        }             
      }           
    }
    ?>  
    <footer id="contacto">
        <div class="contenedor footer-content">
            <div class="contact-us">
                <h2 class="brand">ClubCars</h2>
                <p>nilson.aguirre@udea.edu.co</p>
                <p>sebastian.saldarriagaa@udea.edu.co</p>

            </div>
            <div class="social-media">
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-facebook'></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-twitter'></i>
                </a>
                <a href="./" class="social-media-icon">
                    <i class='bx bxl-instagram'></i>
                </a>
            </div>
        </div>
        <div class="line"></div>
    </footer>
</body>

</html>