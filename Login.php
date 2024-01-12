<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <style>
        body{
            padding:50px 0px 0px 0px;
            background: #A9DFBF;
            background: linear-gradient(to right ,#00FF00 ,#FFD700);
        }

        .bg{
            background-image: url(img/Login.png);
            background-position: center center;
        }
        .error-message {
            color: red;
            font-weight: bold;
            margin-top: 10px;
        }
        #formularioRecuperacion {
            display: none;
        }

    </style>

</head>
<body>
    <?php
    require_once("conn_ciudadela.php");
    global $conexion;
    ?>
    <div class="container w-75 mt-5 rounded shadow" style="margin:100px 0px 0px 190px; border: 1px solid #333; border-radius: 10px">
        <div class="row align-items-stretch">
            <div class="col bg d-none d-lg-block col-md-5 col-lg-5 col-xl-6 rounded">

            </div>
            <div class="col p-4 rounded">

            
            <div class="text-end">
                <img src="img/logo.png" width="70" alt="">
            </div>

            <h2 class="fw-bold text-center pt-3 mb-5">Bienvenido</h2>


            <form id="Login" method="POST" action="Login.php" enctype="multipart/form-data">
                <div class="mb-4">
                    <label for="nm_usuario" class="form-label">Nombre de usuario:</label>
                    <input type="name" class="form-control" name="nm_usuario"required>
                </div>
                <div class="mb-4">
                    <label for="pass_usuario" class="form-label">Contraseña:</label>
                    <input type="password" class="form-control" name="pass_usuario"required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Iniciar Sesion </button>
                </div>
            </form>
            <?php
                verificar();
    
                
            ?>
            <div class="my-3">
                <span>No tienes cuenta? <a href="Registro.php">Registrate AQUI</a> </span>
                <br>
                <span style="cursor: pointer; color: blue; text-decoration: underline;" onclick="mostrarRecuperacion()">Recuperar mi contraseña</span>
            </div>

            <form id="formularioRecuperacion" action="Login.php" method="POST">
                <div class="mb-4">
                    <label for="rut_rec" class="form-label">Rut:</label>
                    <input type="int" class="form-control" name="rut"required>

                    <label for="mascota" class="form-label">Nombre de tu ultima mascota:</label>
                    <input type="text" class="form-control" name="mascota"required>
                </div>
                <div class="d-grid">
                    <button type="submit" class="btn btn-primary">Recuperar Contraseña </button>
                </div>
            </form>   
        </div>
    </div>
</div>
    
    
    <script>
        function mostrarRecuperacion() {
            var formularioRecuperacion = document.getElementById("formularioRecuperacion");
            formularioRecuperacion.style.display = "block";
        }
    </script>


</body>
</html>
<?php
    function comprobarVariablesSesion() {
        if (isset($_SESSION["usuario"])) {
            header("Location: index_morty.php");
            exit();
        }
    }
    function verificar_pass(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["rut"]) and isset($_POST["mascota"])) {
                $rut = $_POST["rut"];
                $adicional = $_POST["mascota"];

                require_once("conn_ciudadela.php");
                global $conexion;
                $sql = "SELECT rut, adicional, usuario, contraseña FROM cerebro_de_rick WHERE rut = ? AND adicional = ?";
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param('ss', $rut, $adicional);
                $stmt->execute();
                $resultado = $stmt->get_result();
                if ($resultado->num_rows > 0) {
                    while($fila = $resultado->fetch_assoc()) {
                        echo "Usuario: ".$fila["usuario"]."<br>"; 
                        echo "Contraseña: ".$fila["contraseña"]."<br>";
                    }
                }
                else {
                    echo "<div style= color:red;> Usuario no existe </div>";
                }
                $stmt->close();

                $conexion->close();
            }
        }
    }
    verificar_pass();
?>

<?php
function crear_usuario($usuario, $contraseña){
    require_once("conn_ciudadela.php");
    global $conexion;
    $sql = "INSERT INTO registros_de_morty (usuario, contraseña) VALUES (?, ?)";
    $stmt = $conexion->prepare($sql);
    if (!$stmt) {
        echo "Error en la preparación de la consulta: " . $conexion->error;
        return false;
    }
    $stmt->bind_param("ss", $usuario, $contraseña);
    $resultado = $stmt->execute();

    if ($resultado) {
        echo "Usuario creado exitosamente.";
        return true;
    } else {
        echo "La consulta: $sql - Fallo: " . $stmt->error;
        return false;
    }
    $stmt->close();
}
?>


<?php    
    function verificar(){
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST["nm_usuario"]) && isset($_POST["pass_usuario"])) {
                $usuario = $_POST["nm_usuario"];
                $contraseña = $_POST["pass_usuario"];
                require_once("conn_ciudadela.php");
                global $conexion;

                $sql = "SELECT usuario, contraseña, rol FROM cerebro_de_rick WHERE usuario=? AND contraseña=?";            
                $stmt = $conexion->prepare($sql);
                $stmt->bind_param('ss', $usuario, $contraseña);
                $stmt->execute();
                $resultado = $stmt->get_result();
                
                if ($resultado->num_rows>0) {
                    crear_usuario($usuario, $contraseña);
                    while($fila = $resultado->fetch_assoc()) {
                        if($fila["rol"]=="MORTY"){
                            header("Location: index_morty.php");
                            exit();
                        }
                        else{
                            header("Location: index_rick.php");
                            exit();
                        }
                    }
                }
                else{
                    echo"<h6 style=color:red;>Usuario o Contraseña Incorrectos</h6>";
                }
                $stmt->close();
            
                $conexion->close();
            }
        }
    }
?>