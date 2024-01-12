<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        body{
            background: #A9DFBF;
            background: linear-gradient(to right ,#00FF00 ,#FFD700);
            height:1500px;
        }

        .bg{
            background-image: url(img/Registro.jpg);
            background-position: center center;
        }

    </style>
</head>
<body>
    <div class="container w-75 mt-5 rounded shadow" style="border: 1px solid #333; border-radius: 10px;">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col p-4 rounded">
                <div class="text-end">
                    <img src="img/logo.png" width="70" alt="">
                </div>
                <h6 class="fw-bold text-center">Bienvenido encantado de conocerte porfavor,</h6>
                <h2 class="fw-bold text-center pt-3 mb-5">Ingresa Tú Informacion:</h2>

                <!---FORMULARIO---->
                <form action="Registro.php" method="POST" enctype="multipart/form-data">
                <div class="mb-4">
                        <label for="nombre" class="form-label">Ingrese su Nombre:</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="mb-4">
                        <label for="apellido" class="form-label">Apellido:</label>
                        <input type="text" class="form-control" name="apellido" required>
                    </div>
                    <div class="mb-4">
                        <label for="rut" class="form-label">Rut:</label>
                        <input type="int" class="form-control" name="rut" required>
                    </div>
                    <div class="mb-4">
                        <label for="f_nacimiento" class="form-label">Fecha de Nacimiento:</label>
                        <input type="date" class="form-control" name="f_nacimiento" required>
                    </div>
                    <div class="mb-4">
                        <label for="telefono" class="form-label">Telefono:</label>
                        <input type="int" class="form-control" name="telefono" required>
                    </div>
                    <div class="mb-4">
                        <label for="email" class="form-label">Correo Electronico:</label>
                        <input type="email" class="form-control" name="mail" required>
                    </div>
                    <div class="mb-4">
                        <label for="usuario" class="form-label">Ingresa un Nombre de Usuario:</label>
                        <input type="text" class="form-control" name="usuario" required>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label">Ingresa una Contraseña (min 8 caracteres):</label>
                        <input type="password" class="form-control" name="password" required>
                    </div>

                    <div class="mb-4">
                        <label for="foto" class="form-label">Foto de Perfil:</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                    <div class="mb-4">
                        <label for="adicional" class="form-label">En caso de olvidar su contraseña ¿Cual es el Nombre de su ultima mascota?</label>
                        <input type="name" class="form-control" name="adicional">
                    </div>
                    <div class="mb-4">
                        <label for="personaje">Selecciona tu personaje favorito: </label>
                        <select name="personaje" id="personaje">
                        <option selected disabled>(Ejemplo: Morty) </option><
                        <?php
                            $personajes=[
                            "Morty Smith","Rick Sanchez","Jerry Smith","Summer Smith","Beth Smith","Mr. Poopybutthole","Arthricia","Glexo Slimslom","Frank Palicky"
                            ];
                            foreach($personajes as $personaje){
                                echo "<option value='$personaje'>$personaje</option>";
                            }
                        ?>
                        <br>
                    </select>
                    <br><br>
                    </div>
             
                    <div class="d-grid">
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </form>
                <a href="index.php">Continuar sin Registrarse</a>
                <?php 
                    require_once("conn_ciudadela.php");
                    global $conexion;
                    if (!empty($rut) && !empty($nombre) && !empty($apellido) && !empty($fecha_nacimiento) && !empty($telefono) && !empty($mail) && !empty($usuario) && !empty($contraseña) && !empty($archivo_nuevo) && !empty($adicional) && !empty($personaje)){
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
                        verificar();
                        $fechaActual = new DateTime();
                        $fechaActual = $fechaActual->format('Y-m-d');
                        $archivo_nuevo = subir_archivo($foto);

                        if (!verificar_rut($rut) || $fecha_nacimiento > $fechaActual) {
                            echo "<p style='color:red;'>ERROR en la Información</p>";
                        } else {
                            crear_persona($rut, $nombre, $apellido, $fecha_nacimiento, $telefono, $mail, $usuario, $contraseña, $archivo_nuevo, $adicional, $personaje);
                            header("Location: index.php");
                            exit();
                        }
                    }
                ?>
            </div>
        </div>
        <?php
        require_once("conn_ciudadela.php");
        global $conexion;

        // Procesar el formulario si se ha enviado
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $rut = $_POST["rut"];
            $nombre = $_POST["nombre"];
            $apellido = $_POST["apellido"];
            $fecha_nacimiento = $_POST["f_nacimiento"];
            $telefono = $_POST["telefono"];
            $mail = $_POST["mail"];
            $usuario = $_POST["usuario"];
            $contraseña = $_POST["password"];
            $foto = $_FILES["foto"];
            $adicional = $_POST["adicional"];
            $personaje = $_POST["personaje"];
            $fechaActual = new DateTime();
            $fechaActual = $fechaActual->format('Y-m-d');

            // Llamar a la función verificar antes de procesar el formulario
            if (!verificar($usuario)) {
                echo "<h5 style='color:red;margin:0px 0px 0px 700px'>Error: Este Usuario ya Existe</h5>";
            } elseif (!empty($rut) && !empty($nombre) && !empty($apellido) && !empty($fecha_nacimiento) && !empty($telefono) && !empty($mail) && !empty($usuario) && !empty($contraseña) && !empty($foto) && !empty($adicional) && !empty($personaje)) {
                // Resto del código para procesar el formulario e insertar en la base de datos
                $archivo_nuevo = subir_archivo($foto);

                if (!verificar_rut($rut) || $fecha_nacimiento > $fechaActual) {
                    echo "<h5 style='color:red;'>ERROR en la Información </h5>";
                } else {
                    if (crear_persona($rut, $nombre, $apellido, $fecha_nacimiento, $telefono, $mail, $usuario, $contraseña, $archivo_nuevo, $adicional, $personaje)) {
                        echo "<meta http-equiv='refresh' content='0;url=index.php'>";
                        exit();
                    } else {
                        echo "<p style='color:red;'>Error al registrar la persona</p>";
                    }
                }
            }
        }
?>
    </div>
</body>
</html>

<?php

function verificar($usuario) {
    require_once("conn_ciudadela.php");
    global $conexion;

    // Usar una consulta preparada para evitar SQL Injection
    $sql = "SELECT usuario FROM cerebro_de_rick WHERE usuario=?";
    $stmt = $conexion->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $resultado = $stmt->get_result();

    // Verificar si hay filas en el resultado
    if ($resultado->num_rows > 0) {
        return false;
    } else {
        return true;
    }
}



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
    } else {
        return "";
    }
}

function crear_persona($rut, $nombre, $apellido, $fecha_nacimiento, $telefono, $mail, $usuario, $contraseña, $archivo_nuevo, $adicional, $personaje){
    require_once("conn_ciudadela.php");
    global $conexion; 
    
    $sql = "INSERT INTO cerebro_de_rick (rol, rut ,nombre, apellido, f_nacimiento, telefono, email, usuario, contraseña, foto, adicional, personaje) VALUES ('MORTY','$rut' ,'$nombre', '$apellido', '$fecha_nacimiento', '$telefono', '$mail', '$usuario', '$contraseña', '$archivo_nuevo', '$adicional','$personaje')";
    $resultado = mysqli_query($conexion, $sql);
    
    if ($resultado){
        return true;
    } else {
        echo "La consulta: $sql - Fallo: " . mysqli_error($conexion);
        return false;
    }
}
?>