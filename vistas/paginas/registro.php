<?php 
$registro =ControladorFormularios::ctrRegistro();
?>
<div class="container-fluid reg text-center">
<img src="imagenes/ilustracion_reg.svg" class="ilustracion_reg"> 
  <form class="bg-light" method="post" id="formR" enctype="multipart/form-data">
      
    <div class="input-group mb-3">
    <div class="input-group-prepend">
          <span class="input-group-text"><i class="fas fa-user"></i></span>
    </div>
    <input type="text" class="form-control" id="InputNombre" name="registroNombre" placeholder="Name" onkeydown="validationText()" onchange="validationText()" required>
    <span class="text-center" id="mytextn"></span> 
  </div>
  
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-user"></i></span>
    </div>
    <input  type="text" class="form-control" id="InputApellido" name="registroApellido" placeholder="LastName" onkeydown="validationText()" onchange="validationText()" required>
    <span class="text-center" id="mytexta"></span> 
  </div>
  
  <div class="input-group mb-3">
    <div class="input-group-prepend">
      <span class="input-group-text"><i class="fas fa-envelope"></i></span>
    </div>
    <input type="email" class="form-control" id="InputREmail"  aria-describedby="emailHelp" placeholder="example@gmail.com" name="registroEmail"  onchange="validationREmail()" onkeydown="validationREmail()" required>
    <span class="text-center" id="mytextRe"></span> 
  </div>
  
  <div class="input-group mb-3">
    <div class="input-group-prepend">
    <span class="input-group-text"><i class="fas fa-lock"></i></span>
    </div>
    <input type="password" class="form-control" id="InputRPass" name="registroPassword" placeholder="PassWord" onkeydown="validationRPass()" onchange="validationRPass()" required>
    <span class="text-center" id="mytextRp"></span> 
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
<script src="js/validacion.js"></script>

</div>