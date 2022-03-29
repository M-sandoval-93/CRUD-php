<?php 

include_once "../modells/bd.php";
$conexion = new conexion();


$type = $_POST['funcion'];

switch ($type) {
case "mostrar_productos":
    $query = "SELECT * FROM productos ORDER BY id_producto ASC";
    $sentencia = $conexion->conexion_db->prepare($query);
    $sentencia->execute();

    $info = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    $json = array();

    foreach ($info as $data) {
        $json["data"][] = $data;
    }

    print json_encode($json);
    $conexion = null;
    break;

}




?> 
