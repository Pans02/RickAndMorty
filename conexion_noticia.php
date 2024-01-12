<?php
$db_host = "localhost";
$db_name = "ciudadela";
$db_user = "root";
$db_pass = "";

$conexion = new mysqli($db_host, $db_user, $db_pass, $db_name);

if ($conexion->connect_error) {
    die("Conexión fallida: " . $conexion->connect_error);
}
?>