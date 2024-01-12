<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Problema 5</title>
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
            height: 670px;
            border: 2px solid #000;
            border-radius:10px;
        }
        .texto{
            padding:20px 2px 2px 2px;
            margin: 20px -4px 3px 10px;
            width: 1000px;
            height: 355px;
            float:left;
        }
        .datos{
            margin: 10px;
            width: 300px;
            height:380px;
            background: #FFA500;
            border: 2px solid #000;
            border-radius:10px;
            float:left;
        }
        .resultado{
            margin: 10px;
            width: 630px;
            height:380px;
            background: #FFD700;
            border: 2px solid #000;
            border-radius:10px;
            float:left;
        }
        .formulas{
            padding:10px;
            width: 200px;
            height:290px;
            margin: 5px 10px 10px 10px;
            border: 2px solid #000;
            float:left;
        }
        .respuesta{
            padding:10px;
            width:380px;
            height:290px;
            margin:5px 5px 5px 5px;
            float:left;
            border: 2px solid #000;
        }

    </style>
</head>
<body>
    <div class="general">
        <div class="titulo">
            <h2 style="padding:2px 0px 2px 400px;">Problema 5</h2>
            <p>Se informó que una mujer cayó ______ pies desde el piso 17 de un edificio aterrizando sobre una caja de ventilador metálica la cual sumió hasta una profundidad de ______ pulgadas. Solo sufrió lesiones menores. Ignore la resistencia del aire y calcule:
                <br>(a) la velocidad de la mujer exactamente antes de chocar con el ventilador     (b) su aceleración promedio mientras está en contacto con la caja   y     (c) el tiempo que tarda en sumir la caja</p>
        </div>

        <div class="texto">
            <div class="datos">
                <h4 style="margin:3px 0px 3px 100px;">Datos:</h4>
                <form action="Problema5.php" method="POST" enctype="multipart/form-data">
                    <label for="altura" class="form-label">Altura(pies):</label>
                    <input type="number" class="form-control" name="altura" required><br>

                    <label for="profundidad" class="form-label">Profundidad(pulgadas):</label>
                    <input type="number" class="form-control" name="profundidad" min="0" step="any" required><br><br>
                  

                    <button type="submit" class="btn btn-primary" style="margin:0px 0px 0px 100px;">Ingresar</button>
                </form>
            </div>
            <div class="resultado">
                <h4 style="margin:3px 0px 3px 100px;">Resultado:</h4><br>
                <div class="formulas">
                    <h6 style="margin:3px 0px 3px 50px;">Formulas:</h6>
                    <b><p>Conversion de Unidades: <br>metros = ft*0.3048 <br> metros = in*0.0254</p> <p>Vi=√(2*a*d)</p><p>d=1/2*g*t^2</p> </b>
                </div>
                <div class="respuesta">
                        <?php
                            if (isset($_POST['altura']) and isset($_POST['profundidad'])){ 
                                $altura = $_POST["altura"];
                                $profundidad = $_POST["profundidad"];
                                $altura=$altura*0.3048;
                                $profundidad=$profundidad*0.0254;

                                $Vi=sqrt(2*9.8*$altura);
                                $Vi = number_format($Vi, 2);
                                $ac=9.8;
                                $tiempo=sqrt($profundidad/4.9);
                                $tiempo=number_format($tiempo,2);
                                echo"a)<p>La Velocidad de la mujer antes de chocar es :$Vi metros/segundos</p>";
                                echo"b)<p>Su aceleracion promedio es constante y es de :$ac metros/segundos^2</p>";
                                echo"c)<p>El tiempo que tarda en sumir la caja es: $tiempo segundos</p>";
                            }
                            else{
                                echo"a)<p>La Velocidad de la mujer antes de chocar es: 0 metros/segundos</p>";
                                echo"b)<p>Su aceleracion promedio es constante y es de: 0 metros/segundos^2</p>";
                                echo"c)<p>El tiempo que tarda en sumir la caja es: 0 segundos</p>";
                            }
                        ?>
                </div>
            </div>
        </div>
        <a style="float:left; margin:80px 3px 3px 445px;" href="index.php">Volver al Inicio</a>
    </div>
                            

</body>
</html>