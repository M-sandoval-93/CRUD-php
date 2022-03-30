<?php 

include_once "../modells/bd.php";
$conexion = new conexion();


$type = $_POST['funcion'];

switch ($type) {
case "mostrar_productos":
    $query = "SELECT p.id_producto, p.nombre, p.descripcion, c.descripcion_categoria, p.cantidad
            FROM productos AS p
            INNER JOIN categorias AS c
            ON c.id_categoria = p.id_categoria
            ORDER BY p.id_categoria ASC;";
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

case "ingresar_producto";
    //recuperar datos para la consulta..!!
    break;

}




?> 
