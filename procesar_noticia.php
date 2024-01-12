<?php
require_once("conexion_noticia.php");

$id = $_POST["id"];
$titulo = $_POST["titulo"];
$resumen = $_POST["resumen"];
$link = $_POST["link"];
$archivo = $_FILES["archivo"];

function subir_archivo($archivo){
    $archivo_nombre = $archivo["name"];
    $directorio = "img/";
    $archivo_destino = $directorio . basename($archivo_nombre);

    if (move_uploaded_file($archivo["tmp_name"], $archivo_destino)){
        return $archivo_destino;
    } else {
        return "";
    }
}

$archivo_nuevo = subir_archivo($archivo);
function actualizar_noticia($id, $titulo, $resumen, $link, $archivo_nuevo){
    global $conexion;
    $titulo = mysqli_real_escape_string($conexion, $titulo);
    $resumen = mysqli_real_escape_string($conexion, $resumen);
    $link = mysqli_real_escape_string($conexion, $link);

    $sql = "UPDATE noticias_de_rick SET titulo=?, resumen=?, link=?, img=? WHERE id=?";
    $stmt = mysqli_prepare($conexion, $sql);
    mysqli_stmt_bind_param($stmt, 'ssssi', $titulo, $resumen, $link, $archivo_nuevo, $id);
    $resultado = mysqli_stmt_execute($stmt);
    if ($resultado){
        
        require_once("conn_ciudadela.php");
        global $conexion;
        $sql_ultimo_registro = "SELECT * FROM registros_de_morty ORDER BY id DESC LIMIT 1";
        $resultado_ultimo_registro = mysqli_query($conexion, $sql_ultimo_registro);

        if ($resultado_ultimo_registro->num_rows > 0) {
            $ultimo_registro = $resultado_ultimo_registro->fetch_assoc();
            if($fila["rol"]=="MORTY"){
                header("Location: index_morty.php");
                exit();
            }
            else{
                header("Location: index_rick.php");
                exit();
            }
    } else {
        echo "La consulta: $sql - Fallo: " . mysqli_error($conexion);
    }
    mysqli_stmt_close($stmt);
}
}

actualizar_noticia($id, $titulo, $resumen, $link, $archivo_nuevo);


/*
function crear_noticia($id, $titulo, $resumen, $link, $img){
    global $conexion;
    $sql = "INSERT INTO noticias_de_rick (id, titulo, resumen,  link,  img) VALUES ('$id', '$titulo', '$resumen', '$link', '$img')";

    $resultado = mysqli_query($conexion, $sql);
    if ($resultado){
        return True;
    }else{
        echo "La consulta: $sql - Fallo: " . mysqli_error($conexion);
        return FALSE;
    }
}
crear_noticia($id, $titulo, $resumen, $link, $archivo_nuevo);
*/
?>
