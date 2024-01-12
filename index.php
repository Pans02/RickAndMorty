<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <?php
        $numeros_random = array();

       
        for ($i = 0; $i < 7; $i++) {
            $numeros_random[$i] = rand(1, 100); 
        }
    ?>
    
    <style>
        

        .contenedor {
            min-width: 100%;
            height: 2868px;
            background: #A9DFBF;
            background: linear-gradient(to right, #00FF00, #FFD700);
            border: 2px solid black; 
        }

        .header {
            width: 1500px;
            height: 0px;
            float: left;
        }

        .titulo{

            font-size: 3rem;
            text-shadow: 0 0 15px #ffff00;
            color: #00ffff;
            font-family: 'Delicious Handrawn', cursive;
            animation: title 1s infinite;
            margin: 0px 0px 0px 245px

        }

        @keyframes title{
            50%{
                text-shadow: 0 0 15px #00ffff;
                color: #ffff00;
            }

        }

        .navbar-nav {
            margin-left: auto; 
        }

        .logo {
            width: 100x; 
            height: 50px; 
        }

        .navbar-nav .nav-item .nav-link {
            color: black; 
            transition: color 0.3s; 
        }

        
        .navbar-nav .nav-item .nav-link:hover {
            color: #81f712; 
        }

        .main {
            background-color: black; 
            width: 1000px;
            height: 535px; 
            margin: 76px 350px 115px 300px; 
            float: left;
        }

        .cuerpo {
            min-width: 100%; 
            height: 1050px; 
            float: left;
            background: #1C2833; 
            border: 2px solid black;
        }

        .personajes {
            width: 20%;
            height: 466px;
            background: #566573 ;
            float: left;
            margin: 30px -80px 15px 185px;
            border-radius: 10px; 
            border: 2px solid black; 
        }

        .cuerpo-img {
            width: 347px;
            height: 233px;
            background: red;
            float: left;
            border-radius: 10px 10px 0px 10px;
            border: 2px solid black;
        
        }

        .cuerpo-texto {
            width: 347px;
            height: 230px;
            background: orange;
            float: left;
            border-radius: 10px 10px 10px 10px;
            border: 2px solid black;
        }

        .cuerpo_b {
            min-width: 100%; 
            height: 1100px; 
            margin: 0px 0px 0px 0px;
            float: left;
            background: #A9DFBF;
            background: linear-gradient(to right, #00FF00, #FFD700);
            border: 2px solid black;
        }

        .general-noticia{

            width: 40%; 
            height: 430px; 
            float: left;
            background: #1C2833;  
            margin: 30px -20px 10px 115px;
            border: 2px solid black;
            border-radius: 10px;

        }

        .general-noticia h5 a {
            color: white; 
            text-decoration: none; 
        }

        .general-noticia h5 a:hover {
            text-decoration: underline; 
        }

        .general-img{
            width: 45%; 
            height: 360px; 
            float: left;
            background: #ffff00; 
            margin:  0px 10px 10px 25px;
     


        }

        .general-texto{
            width: 45%; 
            height: 360px; 
            float: left;
            background: #ffff00; 
            margin:  0px 10px 10px 10px;
            border: 2px solid black;
            border-radius: 10px;

        }

        .cuerpo-texto {
        font-family: Arial, sans-serif;
        color: black;
        font-size: 18px;
        transition: background-color 0.3s; 
        }

       
        .cuerpo-texto:hover {
            background: #81f712;
                border: 2px solid black; 
        }
        

        .botones{
            width:290px;
            height:50px;
            margin: 30px 0px 20px 630px;
            float:left;
        }
        
        .footer{
            min-width: 100%; 
            height: 100px; 
            margin:-5px 0px 0px 0px;
            float: left;
            background: #1C2833;
            border: 2px solid black;
        }

        
    </style>
</head>
<body>

    <div class="contenedor">
    <br><br>
    <div id="ribbon">
    <!-- Navbar de Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top" style="background: #A9DFBF;">
        <div class="container">
            <a class="navbar-brand" href="https://rickandmortyapi.com/" target="_blank">
                <img src="https://cesar959.github.io/rick-and-morty/img/logo.png" alt="Rick and Morty Logo" style="height: 65px; width: auto;">
            </a>
                <div class = "titulo"> Rick And Morty News</div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Registro.php">Registrarse</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="Login.php">Iniciar sesión</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Ejercicios
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                            <li><a class="dropdown-item" href="Problema1.php">Problema 1</a></li>
                            <li><a class="dropdown-item" href="Problema2.php">Problema 2</a></li>
                            <li><a class="dropdown-item" href="Problema3.php">Problema 3</a></li>
                            <li><a class="dropdown-item" href="Problema4.php">Problema 4</a></li>
                            <li><a class="dropdown-item" href="Problema5.php">Problema 5</a></li>
                            <li><a class="dropdown-item" href="Problema6.php">Problema 6</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>
    <div class="main">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="https://p3.no/filmpolitiet/wp-content/uploads/2021/06/S05RickandMorty.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.nme.com/wp-content/uploads/2022/10/Rick_And_Morty_Portal_Gun_JuRicksic_Mort.jpg" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="https://www.nme.com/wp-content/uploads/2021/06/rick-and-morty-s5-cold-open.jpg" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>

        <div class="cuerpo">     

            <div class="personajes">
                <?php

                $url = "https://rickandmortyapi.com/api/character/" . $numeros_random[0];
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
                $morty_data = json_decode($response, true);

                ?>

                <div class = "cuerpo-img">
                    <img src="<?php echo $morty_data['image']; ?>" alt="Morty's Image" style="width: 347px; height:233px; border-radius: 10px 10px 10px 10px;">

                </div>    

               <div class="cuerpo-texto" style="font-family: Arial, sans-serif; color: black; font-size: 18px;">
                <h3><?php echo $morty_data["name"]; ?></h3>
                <p>* last known location: <?php echo $morty_data["location"]["name"]; ?></p>
                <p>* Status: <?php echo $morty_data["status"]; ?></p>
                <p>* Species: <?php echo $morty_data["species"]; ?></p>
                <p>* Gender: <?php echo $morty_data["gender"]; ?></p>
                    
                </div>


            </div>

            <div class="personajes">

                <?php

                $url = "https://rickandmortyapi.com/api/character/" . $numeros_random[1];
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
                $morty_data = json_decode($response, true);

                ?>

                <div class = "cuerpo-img">
                    <img src="<?php echo $morty_data['image']; ?>" alt="Morty's Image" style="width: 347px; height:233px; border-radius: 10px 10px 10px 10px;">

                </div>    

                <div class="cuerpo-texto" style="font-family: Arial, sans-serif; color: black; font-size: 18px;">
                <h3><?php echo $morty_data["name"]; ?></h3>
                <p>* last known location: <?php echo $morty_data["location"]["name"]; ?></p>
                <p>* Status: <?php echo $morty_data["status"]; ?></p>
                <p>* Species: <?php echo $morty_data["species"]; ?></p>
                <p>* Gender: <?php echo $morty_data["gender"]; ?></p>
                    
                </div>


            </div>

            <div class="personajes">
                <?php

                $url = "https://rickandmortyapi.com/api/character/" . $numeros_random[2];
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
                $morty_data = json_decode($response, true);

                ?>

                <div class = "cuerpo-img">
                    <img src="<?php echo $morty_data['image']; ?>" alt="Morty's Image" style="width: 347px; height:233px; border-radius: 10px 10px 10px 10px;">

                </div>    

                <div class="cuerpo-texto" style="font-family: Arial, sans-serif; color: black; font-size: 18px;">
                <h3><?php echo $morty_data["name"]; ?></h3>
                <p>* last known location: <?php echo $morty_data["location"]["name"]; ?></p>
                <p>* Status: <?php echo $morty_data["status"]; ?></p>
                <p>* Species: <?php echo $morty_data["species"]; ?></p>
                <p>* Gender: <?php echo $morty_data["gender"]; ?></p>
                    
            </div>


            </div>

            <div class="personajes">


                <?php

                $url = "https://rickandmortyapi.com/api/character/" . $numeros_random[3];
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
                $morty_data = json_decode($response, true);

                ?>
                <div class = "cuerpo-img">
                    <img src="<?php echo $morty_data['image']; ?>" alt="Morty's Image" style="width: 347px; height:233px; border-radius: 10px 10px 10px 10px;">

                </div>    

                <div class="cuerpo-texto" style="font-family: Arial, sans-serif; color: black; font-size: 18px;">
                <h3><?php echo $morty_data["name"]; ?></h3>
                <p>* last known location: <?php echo $morty_data["location"]["name"]; ?></p>
                <p>* Status: <?php echo $morty_data["status"]; ?></p>
                <p>* Species: <?php echo $morty_data["species"]; ?></p>
                <p>* Gender: <?php echo $morty_data["gender"]; ?></p>
                    
                </div>


            </div>

            <div class="personajes">

                <?php

                $url = "https://rickandmortyapi.com/api/character/" . $numeros_random[4];
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
                $morty_data = json_decode($response, true);

                ?>

                <div class = "cuerpo-img">
                    <img src="<?php echo $morty_data['image']; ?>" alt="Morty's Image" style="width: 347px; height:233px; border-radius: 10px 10px 10px 10px;">

                </div>    

                <div class="cuerpo-texto" style="font-family: Arial, sans-serif; color: black; font-size: 18px;">
                <h3><?php echo $morty_data["name"]; ?></h3>
                <p>* last known location: <?php echo $morty_data["location"]["name"]; ?></p>
                <p>* Status: <?php echo $morty_data["status"]; ?></p>
                <p>* Species: <?php echo $morty_data["species"]; ?></p>
                <p>* Gender: <?php echo $morty_data["gender"]; ?></p>
                    
                </div>


            </div>

            <div class="personajes">

                <?php

                $url = "https://rickandmortyapi.com/api/character/" . $numeros_random[5];
                $ch = curl_init();
                curl_setopt($ch, CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                $response = curl_exec($ch);
                curl_close($ch);
                $morty_data = json_decode($response, true);

                ?>

                <div class = "cuerpo-img">
                    <img src="<?php echo $morty_data['image']; ?>" alt="Morty's Image" style="width: 347px; height:233px; border-radius: 10px 10px 10px 10px;">

                </div>    

                <div class="cuerpo-texto" style="font-family: Arial, sans-serif; color: black; font-size: 18px;">
                <h3><?php echo $morty_data["name"]; ?></h3>
                <p>* last known location: <?php echo $morty_data["location"]["name"]; ?></p>
                <p>* Status: <?php echo $morty_data["status"]; ?></p>
                <p>* Species: <?php echo $morty_data["species"]; ?></p>
                <p>* Gender: <?php echo $morty_data["gender"]; ?></p>
                    
                </div>


            </div>

        </div>

        <div class = "cuerpo_b">
                <h2><center><p>Noticias</p></center></h2>

            <?php
                require_once("conn_ciudadela.php");
                $sql = "SELECT id, titulo, resumen, link, img FROM noticias_de_rick WHERE id=1";
                $resultado = $conexion->query($sql);
                echo "<br>";

            ?>

                <div class = "general-noticia">

                    <center><h5 style="color:white;"> <?php 
                    while ($fila = $resultado->fetch_assoc()) {
                        echo $fila['titulo'];
                    ?></h5></center>
                        <div class = "general-img">
                            <img src="<?php echo $fila['img']; ?>" width="100%" height="360px" border-radius = "10px" alt="Descripción de la imagen">
              
                        </div>

                        <div class = "general-texto">
                            <p><h4><?php echo $fila['resumen'];  ?></h4>
                            <?php
                                $qrData = "Link: " . $fila['link'] . "\n";    

                                $qr = "https://api.qrserver.com/v1/create-qr-code/?data=" . urlencode($qrData) . "&size=300x300&ecc=L";
                                echo '<img src="' . $qr . '" alt="Código QR" style="margin:0px 0px 0px 50px; width:150px; height:150px;">';
                            }

                            ?>
                        </p>
                        </div>
                       
                </div>
                <?php
                    require_once("conn_ciudadela.php");
                    $sql = "SELECT id, titulo, resumen, link, img FROM noticias_de_rick WHERE id=2";
                    $resultado = $conexion->query($sql);
                echo "<br>";
                ?>
                <div class = "general-noticia" style="margin: 5px -20px 50px 115px;">
                <center><h6 style="color:white;"> <?php 
                    while ($fila = $resultado->fetch_assoc()) {
                        echo $fila['titulo'];
                    ?></6></center>
                        <div class = "general-img">
                            <img src="<?php echo $fila['img']; ?>" width="100%" height="360px" border-radius = "10px" alt="Descripción de la imagen">
            
                        </div>

                        <div class = "general-texto">
                            <p><h4><?php echo $fila['resumen'];  ?></h4>
                            <?php
                                $qrData = "Link: " . $fila['link'] . "\n";    

                                $qr = "https://api.qrserver.com/v1/create-qr-code/?data=" . urlencode($qrData) . "&size=300x300&ecc=L";
                                echo '<img src="' . $qr . '" alt="Código QR" style="margin:0px 0px 0px 50px; width:150px; height:150px;">';
                            }

                            ?>
                        </p>
                        </div>
                </div>

                <?php
                    require_once("conn_ciudadela.php");
                    $sql = "SELECT id, titulo, resumen, link, img FROM noticias_de_rick WHERE id=3";
                    $resultado = $conexion->query($sql);
                    echo "<br>";
                ?>
                <div class = "general-noticia">
                <center><h5 style="color:white;"> <?php 
                    while ($fila = $resultado->fetch_assoc()) {
                        echo $fila['titulo'];
                    ?></h5></center>
                        <div class = "general-img">
                            <img src="<?php echo $fila['img']; ?>" width="100%" height="360px" border-radius = "10px" alt="Descripción de la imagen">
            
                        </div>

                        <div class = "general-texto">
                            <p><h4><?php echo $fila['resumen'];  ?></h4>
                            <?php
                                $qrData = "Link: " . $fila['link'] . "\n";    

                                $qr = "https://api.qrserver.com/v1/create-qr-code/?data=" . urlencode($qrData) . "&size=300x300&ecc=L";
                                echo '<img src="' . $qr . '" alt="Código QR" style="margin:0px 0px 0px 50px; width:150px; height:150px;">';
                            }

                            ?>
                        </p>
                        </div>
                </div>
                <?php
                    require_once("conn_ciudadela.php");
                    $sql = "SELECT id, titulo, resumen, link, img FROM noticias_de_rick WHERE id=4";
                    $resultado = $conexion->query($sql);
                    echo "<br>";
                ?>
                <div class = "general-noticia">
                     <center><h5 style="color:white;"> <?php 
                    while ($fila = $resultado->fetch_assoc()) {
                        echo $fila['titulo'];
                    ?></h5></center>
                        <div class = "general-img">
                            <img src="<?php echo $fila['img']; ?>" width="100%" height="360px" border-radius = "10px" alt="Descripción de la imagen">
            
                        </div>

                        <div class = "general-texto">
                            <p><h4><?php echo $fila['resumen'];  ?></h4>
                            <?php
                                $qrData = "Link: " . $fila['link'] . "\n";    

                                $qr = "https://api.qrserver.com/v1/create-qr-code/?data=" . urlencode($qrData) . "&size=300x300&ecc=L";
                                echo '<img src="' . $qr . '" alt="Código QR" style="margin:0px 0px 0px 50px; width:150px; height:150px;">';
                    }

                            ?>
                        </p>
                        </div>
                </div>      
        </div>


        <div class = "footer">

        </div>

    </div>

   <!-- JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script> 
</body>
</html>
