<?php

// Documentación: https://rickandmortyapi.com/api/character

// ID del personaje
$id_personaje = "2";

$url = "https://rickandmortyapi.com/api/character/" . $id_personaje;

// Inicializa cURL
$ch = curl_init();

// Configurar las opciones cURL
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

// Ejecutar la solicitud y almacenar la respuesta
$response = curl_exec($ch);

// Cerramos la conexion
curl_close($ch);

//echo $response;

$morty_data = json_decode($response, true);

echo "<pre>";
print_r( $morty_data);
echo "</pre>";
echo "<br>";
echo $morty_data["id"];
echo "<br>";
echo $morty_data["name"];
echo "<br>";
echo "<img src='" . $morty_data['image'] . "'>";
