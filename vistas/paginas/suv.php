<div class="container-fluid">
  <form class="filtro p-3 " method="post">
      <h1 class="mb-3">Filtro</h1>
      <select class="custom-select" id="validationDefault04" name="mycheck" required>
        <option disabled selected>-Marca-</option> 
              <option value="mazda">Mazda</option>
              <option value="renault">Renault</option>
              <option value="porsche">Porsche</option>
              <option value="mercedez-benz">Mercedez-benz</option>
              <option value="kia">Kia</option>
              <option value="jeep">Jeep</option>
              <option value="nissan">Nissan</option>
              <option value="bmw">BMW</option>
              <option value="honda">Honda</option>
            </select> 
      <input type="submit" name="Guardar" id="alert_regn" value="Enviar" class="btn btn-primary">
  
      <p id="text" style="display:none">Checkbox is CHECKED!</p>
</form>
<?php
if(isset($_POST["mycheck"])){
  echo '<script>
      text.style.display = "block";
      var a= "'.$_POST["mycheck"].'";
  </script>';
}


?>
<div class="der container-fluid row m-0">
    <div class="container-fluid row row-cols-2 row-cols-md-3 row-cols-lg-5 row-cols-xl-5 ml-auto mr-auto">    
    <?php 
          $tabla = "pruebaCarros";
          $stmt =ControladorFormularios::ctrBusqueda();
      if (!isset($_POST["mycheck"])){
        $consul=mysqli_query($stmt,"SELECT * FROM $tabla WHERE 1");
        while ($car=mysqli_fetch_array($consul)) {               
          $fot = $car[4];?> 
                          <div class="card text-center  bg-light"><a href="">
                          <img src="imagenes/<?php echo $fot ?>" class="card-img-top" alt="..."></a>
                          <div class="card-body">
                            <h5 class="card-title font-weight-bold"><?php echo $car[1]?></h5>
                            <p class="card-text"><small class="text-muted"><?php echo $car[2]?></small></p>
                            <p class="card-text"><small class="text-success"><strong class=""><?php echo $car[3]?></strong></small></p>
                       
                            </div>
                          </div><?php
                        }
      }else{
          $datos ="marca";
          $valor = $_POST["mycheck"];
              $consul=mysqli_query($stmt,"SELECT * FROM $tabla WHERE `$datos` = '$valor'");
  
                while ($car=mysqli_fetch_array($consul)) {               
                  $fot = $car[4];?> 
                         <div class="card text-center bg-light"><a href="">
                          <img src="imagenes/<?php echo $fot ?>" class="card-img-top" alt="..."></a>
                          <div class="card-body">
                            <h5 class="card-title font-weight-bold"><?php echo $car[1]?></h5>
                            <p class="card-text text-muted"><?php echo $car[2]?></p>
                            <p class="card-text text-success"><strong ><?php echo $car[3]?></strong></p>
                
                          </div>
                        </div><?php
                }
        }
?>  
</div>  
</div>
</div>