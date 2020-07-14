<?php
$personal= ControladorFormularios::ctrPersonal();
?>
<div class="container m-5 p-5">
    <h1>Datos Personales</h1>
    
    <?php
    foreach ($personal as $clave => $valor) {
        echo "{$clave} => {$valor} \n ";
    }
    ?>
<div class="fcambios">
    <form class="bperfil" method="POST">
        <div class="campo"> 
            <div class="Cder align-items-center">
                <div class="m-1">nombre: </div>
                <div id="c1" class="Iaparece m-1"><?php echo $personal['nombre']; ?></div>
                <input type="text" class="form-control Idesaparece" name="cambio1" id="cambio1" required>
            </div>
            <div>
                <a class="btn btn-warning p-0" id="edit1"><i class='bx bxs-edit'></i></a>
                <input type="submit" name="Guardar" id="alert_regn" value="C" class="btn btn-primary">   
            </div> 
        </div>
    </form>
    <form class="bperfil" method="POST">
        <div class="campo"> 
            <div class="Cder align-items-center">
                <div class="m-1">apellido: </div>
                <div id="c2" class="Iaparece m-1"><?php echo $personal['apellido']; ?></div>
                <input type="text" class="form-control Idesaparece" name="cambio2" id="cambio2" required>
            </div>
            <div>
                <a class="btn btn-warning p-0" id="edit2"><i class='bx bxs-edit'></i></a>
                <input type="submit" name="Guardar" id="alert_regn" value="C" class="btn btn-primary">    
            </div>
        </div>
    </form>
    <form class="bperfil" method="POST">
        <div class="campo"> 
            <div class="Cder align-items-center">
                <div class="m-1">correo: </div>
                <div id="c3" class="Iaparece m-1"> <?php echo $personal['email']; ?></div>
                <input type="email" class="form-control Idesaparece" name="cambio3" id="cambio3" required>
            </div>
            <div>
                <a class="btn btn-warning p-0" id="edit3"><i class='bx bxs-edit'></i></a>
                <input type="submit" name="Guardar" id="alert_regn" value="C" class="btn btn-primary">    
            </div>
        </div>
    </form>
    <form class="bperfil" method="POST">
        <div class="campo"> 
            <div class="Cder align-items-center">
                <div class="m-1">cambiar contraseña </div>
                <input type="text" class="form-control Idesaparece" name="cambio4" id="cambio4" required>
            </div>
            <div>
                <a class="btn btn-warning p-0" id="edit4"><i class='bx bxs-edit'></i></a>
                <input type="submit" name="Guardar" id="alert_regn" value="C" class="btn btn-primary">   
            </div> 
        </div>
    </form>
    <form class="bperfil" method="POST">
        <div class="campo"> 
            <div class="Cder align-items-center">
                <div class="m-1">cambiar foto </div>
                <input type="file" id="cambio5" name="cambio5" size="20" class="Idesaparece" required> 
            </div>
            <div>
                <a class="btn btn-warning p-0" id="edit5"><i class='bx bxs-edit'></i></a>
                <input type="submit" name="Guardar" id="alert_regn" value="C" class="btn btn-primary">  
            </div>  
        </div>
    </form>
    <form class="bperfil" method="POST">
        <div class="campo Cder">
            <div>eliminar usuario</div>
            <a class="btn btn-danger p-0"><i class='bx bx-trash' ></i></a> 
        </div>
    </form>
</div>

<?php 
    echo '<script>
    const c1=document.getElementById("c1")
    const c2=document.getElementById("c2")
    const c3=document.getElementById("c3")
    const edit1 = document.getElementById("edit1");
    const edit2 = document.getElementById("edit2");
    const edit3 = document.getElementById("edit3");
    const edit4 = document.getElementById("edit4");
    const edit5 = document.getElementById("edit5");
    const cambio1 = document.getElementById("cambio1");
    const cambio2 = document.getElementById("cambio2");
    const cambio3 = document.getElementById("cambio3");
    const cambio4 = document.getElementById("cambio4");
    const cambio5 = document.getElementById("cambio5");
    
    edit1.addEventListener("click", () => {cambio1.classList.toggle("Idesaparece");cambio1.classList.toggle("Iaparece"); c1.classList.toggle("Iaparece");c1.classList.toggle("Idesaparece");})
    edit2.addEventListener("click", () => {cambio2.classList.toggle("Idesaparece");cambio2.classList.toggle("Iaparece"); c2.classList.toggle("Iaparece");c2.classList.toggle("Idesaparece");})
    edit3.addEventListener("click", () => {cambio3.classList.toggle("Idesaparece");cambio3.classList.toggle("Iaparece"); c3.classList.toggle("Iaparece");c3.classList.toggle("Idesaparece");})
    edit4.addEventListener("click", () => {cambio4.classList.toggle("Idesaparece");cambio4.classList.toggle("Iaparece");})
    edit5.addEventListener("click", () => {cambio5.classList.toggle("Idesaparece");cambio5.classList.toggle("Iaparece");})
    
    </script>';
    
    if(isset($_POST['cambio1'])){
        $actualizo= ControladorFormularios::ctractual();  
        if($actualizo=="no resultado"){
            echo "no se actualizaron los Datos";
        }
        else{
            echo '<script>
		if( window.history.replaceState){
		  window.history.replaceState(null,null,window.location.href);
		}</script>';
        echo "Datos actualizados";
        }
    }    
    ?>

</div>

