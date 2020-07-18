<div class="container-fluid m-2">
<div class="sec container-fluid row m-0">
    <div class="sec2 container-fluid row  row-cols-1 row-cols-xs-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4 ">    
    <?php 
    
        $tabla = "bdcarros";
        $datos = "vendido";
        $valor = "si"; 
        $stmt =ControladorFormularios::ctrBusqueda();
        $consul=mysqli_query($stmt,"SELECT * FROM $tabla WHERE `$datos` = '$valor'");
        while ($car=mysqli_fetch_array($consul)) {               
          $fot = $car[13];?> 
                <div class="card text-center bg-light tarjeta">
                <a href="#" class="ecard d-block"><img src="imagenes/fotos/<?php echo $car[13] ?>" class="card-img-top img-galeria cara1 Caparece"></a>
                <div class="card-body">
                  <h3 class="card-title font-weight-bold m-0 cara1 Caparece"><?php echo $car[1]?></h3>
                  <p class="card-text m-0 cara1 Caparece"><?php echo $car[2]?></p>
                  <p class="card-text m-0 cara1 Caparece"><?php echo $car[4]?></p>
                  <p class="card-text m-0 cara1 Caparece price"> $<?php echo $car[9]?></p>
                  <h3 class="card-title font-weight-bold m-0 cara2 Cdesaparece">Especificaciones</h3>
                  <p class="card-text m-0 cara2 Cdesaparece">Tipo: <?php echo $car[3]?></p>
                  <p class="card-text m-0 cara2 Cdesaparece">Motor: <?php echo $car[5]?></p>
                  <p class="card-text m-0 cara2 Cdesaparece">Potencia: <?php echo $car[6]?></p>
                  <p class="card-text m-0 cara2 Cdesaparece">torque: <?php echo $car[7]?></p>
                  <p class="card-text m-0 cara2 Cdesaparece">Transmision: <?php echo $car[8]?></p>
                  <p class="card-text m-0 cara2 Cdesaparece">Cilindraje: <?php echo $car[10]?></p>
                  <p class="card-text m-0 cara2 Cdesaparece">Comercial: <?php echo $car[11]?></p>
                  <p class="card-text m-0 cara2 Cdesaparece">Consumo: <?php echo $car[12]?></p>
                  </div>
                </div>
                <?php        
        }     
?>  
</div>  
</div>
</div>

<div class="imagen-light">
    <img src="imagenes/close.svg" alt="" class="close">
    <img src="imagenes/carro1.jpg" alt="" class="agregar-imagen">
</div>


</div>