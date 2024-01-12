<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 6</title>
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
            <h2 style="padding:2px 0px 2px 400px;">Problema 6</h2>
            <p>Un piloto de arrancones inicia la marcha de su vehículo desde reposo y acelera ______ metros/segundos^2 durante una distancia total de ______ m.
                <br> (a)¿cuánto tiempo tarda el carro en recorrer esta distancia?   (b)¿cuál es su velocidad al final del recorrido?</p>
        </div>

        <div class="texto">
            <div class="datos">
                <h4 style="margin:3px 0px 3px 100px;">Datos:</h4>
                <form action="Problema6.php" method="POST" enctype="multipart/form-data">
                    <label for="aceleracion" class="form-label">Aceleracion(metros/segundo^2):</label>
                    <input type="number" class="form-control" name="aceleracion"required>
                    
                    <label for="distancia" class="form-label">Distancia(metros):</label>
                    <input type="number" class="form-control" name="distancia" min="0" step="any" required><br><br>
                    

                    <button type="submit" class="btn btn-primary" style="margin:0px 0px 0px 100px;">Ingresar</button>
                </form>
            </div>
            <div class="resultado">
                <h4 style="margin:3px 0px 3px 100px;">Resultado:</h4><br>
                <div class="formulas">
                    <h6 style="margin:3px 0px 3px 50px;">Formulas:</h6>
                    <b> <p>Vf=Vi+a*t</p> <br> <p>Vf=√(Vi^2+2*a*d)</p> </b>
                </div>
                <div class="respuesta">
                <?php
                            if (isset($_POST['aceleracion']) and isset($_POST['distancia'])){ 
                                $ac = $_POST["aceleracion"];
                                $d= $_POST["distancia"];
                                $Vf=sqrt(2*$ac*$d);
                                $tiempo=$Vf/$ac;
                                $Vf=number_format($Vf,2);
                                $tiempo=number_format($tiempo,2);

                                echo"a)<p>El tiempo que tarda en recorrer la distancia es: $tiempo segundos</p>";
                                echo"b)<p>La velocidad al final del recorrido es: $Vf metros/segundos</p>";
                            }
                            else{
                                echo"a)<p>El tiempo que tarda en recorrer la distancia es: 0 segundos</p>";
                                echo"b)<p>La velocidad al final del recorrido es: 0 metros/segundos</p>";
                            }
                        ?>



                </div>

            </div>
        </div>
        <a style="margin:3px 3px 3px 450px" href="index.php">Volver al Inicio</a>
    </div>

</body>
</html>