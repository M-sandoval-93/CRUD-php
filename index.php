<?php
// setear la zona horaria
date_default_timezone_set('America/Santiago');


include_once "modells/session.php";
$sesion = new session();

if (isset($_SESSION['usser'])) {
    if (isset($_GET['ruta'])) {
        include_once "controller/view.php";
    } else {
        // header("location: index");
        header("location: home");
    }
} else {
    include_once "views/login.php";
}


?>
