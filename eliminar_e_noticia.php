<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesion</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        body {
            background: #A9DFBF;
            background: linear-gradient(to right, #00FF00, #FFD700);
            height: 1500px;
        }

        .bg {
            background-image: url(img/Registro.jpg);
            background-position: center center;
        }

        textarea.form-control {
            height: auto;
            min-height: 100px; 
            resize: vertical; 
        }
    </style>

</head>

<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6 col-lg-6 col-xl-6">
                <div class="container w-90 rounded shadow p-4" style="border: 1px solid #333; border-radius: 10px;">

                    <h2 class="fw-bold text-center pt-3 mb-5">Formulario: Para ingresar una noticia</h2>

                    <!---FORMULARIO---->

                    <form action="procesar_noticias_e.php" method="POST" enctype="multipart/form-data">

                        <label for="numero">Selecciona el cuadro de tu noticia </label>
                        <select name="numero" id="numero">
                            <option selected disabled></option>
                            <?php
                            $cuadros = ["1", "2", "3", "4"];
                            foreach ($cuadros as $n) {
                                echo "<option value='$n'>$n</option>";
                            }
                            ?>
                        </select>
                        <br>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Eliminar</button>
                        </div>
                    </form>
                    <a href="index_morty.php" style="margin:0px 0px 0px 240px;">Volver al Inicio</a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<?php
require_once("conn_ciudadela.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = isset($_POST["numero"]) ? $_POST["numero"] : "";

    if (!empty($id)) {
        eliminarNoticia($id);
    } else {
        echo "Por favor, selecciona un cuadro de noticia.";
    }
}

function eliminarNoticia($id)
{
    global $conexion;
    $id = isset($_POST["id"]) ? $_POST["id"] : "";
    $titulo = isset($_POST["titulo"]) ? $_POST["titulo"] : "";
    $resumen = isset($_POST["resumen"]) ? $_POST["resumen"] : "";
    $link = isset($_POST["link"]) ? $_POST["link"] : "";
    $archivo = isset($_POST["archivo"]) ? $_POST["archivo"] : "";

    $sql = "DELETE FROM noticias WHERE id = '$id'; ";
    $resultado = $conexion->query($sql);
    
    if ($resultado) {
        require_once("conn_ciudadela.php");
        $sql_ultimo_registro = "SELECT * FROM registros_de_morty ORDER BY id DESC LIMIT 1";
        $resultado_ultimo_registro = mysqli_query($conexion, $sql_ultimo_registro);

        if ($resultado_ultimo_registro->num_rows > 0) {
            $ultimo_registro = $resultado_ultimo_registro->fetch_assoc();
            if($ultimo_registro["MORTY"]){
                header("Location: index_morty.php");
                exit();
            }
            else{
                header("Location: index_rick.php");
                exit();
            }
    } else {
        echo "Error al eliminar la noticia.";
    }
}
}

mysqli_close($conexion);
?>

