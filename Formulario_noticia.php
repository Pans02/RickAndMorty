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

                    <form action="procesar_noticia.php" method="POST" enctype="multipart/form-data">

                    <label for="id">Selecion el cuadro de tu noticia </label>
                    <select name="id" id="id">
                        <option selected disabled></option><
                        <?php
                            $cuadros=[
                            "1","2","3","4"
                            ];
                            foreach($cuadros as $n){
                                echo "<option value='$n'>$n</option>";
                            }
                        ?>
                        <br>
                    </select>
                            <br>
                        <div class="mb-4">
                            <label for="titulo" class="form-label">Ingrese el titulo de la noticia:</label>
                            <input type="text" class="form-control" name="titulo">
                        </div>
                        <div class="mb-4">
                            <label for="resumen" class="form-label">Ingrese un resumen de su noticia</label>
                            <textarea class="form-control" name="resumen" rows="3"></textarea>
                        </div>
                        <div class="mb-4">
                            <label for="link" class="form-label">Ingrese el link de su noticia:</label>
                            <input type="text" class="form-control" name="link">
                        </div>
                        <div class="mb-4">
                            <label for="archivo" class="form-label">Seleccionar imagen:</label>
                            <input type="file" class="form-control" name="archivo">
                        </div>
                        <div class="d-grid">
                            <button type="submit" class="btn btn-primary">Ingresar noticia</button>
                        </div>
                    </form>
                    <?php
                    require_once("conn_ciudadela.php");
                    global $conexion;
                    $sql = "SELECT * FROM registros_de_morty ORDER BY id DESC LIMIT 1";
                    $resultado_ultimo_registro = mysqli_query($conexion, $sql);

                    if ($resultado_ultimo_registro->num_rows > 0) {
                        while ($ultimo_registro = $resultado_ultimo_registro->fetch_assoc()) {
                            $usuario = $ultimo_registro['usuario'];

                            $sql_cerebro = "SELECT * FROM cerebro_de_rick WHERE usuario='$usuario'";
                            $resultado_cerebro = mysqli_query($conexion, $sql_cerebro);

                            if ($resultado_cerebro->num_rows > 0) {
                                if($cerebro_registro = $resultado_cerebro->fetch_assoc()) {
                                    if ($cerebro_registro["rol"] == "MORTY") {
                                        echo "<a href='index_morty.php' style='margin:0px 0px 0px 240px'>Volver al Inicio</a>";
                                    } else {
                                        echo "<a href='index_rick.php' style='margin:0px 0px 0px 240px'>Volver al Inicio</a>";
                                    }
                                }
                            }
                        }
                    }
                    ?>

                </div>
            </div>
        </div>
    </div>
</body>
</html