<?php 
function conectarBD() {
    $servidor = "localhost";
    $usuario = "root";
    $password = "";
    $bd = "hall_of_games";

    $conexion = new mysqli($servidor, $usuario, $password, $bd);

    if ($conexion->connect_error) {
        die("Error de conexión: " . $conexion->connect_error);
    }

    return $conexion;
}
?>
