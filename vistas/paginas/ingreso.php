<?php 
$ingreso = ControladorFormularios::ctrIngreso();
?>
<div class="container bodyingreso ">
    <nav class="row navbar navbar-expand-lg navbar-dark bg-success">
      <div class="col-lg-12 collapse navbar-collapse" id="navbarSupportedContent">
        <a href="index.php?pagina=inicio" class="navbar-brand tpag btn btn-success ">
          <img src="vistas/iconos/car1.png" width="50" height="50" class="d-inline-block align-top" alt="">
        CarsColudea</a>
       </div>   
   </nav>

<div class=" d-flex justify-content-center text-center mt-5">
  
  <form class="p-5 bg-light" method="post">
  <div class="form-group">
    <label for="InputEmail">Email address</label>
    <div class="input-group">
    <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>

    <input type="email" class="form-control" name="ingresoEmail" id="InputEmail" aria-describedby="emailHelp">
    </div>
  </div>

  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <div class="input-group">
      <div class="input-group-prepend">
            <span class="input-group-text"><i class="fas fa-lock"></i></span>
      </div>
    <input type="password" class="form-control" name="ingresoPass" id="exampleInputPassword1">
  </div>
  </div>
  <div class="">
       <input type="submit" name="Guardar" id="btningresar" value="Login" class="btn btn-primary">        
  </div>
  <div>
  <small id="" class="form-text text-muted">Todavia no tienes una cuenta <a href="index.php?pagina=registro">registrate</a></small>
  <small id="" class="form-text text-muted">Quieres volver al <a href="index.php?pagina=inicio">inicio</a></small>

  </div>
</form>
</div>
</div>
