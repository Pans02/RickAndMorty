<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 3</title>
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
            height: 700px;
            border: 2px solid #000;
            border-radius:10px;
        }
        .texto{
            padding:20px 2px 2px 2px;
            margin: 20px -7px 3px 10px;
            width: 988px;
            height: 465px;
            float:left;
        }
        .datos{
            margin: 10px;
            width: 300px;
            height:400px;
            background: #FFA500;
            border: 2px solid #000;
            border-radius:10px;
            float:left;
        }
        .resultado{
            margin: 10px;
            width: 630px;
            height:398px;
            background: #FFD700;
            border: 2px solid #000;
            border-radius:10px;
            float:left;
        }
        .formulas{
            padding:10px;
            width: 200px;
            height:300px;
            margin: 5px 10px 10px 10px;
            border: 2px solid #000;
            float:left;
        }
        .respuesta{
            padding:10px;
            width:380px;
            height:300px;
            margin:5px 5px 5px 5px;
            float:left;
            border: 2px solid #000;
        }

    </style>
</head>
<body>
    <div class="general">
        <div class="titulo">
            <h2 style="padding:2px 0px 2px 400px;">Problema 3</h2>
            <p>Una pelota de golf se suelta desde reposo del techo de un edificio muy alto depreciando de la existencia del aire. <br> Calcule: 
                 (a) la posición  y   (b) la velocidad de la pelota después de ____seg, _____seg y ______seg</p>
        </div>

        <div class="texto">
            <div class="datos">
                <h4 style="margin:3px 0px 3px 100px;">Datos:</h4>
                <form action="Problema3.php" method="POST" enctype="multipart/form-data">
                    <label for="altura" class="form-label">Altura(metros):</label>
                    <input type="number" class="form-control" name="altura" required>

                    <label for="segundo1" class="form-label">Tiempo 1(segundos):</label>
                    <input type="number" class="form-control" name="segundo1" min="0" step="any" required>
                    

                    <label for="segundo2" class="form-label">Tiempo 2(segundos):</label>
                    <input type="number" class="form-control" name="segundo2" min="0" step="any" required>

                    <label for="segundo3" class="form-label">Tiempo 3(segundos):</label>
                    <input type="number" class="form-control" name="segundo3" min="0" step="any" required>

                    <button type="submit" class="btn btn-primary" style="margin:0px 0px 0px 100px;">Ingresar</button>
                </form>
            </div>
            <div class="resultado">
                    <h4 style="margin:3px 0px 3px 100px;">Resultado:</h4><br>
                    <div class="formulas">
                        <h6 style="margin:3px 0px 3px 50px;">Formulas:</h6><br>
                        <b><p>Yf= Yi+Vi*t+1/2*a*t^2</p> <br><p>Vf=Vi+a*t</p></b>
                    </div>
                    <div class="respuesta">
                    <?php
                        if (isset($_POST['altura']) and isset($_POST['segundo1'])and isset($_POST['segundo2'])and isset($_POST['segundo3'])){ 
                            $altura = $_POST["altura"];
                            $t1 = $_POST["segundo1"];
                            $t2 = $_POST["segundo2"];
                            $t3 = $_POST["segundo3"];
                            $posicion1=$altura+4.9*($t1**2);
                            $vel1=9.8*$t1;

                            $posicion2=$altura+4.9*($t2**2);
                            $vel2=9.8*$t2;

                            $posicion3=$altura+4.9*($t3**2);
                            $vel3=9.8*$t3;

                            echo"a)<br><p>En el segundo 1 su posicion es: $posicion1 metros y su velocidad es: $vel1 metros/segundos</p>";
                            echo"a)<br><p>En el segundo 2 su posicion es: $posicion2 metros y su velocidad es: $vel2 metros/segundos</p>";
                            echo"a)<br><p>En el segundo 3 su posicion es: $posicion3 metros y su velocidad es: $vel3 metros/segundos</p>";
                        }
                        else{
                            echo"a)<br><p>En el segundo 1 su posicion es: 0 metros y su velocidad es: 0 metros/segundos</p>";
                            echo"a)<br><p>En el segundo 2 su posicion es: 0 metros y su velocidad es: 0 metros/segundos</p>";
                            echo"a)<br><p>En el segundo 3 su posicion es: 0 metros y su velocidad es: 0 metros/segundos</p>";
                        }
                    ?> </p>
                    </div>
            </div>
        </div>
        <a style="margin:3px 3px 3px 450px" href="index.php">Volver al Inicio</a>
    </div>

</body>
</html>