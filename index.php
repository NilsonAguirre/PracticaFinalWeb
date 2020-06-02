<?php

/*=============================================================================================================================================
= Aca mostraremos las vistas para el usuario y a traves de el tambien enviaremos informacion del usuario al controlador            =
=============================================================================================================================================*/
require_once "controladores/plantilla.controlador.php";
require_once "controladores/formularios.controlador.php";
require_once "modelos/conexion.php";

$conexion = conexion::conectar();

echo '<pre>'; print_r($conexion); echo '</pre>';
$plantilla = new ControladorPlantilla();
$plantilla -> ctrTraerPlantilla();
?>