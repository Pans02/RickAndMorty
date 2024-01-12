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
        table {
            width: auto;
            height: auto;
            border-collapse: collapse;
            margin: 30px 70px 30px 70px;
        }

        th, td {
            border: 1px solid #000; 
            padding: 8px; 
            text-align: center; 
        }

    </style>
</head>
<body>
    <?php
        require_once("conn_ciudadela.php");
        $sql = "SELECT id, rol, rut ,nombre, apellido, f_nacimiento, telefono, email, usuario, contraseña, foto, adicional FROM cerebro_de_rick";
        $resultado = $conexion->query($sql);
        echo "<br>";

        if ($resultado->num_rows> 0) {

            echo "<table width='auto' height='auto' border='2'>";
            echo "<tr><th>id </th><th>rol </th><th>rut </th><th>nombre </th><th>apellido </th><th>fecha de nacimiento </th><th>telefono </th><th>email </th><th>usuario </th><th>contraseña </th><th>foto </th><th>adicional</th><th>INFORMACION</th>";
            
            while($fila = $resultado->fetch_assoc()) {
                $id=$fila["id"];
                echo "<form action='identidad.php' method='post'>"."<tr><td>"."<input type='hidden' name='id' id='id' value='$id'>"."<tr><td>".$fila["id"]." </td><td>".$fila["rol"]." </td><td>".$fila["rut"]." </td><td>".$fila["nombre"]." </td><td>".$fila["apellido"]." </td><td>".$fila["f_nacimiento"]." </td><td>".$fila["telefono"]." </td><td>".$fila["email"]." </td><td>".$fila["usuario"]." </td><td>".$fila["contraseña"]." </td><td>".$fila["foto"]." </td><td>".$fila["adicional"]."</td>"."<td>"."<input type='submit' value='Informacion del Usuario' class='btn btn_primary' name='crear'></form>"."</td></tr>";
            }
            echo "</table>";
        }
        else {
            echo "No se encontraron resultados.";
      }
    ?>
        <a href="index_rick.php"style="margin: 0px 0px 0px 700px;">Volver al inicio</a>
</body>
</html>