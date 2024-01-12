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
            height: 1000px; 
            margin:-5px 0px 0px 0px;
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
            margin: 0px 0px 20px 630px;
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
    <div id="ribbon">
    <!-- Navbar de Bootstrap -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light fixed-top"
        style="background: #A9DFBF;">
        <div class="container">
        <a class="navbar-brand" href="https://rickandmortyapi.com/" target="_blank">
                <img src="https://cesar959.github.io/rick-and-morty/img/logo.png" alt="Rick and Morty Logo"
                    style="height: 40px; width: auto;">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
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

                <div class = "general-noticia">

                    <<center><h5><a href="https://www.mdzol.com/napsix/2023/12/29/no-creeras-como-serian-rick-morty-en-la-vida-real-segun-la-inteligencia-artificial-395356.html">No creerás cómo serían Rick y Morty en la vida real</a></h5></center>
                        <div class = "general-img">
                            <img src="https://www.mdzol.com/u/fotografias/m/2023/12/29/f1456x819-1529777_1700147_5050.png" width="100%" height="360px" border-radius = "10px" alt="Descripción de la imagen">
              
                        </div>

                        <div class = "general-texto">

                            <p><h2>Los internautas le pidieron a Midjourney crear imágenes con las versiones más reales posibles de los míticos personajes animados.</h2></p>
                        </div>
                       
                </div>

                <div class = "general-noticia">
                        <center><h5><a href="https://comicbook.com/anime/news/rick-and-morty-seson-7-improv-ian-cardoni-interview/">El nuevo actor de Rick revela cuánta improvisación hubo en la temporada 7.</a></h5></center>
                        <div class = "general-img">
                            <img src="https://sportshub.cbsistatic.com/i/2023/12/18/aefd4076-eeb3-4825-b9f8-ba0771338769/rick-and-morty-season-7-adult-morty-grows-up.jpg?auto=webp&width=1200&height=675&crop=1.778:1,smart" width="100%" height="360px" alt="Descripción de la imagen">
              
                        </div>

                        <div class = "general-texto">

                            <p><h2>¡Ian Cardoni de Rick y Morty habló sobre cuánta improvisación hubo en los episodios de la temporada 7!</h2></p>
                        </div>


                </div>

      
                <div class = "general-noticia">
                        <center><h5><a href="https://comicbook.com/anime/news/rick-and-morty-harry-belden-evil-morty-interview/">El nuevo actor de Morty reacciona a ser el malvado Morty</a></h5></center>
                        <div class = "general-img">
                            <img src="https://sportshub.cbsistatic.com/i/2023/11/13/e434e3ca-96a3-43c2-898e-853bd37b1c53/rick-and-morty-season-7-evil-morty-origin.jpg?auto=webp&width=1200&height=675&crop=1.778:1,smart" width="100%" height="360px" alt="Descripción de la imagen">
              
                        </div>

                        <div class = "general-texto">

                            <p><h2>El nuevo actor de voz de Rick y Morty, Harry Belden, compartió su reacción al interpretar a Evil Morty por primera vez.</h2></p>
                        </div>
                </div>

                <div class = "general-noticia">
                        <center><h5><a href="https://comicbook.com/anime/news/rick-and-morty-evil-summer-spencer-grammer-interview/">La estrella de Rick y Morty presenta la historia perfecta del verano malvado</a></h5></center>
                        <div class = "general-img">
                            <img src="https://sportshub.cbsistatic.com/i/2023/08/24/125a5b28-9054-47a2-bec5-a4a79d773314/rick-and-morty-season-7-preview-evil-summer.jpg?auto=webp&width=1200&height=628&crop=1.911:1,smart" width="100%" height="360px" alt="Descripción de la imagen">
              
                        </div>

                        <div class = "general-texto">

                            <p><h2>¡Spencer Grammer de Rick y Morty tiene grandes ideas para los episodios de Evil Summer!</h2></p>
                        </div>

        

                </div>
                <div class="botones">
                    <button type="button" class="btn btn-dark">Ingresar</button>
                    <button type="button" class="btn btn-dark">Modificar</button>
                    <button type="button" class="btn btn-dark">Eliminar</button>
                </div>
        
        </div>


        <div class = "footer">

        </div>

    </div>

    <!-- JavaScript de Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>
