<?php
require_once("conn_ciudadela.php");

$sql_ultimo_registro = "SELECT * FROM registros_de_morty ORDER BY id DESC LIMIT 1";
$resultado_ultimo_registro = mysqli_query($conexion, $sql_ultimo_registro);

if ($resultado_ultimo_registro->num_rows > 0) {
    $ultimo_registro = $resultado_ultimo_registro->fetch_assoc();

    $usuario = $ultimo_registro['usuario'];
    $sql_cerebro = "SELECT * FROM cerebro_de_rick WHERE usuario='$usuario'";
    $resultado_cerebro = mysqli_query($conexion, $sql_cerebro);

    if ($datos_cerebro = $resultado_cerebro->fetch_assoc()) {
        ?>
        <!DOCTYPE html>
        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <title>Iniciar Sesion</title>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <style>
                body {
                    background: #A9DFBF;
                    background: linear-gradient(to right, #00FF00, #FFD700);
                }

                .general {
                    margin: 100px 150px 100px 150px;
                    width: 1013px;
                    height: 470px;
                    border: 2px solid #000;
                    border-radius: 10px;
                }

                .foto {
                    margin: 30px 3px 3px 15px;
                    width: 400px;
                    height: 400px;
                    border: 2px solid #000;
                    border-radius: 10px;
                    float: left;
                    overflow: hidden;
                }

                .texto {
                    padding: 20px 2px 2px 2px;
                    margin: 30px -4px 3px 10px;
                    width: 500px;
                    height: 400px;
                    border: 2px solid #000;
                    border-radius: 10px;
                    float: left;
                }

                .logo {
                    margin: 30px 3px 3px 5px;
                    width: 70px;
                    height: 70px;
                    border: auto solid #000;
                    border-radius: 10px;
                    float: left;
                }

                .foto img {
                    width: 100%;
                    height: 100%;
                    object-fit: cover;
                    border-radius: 10px;
                }
            </style>
        </head>
        <body>
            <div class="general">
                <div class="foto">
                    <?php
                    if (isset($datos_cerebro['foto'])) {
                        echo '<img src="' . $datos_cerebro['foto'] . '">';
                    }
                    ?>
                </div>
                <div class="texto">
                    <?php
                    // Verifica si hay filas en el resultado
                    if ($resultado_ultimo_registro->num_rows > 0) {
                        ?>
                        <h3>Informacion de:<?php echo " " . $datos_cerebro['usuario'] . "   "; ?></h3><br>
                        <b>ID:<?php echo isset($datos_cerebro['id']) ? "  " . $datos_cerebro['id'] . "  " : ''; ?> ROL:<?php echo isset($datos_cerebro['rol'])? "  " . $datos_cerebro['rol'] . "  " : ''; ?> </b><br><br><br>
                        <b>NOMBRE:  <?php echo isset($datos_cerebro['nombre']) ? " " . $datos_cerebro['nombre'] . "  " : ''; ?> APELLIDO  :<?php echo isset($datos_cerebro['apellido']) ? " " . $datos_cerebro['apellido'] . "<br>" : ''; ?></b><br><br>
                        <b>FECHA DE NACIMIENTO:<?php  echo isset($datos_cerebro['f_nacimiento']) ? " " . $datos_cerebro['f_nacimiento'] . "   " : ''; ?></b><br><br><br>
                        <b>TELEFONO:<?php echo isset($datos_cerebro['telefono']) ? $datos_cerebro['telefono'] . "   " : ''; ?> EMAIL:<?php echo isset($datos_cerebro['email']) ? $datos_cerebro['email'] : ''; ?></b><br><br>
                        <b>PERSONAJE FAVORITO:<?php echo isset($datos_cerebro['personaje']) ? $datos_cerebro['personaje'] : ''; ?></b>
                        <?php
                    }
                    ?>
                </div>
                <div class="logo">
                    <img src="img/logo.png" width="60" height="60">
                </div>
            </div>

            <?php
            // Verifica el rol y luego imprime el botón correspondiente
            if ($datos_cerebro['rol'] == 'RICK') {
                echo '<a href="index_rick.php" style="margin: 0px 0px 100px 700px;">Volver al inicio</a>';
            } elseif ($datos_cerebro['rol'] == 'MORTY') {
                echo '<a href="index_morty.php" style="margin: 0px 0px 100px 700px;">Volver al inicio</a>';
            }
            ?>

        </body>
        </html>
        <?php
    }
}
?>
