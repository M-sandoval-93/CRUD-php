<?php

// POSIBLE USO DE CLASE PARA EL LOGIN
// class login extends conexion {
//     protected $usuario;
//     protected $clave;
//     protected $resultado;

//     public function validacion($usuario, $clave) {

//         $this->usuario = $usuario;
//         $this->clave = md5($clave);

//         $query = "SELECT nombre_usuario, password FROM usuarios WHERE nombre_usuario='".$this->usuario."' AND password='".$this->clave."'";
//         $sentencia = $this->conexion_db->prepare($query);
//         $sentencia->execute();
//         $this->resultado = $sentencia->fetchAll (PDO::FETCH_ASSOC);

//         return $this->resultado;

//         $sentencia->closeCursor();
//         $this->conexion_db = null;

//     }
// }


include_once "../modells/bd.php";
include_once "../modells/session.php";

$sesion = new session();
$conexion = new conexion();

$usuario = (isset($_POST['usuario'])) ? $_POST['usuario'] : '';
$clave = (isset($_POST['clave'])) ? $_POST['clave'] : '';
$clavemd5 = md5($clave);

// $query = "SELECT nombre_usuario, password FROM usuarios WHERE nombre_usuario='".$usuario."' AND password='".$clavemd5."'";
$query = "SELECT * FROM usuarios WHERE nombre_usuario='".$usuario."' AND password='".$clavemd5."'";
$sentencia = $conexion->conexion_db->prepare($query);
$sentencia->execute();

if ($sentencia->rowCount() >= 1) {
    // Aignar valores a sesión
    $data = $sentencia->fetchAll(PDO::FETCH_ASSOC);
    $sesion->setUsser($usuario);
    $sesion->setRol($data[0]['rol']); 
    // $data = true;
} else {
    $sesion->setUsser(null);
    $data = null;
} 

print json_encode($data);
$conexion = null;

?>
