<?php

// se incluye el archivo que contiene los datos de la conexion
// include_once "config/config.php";
include_once "../config/config.php";

class conexion { 
    // protected $conexion_db;
    public $conexion_db;

    public function __construct() {
        $dns = 'mysql:host='.DB_HOST.'; dbname='.DB_DATA.'; charset='.DB_CHARSET;

        try {
            $this->conexion_db = new PDO($dns, DB_USSER, DB_PASSWORD);
            $this->conexion_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $this->conexion_db;
        
        } catch (Exception $e) {
            echo "ERROR: " . $e->getMessage();

        }
    }
}


?>
