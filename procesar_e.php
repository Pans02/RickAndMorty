<?php
require_once("conexion.php");


function EliminarBD($titulo){
    global $conexion;
    $sql = "DELETE FROM noticias WHERE titulo = '$titulo'; ";

    $resultado = $conexion->query($sql);
    if ($resultado)
        return True;
    else{
        return False;
    }
}

#recuperacion de datos del formulario
$titulo = $_POST["titulo"];



EliminarBD($titulo);
require("index.php");
mysqli_close($conexion);









?>