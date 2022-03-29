<?php

include_once "../modells/session.php";
$sesion = new session();

$sesion->cerrarSesion();

// header("location: ../index");
header("location: ../");

?>
