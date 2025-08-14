<?php
require_once "controladores/plantilla.controlador.php";
require_once "controladores/usuarios.controlador.php";


//llamando a los modelos
require_once "modelos/usuarios.modelo.php";

//crearmos una nueva instancia de controlador plantilla
$plantilla =new ControladorPlantilla();

$plantilla->crtPlantilla();

?>