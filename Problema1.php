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
        body{
            background: #A9DFBF;
            background: linear-gradient(to right ,#00FF00 ,#FFD700);
        }
        .titulo{
            padding:0px 6px 3px 6px;
            margin: 20px 10px 10px 10px;
            width: 988px ;
            height: 150px;
            background: #FFD700;
            border: 2px solid #000;
            border-radius:10px;
        }
        .general{
            margin: 50px 150px 100px 150px;
            width: 1013px;
            height: 580px;
            border: 2px solid #000;
            border-radius:10px;
        }
        .texto{
            padding:20px 2px 2px 2px;
            margin: 10px -4px 3px 10px;
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
            margin: 10px 5px 5px 5px;
            width: 648px;
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
            <h2 style="padding:2px 0px 2px 400px;">Problema 1</h2>
            <p>Un jet aterriza con una velocidad de ______ metros/segundos y puede acelerar a una taza máxima de ______ metros/segundo^2 cuándo se va a detener
                a) A partir de instante en que toca la pista de aterrizaje ¿cuál es el tiempo mínimo necesario antes de que se detenga?
                b) este avión puede realizar en un pequeño aeropuerto donde la pista tiene _____ km de largo ¿cuál es el tiempo?</p>
        </div>

        <div class="texto">
            <div class="datos">
                <h4 style="margin:3px 0px 3px 100px;">Datos:</h4>
                <form action="Problema1.php" method="POST" enctype="multipart/form-data">
                    <label for="velocidad" class="form-label">Velocidad(Metros/segundos):</label>
                    <input type="number" class="form-control" name="velocidad" required>

                    <label for="aceleracion" class="form-label">Aceleracion(metros/segundo^2):</label>
                    <input type="number" class="form-control" name="aceleracion" required>

                    <label for="distancia" class="form-label">Distancia(KM):</label>
                    <input type="number" class="form-control" name="distancia" min="0" step="any" required>

                    <button type="submit" class="btn btn-primary" style="margin:0px 0px 0px 100px;">Ingresar</button>
                </form>
            </div>
            <div class="resultado">
                <h4 style="margin:3px 0px 3px 100px;">Resultado:</h4><br>
                <div class="formulas">
                    <h6 style="margin:3px 0px 3px 50px;">Formulas:</h6>
                    <b><p>Vf=Vi+a*t   Vf=0</p> <br> d=Vi*t+1/2*a*t^2</b>
                </div>
                <div class="respuesta">
                    <p>a)
                    <?php
                        if (isset($_POST['velocidad']) and isset($_POST['aceleracion']) and isset($_POST['distancia'])){ 
                            $vel = $_POST["velocidad"];
                            $ac = $_POST["aceleracion"];
                            $tiempo=abs($vel/$ac);
                            $tiempo = number_format($tiempo,2);
                            echo"<p>El tiempo minimo necesario es: $tiempo segundos</p>";
                        }
                        else{
                            echo"<p>El tiempo minimo necesario es: 0 segundos</p>";
                        }
                    ?> </p>
                    <p>b)
                    <?php
                        if (isset($_POST['velocidad']) and isset($_POST['aceleracion']) and isset($_POST['distancia'])){ 
                            $vel = $_POST["velocidad"];
                            $ac = $_POST["aceleracion"];
                            $d = $_POST["distancia"];
                            $ac=$ac/2;
                            $d=$d*-1000;
                            $tiempo1 = ( (-1)*$vel  -  sqrt(($vel*$vel)-4*($ac)*($d)))  / (2*$ac);
                            $tiempo2 = ( (-1)*$vel  +  sqrt(($vel*$vel)-4*($ac)*($d)))  /  (2*$ac);
                            $tiempo1 = number_format($tiempo1, 2);
                            $tiempo2 = number_format($tiempo2, 2);
                            if($tiempo1>=$tiempo2){
                                echo"<p>El tiempo minimo necesario es: $tiempo1 segundos</p>";
                            }
                            else{
                                echo"<p>El tiempo es: $tiempo2 segundos</p>";
                            }
                        }
                        else{
                            echo"<p>El tiempo minimo necesario es: 0 segundos</p>";
                        }
                    ?> 
                    </p>


                </div>
            </div>
        </div>
        <a style="margin:3px 3px 3px 450px" href="index.php">Volver al Inicio</a>
    </div>

</body>
</html>