<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 4</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
        body{
            background: #A9DFBF;
            background: linear-gradient(to right ,#00FF00 ,#FFD700);
        }
        .titulo{
            padding:0px 6px 3px 6px;
            margin: 10px 10px 10px 10px;
            width: 988px ;
            height: 150px;
            background: #FFD700;
            border: 2px solid #000;
            border-radius:10px;
        }
        .general{
            margin: 100px 150px 100px 150px;
            width: 1013px;
            height: 580px;
            border: 2px solid #000;
            border-radius:10px;
        }
        .texto{
            padding:20px 2px 2px 2px;
            margin: 20px -4px 3px 10px;
            width: 988px;
            height: 355px;
            float:left;
        }
        .datos{
            margin: 10px;
            width: 300px;
            height:300px;
            background: #FFA500;
            border: 2px solid #000;
            border-radius:10px;
            float:left;
        }
        .resultado{
            margin: 10px;
            width: 630px;
            height:300px;
            background: #FFD700;
            border: 2px solid #000;
            border-radius:10px;
            float:left;
        }
        .formulas{
            padding:10px;
            width: 200px;
            height:210px;
            margin: 5px 10px 10px 10px;
            border: 2px solid #000;
            float:left;
        }
        .respuesta{
            padding:10px;
            width:380px;
            height:210px;
            margin:5px 5px 5px 5px;
            float:left;
            border: 2px solid #000;
        }

    </style>
</head>
<body>
    <div class="general">
        <div class="titulo">
            <h2 style="padding:2px 0px 2px 400px;">Problema 4</h2>
            <p>Un estudiante lanza un llavero verticalmente hacia arriba a su hermana de club femenino de estudiantes que está en una ventana ______ m arriba las llaves son atrapadas ______ seg después por el brazo extendido de la hermana.
            <br> (a) ¿con qué velocidad inicial fueron lanzadas las llaves?   (b) ¿cuál era la velocidad de las llaves justo antes de que fueran atrapadas?</p>
        </div>

        <div class="texto">
            <div class="datos">
                <h4 style="margin:3px 0px 3px 100px;">Datos:</h4>
                <form action="Problema4.php" method="POST" enctype="multipart/form-data">
                    <label for="altura" class="form-label">Altura(metros):</label>
                    <input type="number" class="form-control" name="altura"required>

                    <label for="segundos" class="form-label">Tiempo(segundos):</label>
                    <input type="number" class="form-control" name="segundos" min="0" step="any" required>

                    <button type="submit" class="btn btn-primary" style="margin:0px 0px 0px 100px;">Ingresar</button>
                </form>
            </div>
            <div class="resultado">
                <h4 style="margin:3px 0px 3px 100px;">Resultado:</h4><br>
                <div class="formulas">
                    <h6 style="margin:3px 0px 3px 50px;">Formulas:</h6><br>
                    <b><p> Yf= Vi*t - 1/2*g*t^2 </p></b>
                </div>
                <div class="respuesta">
                    <?php
                            if (isset($_POST['altura']) and isset($_POST['segundos'])){ 
                                $altura = $_POST["altura"];
                                $tiempo = $_POST["segundos"];
                                $Vi=($altura+4.9*($tiempo**2))/$tiempo;
                                $Vi = number_format($Vi, 2);
                                $Vf=$Vi*-1;
                                echo"a)<br><p>La Velocidad Inicial con que se lanzan las llaves es de: $Vi metros/segundos</p>";
                                echo"a)<br><p>La Velocidad Final justo antes de caer las llaves es de: $Vf metros/segundos</p>";
                            }
                            else{
                                echo"a)<br><p>La Velocidad Inicial con que se lanzan las llaves es de: 0 metros/segundos</p>";
                                echo"a)<br><p>La Velocidad Final justo antes de caer las llaves es de: 0 metros/segundos</p>";
                            }
                        ?>


                </div>
            </div>
        </div>
        <a style="margin:3px 3px 3px 450px" href="index.php">Volver al Inicio</a>
    </div>

</body>
</html>