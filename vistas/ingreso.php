<!-- Modal -->
<div class="modal fade" id="staticBackdrop" data-backdrop="static" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel1" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-center" id="staticBackdropLabel1">Inicio de Sesion</h5>
        <button  type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form name="forming" class="" method="post">
          <div class="form-group">
            <input type="email" class="form-control " id="txtcorreo" name="ingresoEmail" aria-describedby="emailHelp" placeholder="Correo electronico">
          </div>                      
        </div>
        <div class="modal-footer">
          <small id="emailHelp" class="form-text text-muted">Todavia no tienes una cuenta <a href="#regn">registrate</a></small>


          <!-- Button trigger modal -->
          <button type="button" class="btn btn-warning" id="regn" data-toggle="modal" data-target="#staticBackdrop2">registrarse</button>
          <!-- Modal -->

          <?php 
          include "registro.php";
          $ing =ControladorFormularios::ctrIngreso();
          echo '<script>
          console.log($ing);
          </script>';
          if(isset($ing)){

            echo '<div class="alert alert-success text-center">El usuario ha sido registrado Exitosamente!</div>';
          }else{
            echo '<script>
            console.log("No se ha podido comunicar");
            </script>';
          }
          ?>


          <input type="submit" name="guardarenv" id="btningresar" value="Enviar" class="btn btn-primary" onclick="">
        </div>
      </form>
    </div>
  </div>
</div>