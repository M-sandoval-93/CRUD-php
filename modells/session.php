<?php

class session {
    public function __construct() {
        session_start();
    }

    public function getUsser() {
        return $_SESSION['usser'];
    }
    
    public function setUsser($usser) {
        $_SESSION['usser'] = $usser;
    }

    public function getId() {
        return $_SESSION['id'];
    }

    public function setId($id) {
        $_SESSION['id'] = $id;
    }

    public function getRol() {
        return $_SESSION['rol'];
    }

    public function setRol($rol) {
        $_SESSION['rol'] = $rol;
    }

    public function cerrarSesion() {
        session_unset();
        session_destroy();
    }

}

?>
