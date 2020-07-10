<div class="container-fluid reg text-center">
<img src="imagenes/ilustracion_reg.svg" class="ilustracion_reg"> 
  <form class="bg-light" method="post" enctype="multipart/form-data">
      
    <div class="input-group mb-3">
    <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
    </div>
    <input type="text" class="form-control" id="validationDefault01" name="registroNombre" placeholder="Name" required>
    </div>
     
    <div class="input-group mb-3">
    <div class="input-group-prepend">
        <span class="input-group-text"><i class="fas fa-user"></i></span>
    </div>
    <input  type="text" class="form-control" id="validationDefault02" name="registroApellido" placeholder="LastName" required>
    </div>
  
      <div class="input-group mb-3">
    <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>
    <input type="email" class="form-control" id="validationDefaultUsername"  aria-describedby="emailHelp" placeholder="example@gmail.com" name="registroEmail" required>
    </div>
  
    <div class="input-group mb-3">
    <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>
    <input type="password" class="form-control" id="validationpass" name="registroPassword" placeholder="PassWord" required >
    </div>
  
    <div class="input-group mb-3">
    <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-globe-americas"></i></span>
    </div>
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
    
    
    
    <div class="form-row input-group mb-3 ">
    <div class="input-group-prepend cfoto">
          <span class="input-group-text"><i class="fas fa-image"></i></span>
    
    <input type="file" id="fuser" name="registroFoto" size="20" >
    </div>
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
?>
</div>