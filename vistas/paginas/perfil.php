<?php
$personal= ControladorFormularios::ctrPersonal();
?>
<div class="container perfil">
<img src="imagenes/ilustracionperfil.svg" alt="">
<div class="fcambios">
    <h3>Datos Personales</h3>
        <div class=" campo"> 
            <div class="Cder align-items-center">
                <div class="m-1">nombre: </div>
                <div class="m-1"><?php echo $personal['nombre']; ?></div>
            </div> 
        </div>
    
        <div class="campo"> 
            <div class="Cder align-items-center">
                <div class="m-1">apellido: </div>
                <div  class=" m-1"><?php echo $personal['apellido']; ?></div>
            </div>
          </div>

        <div class="campo"> 
            <div class="Cder align-items-center">
                <div class="m-1">correo: </div>
                <div id="c3" class=" m-1"> <?php echo $personal['email']; ?></div>
            </div>
        </div>
   </div>

</div>

