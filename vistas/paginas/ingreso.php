<?php 
$ingreso = ControladorFormularios::ctrIngreso();
?>
<div class="container-fluid ing text-center">
<img src="imagenes/ilustracion_ing.svg" class="ilustracion_ing">  
<form class="bg-light " method="post">
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
