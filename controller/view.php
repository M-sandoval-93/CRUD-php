<?php 

// control de redirección de vistas

if ($_GET['ruta'] == "home" ||
    $_GET['ruta'] == "productos") {
    include_once "views/".$_GET['ruta'].".php";
}

?>
