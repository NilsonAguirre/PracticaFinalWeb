 <!-- Modal -->
    <div >
    
            <form method="post">
               <label >Nombre</label>
                  <input type="text" class="form-control" id="validationDefault01" name="registroNombre" required >
                  <label for="validationDefault02">Apellido</label>
                  <input type="text" class="form-control" id="validationDefault02" name="registroApellido" required>
                  <label for="validationDefaultUsername">Correo electronico</label>
                    <input type="email" class="form-control" id="validationDefaultUsername"  aria-describedby="inputGroupPrepend2" placeholder="example@gmail.com" name="RegistroEmail" required>

                  <label for="validationpass">Crea una contraseña</label>
                  <input type="text" class="form-control" id="validationpass" name="registroContraseña" required>
                  <input type="reset" name="clear" value="Borrar" class="btn btn-secondary">
                <input type="submit" name="Guardar" value="Enviar" class="btn btn-primary" >

              </div>
              <div>
                 <?php 
                     $registro = new ControladorFormularios();
                     $registro -> ctrRegistro(); 
                  ?>
              </div>
            
            </form>
          </div>

        </div>
      </div>
    </div>   
