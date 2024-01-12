<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style>
    body{
            background: #A9DFBF;
            background: linear-gradient(to right ,#00FF00 ,#FFD700);
        }
</style>
<body>
    
<?php
    require_once("conn_ciudadela.php");

    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $rut = $_POST["rut"];
    $fecha_nacimiento = $_POST["f_nacimiento"];
    $telefono = $_POST["telefono"];
    $mail = $_POST["mail"];
    $usuario = $_POST["usuario"];
    $contraseña = $_POST["password"];
    $foto = $_FILES["foto"];
    $adicional = $_POST["adicional"];
    $personaje= $_POST["personaje"];
    function verificar_rut($rut){
        $rut = preg_replace('/[\s\-]/', '', $rut);

        $rutNumero = substr($rut, 0, -1);
        $digito = strtoupper(substr($rut, -1));
        if (!ctype_digit($rutNumero) || !in_array($digito, array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', 'K'))) {
            return false;
        }
        $factor = 2;
        $suma = 0;
        for ($i = strlen($rutNumero) - 1; $i >= 0; $i--) {
            $suma += $factor * intval($rutNumero[$i]);
            $factor = $factor == 7 ? 2 : $factor + 1;
        }

        $resto = $suma % 11;
        $validar_digito = $resto == 0 ? 0 : 11 - $resto;

        return $digito == ($validar_digito == 10 ? 'K' : strval($validar_digito));
    }
    function subir_archivo($archivo){
        $archivo_nombre = $archivo["name"];
        $directorio = "img/";
        $archivo_destino = $directorio . basename($archivo_nombre);

        if (move_uploaded_file($archivo["tmp_name"], $archivo_destino)){
            return $archivo_destino;
        }else{
            return "";
        }

    }
    
    $archivo_nuevo = subir_archivo($foto);

    function crear_persona($rut ,$nombre, $apellido, $fecha_nacimiento, $telefono, $mail, $usuario, $contraseña, $archivo_nuevo, $adicional, $personaje){
        require_once("conn_ciudadela.php");
        global $conexion;
        $sql = "INSERT INTO cerebro_de_rick (rol, rut ,nombre, apellido, f_nacimiento, telefono, email, usuario, contraseña, foto, adicional, personaje) VALUES ('MORTY','$rut' ,'$nombre', '$apellido', '$fecha_nacimiento', '$telefono', '$mail', '$usuario', '$contraseña', '$archivo_nuevo', '$adicional','$personaje')";

        $resultado = mysqli_query($conexion, $sql);
        if ($resultado){
            return True;
        }else{
            echo "La consulta: $sql - Fallo: " . mysqli_error($conexion);
            return FALSE;
        }
    }

    

    $fechaActual = new DateTime();
    $fechaActual = $fechaActual->format('Y-m-d');

    if (!verificar_rut($rut) || $fecha_nacimiento > $fechaActual ) {
        echo "<h1>ERROR EN LA INFORMACION.</h1>";
        echo "Por favor <a href='Registro.php'>Vuelve a Registrarse,</a><br>";
        echo "si lo deseas, puedes <a href='index.php'>Continuar sin registrar.</a>";
    } else {
        crear_persona($rut ,$nombre, $apellido, $fecha_nacimiento, $telefono, $mail, $usuario, $contraseña, $archivo_nuevo, $adicional,$personaje);
        echo "<h1> Muchas Gracias por registrarte en ... </h1>";
        echo "Ahora puedes <a href='index_morty.php'>Volver al Inicio</a> y navegar.";
    }
    ?>

</body>
</html>