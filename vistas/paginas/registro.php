<div class="container ">
    <nav class="row navbar navbar-expand-lg navbar-dark bg-success">
      <div class="col-lg-12 collapse navbar-collapse" id="navbarSupportedContent">
        <a href="index.php?pagina=inicio" class="navbar-brand tpag btn btn-success ">
          <img src="vistas/iconos/car1.png" width="50" height="50" class="d-inline-block align-top" alt="">
        CarsColudea</a>
       </div>   
   </nav>
</div>

<div class="d-flex justify-content-center text-center mt-5">
  <form class="p-5 bg-light" method="post" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="validationDefault01">Nombre</label>
        <input type="text" class="form-control" id="validationDefault01" name="registroNombre" required >
      </div>
      <div class="mb-3">
        <label for="validationDefault02">Apellido</label>
        <input type="text" class="form-control" id="validationDefault02" name="registroApellido" required>
      </div>
    
      <div class=" mb-3">
        <label for="validationDefaultUsername">Correo electronico</label>
        <div class="input-group">
          <input type="email" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" placeholder="example@gmail.com" name="registroEmail" required>
        </div>
      </div>
      <div class=" mb-3">
        <label for="validationpass">Crea una contraseña</label>
        <input type="text" class="form-control" id="validationpass" name="registroPassword" required>
      </div>
    
      <div class=" mb-3">
        <label for="validationDefault03">Ciudad</label>
        <input type="text" class="form-control" id="validationDefault03" name="registroCiudad" required>
      </div>
      <div class=" mb-3">
        <label for="validationDefault04">Departamento</label>
        <select class="custom-select" id="validationDefault04" name="registroDepartamento" required>
          <option disabled selected>-Seleccione-</option> 
          <option value="antioquia">Antioquia</option>
          <option value="arauca">Arauca</option>
          <option value="atlantico">Atlantico</option>
          <option value="bogota">Bogota D.C</option>
          <option value="bolivar">Bolivar</option>
          <option value="boyaca">Boyaca</option>
          <option value="Caldas">Caldas</option>
          <option value="caqueta">caqueta</option>
          <option value="casanare">casanare</option>
          <option value="cauca">Cauca</option>
          <option value="cesar">Cesar</option>
          <option value="choco">Choco</option>
          <option value="cordoba">Cordoba</option>
          <option value="cundinamarca">Cundinamarca</option>
          <option value="guainia">Guainia</option>
          <option value="guaviare">Guaviare</option>
          <option value="huila">Huila</option>
          <option value="guajira">la Guajira</option>
          <option value="magdalena">Magdalena</option>
          <option value="meta">Meta</option>
          <option value="nariño">Nariño</option>
          <option value="n_santander">Norte de santander</option>
          <option value="quindio">Quindio</option>
        </select>
      </div>
    
    <div class="form-row">
      <label for="fuser">Foto </label>
      <input type="file" id="fuser" name="registroFoto" size="20"><br><br>
    </div>
    <div class="">
      <input type="reset" name="clear" value="Borrar" class="btn btn-secondary">
      <input type="submit" name="Guardar" id="alert_regn" value="Enviar" class="btn btn-primary">
    </div>
      <div>
  <small id="" class="form-text text-muted">Ya tienes una cuenta <a href="index.php?pagina=ingreso">ingresa</a></small>
  <small id="" class="form-text text-muted">Quieres volver al <a href="index.php?pagina=inicio">inicio</a></small>

  </div>
  </form>
</div>
<?php 
$registro =ControladorFormularios::ctrRegistro();
/*=============================================
limpiar las variables guardadas en el navegador
la memoria cache y variables post para que se 
quite el letrero de ingreso exitoso.
=============================================*/
if($registro == "ok"){
  echo '<script>
  if( window.history.replaceState){
    window.history.replaceState(null,null,window.location.href);
  }
  alert("El usuario ha sido registrado Exitosamente!");
  </script>';
  echo '<div class="alert alert-success text-center">El usuario ha sido registrado Exitosamente!</div>';
}
?>
</div>