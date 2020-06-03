   <div class="container-fluid">
      <h1>Este es el programa</h1>
      <!-- Modal -->
    <!--div class="modal fade" id="staticBackdrop2"  data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="staticBackdropLabel">Registro</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body"-->
            <form method="post" enctype="multipart/form-data">
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault01">Nombre</label>
                  <input type="text" class="form-control" id="validationDefault01" name="registroNombre" required >
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationDefault02">Apellido</label>
                  <input type="text" class="form-control" id="validationDefault02" name="registroApellido" required>
                </div>
              </div>
              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefaultUsername">Correo electronico</label>
                  <div class="input-group">
                    <input type="email" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" placeholder="example@gmail.com" name="registroEmail" required>

                  </div>
                </div>
                <div class="col-md-6 mb-3">
                  <label for="validationpass">Crea una contraseña</label>
                  <input type="text" class="form-control" id="validationpass" name="registroPassword" required>
                </div>
              </div>

              <div class="form-row">
                <div class="col-md-6 mb-3">
                  <label for="validationDefault03">Ciudad</label>
                  <input type="text" class="form-control" id="validationDefault03" name="registroCiudad" required>
                </div>
                <div class="col-md-6 mb-3">
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
              </div>
 
              <div class="form-row">
                <label for="fuser">Foto </label>
                <input type="file" id="fuser" name="registroFoto" size="20"><br><br>
              </div>
              
                 <?php 
                     $registroUser = ControladorFormularios::ctrRegistro();
                     
                    
                  if($registroUser == "ok"){
                    echo '<script>
                      if( window.history.replaceState){
                          window.history.replaceState(null,null,window.location.href);
                      }
                    </script>';

                    echo '<div class="alert alert-success text-center">El usuario ha sido registrado Exitosamente!</div>';
                  }

                  ?>
              <div class="modal-footer">
                <input type="reset" name="clear" value="Borrar" class="btn btn-secondary">
                <input type="submit" name="Guardar" value="Enviar" class="btn btn-primary" onclick="registro()" >
              </div>
            </form>
          <!--/div>
        </div>
      </div>
    </div-->   
</div>