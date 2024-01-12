<?php

// Documentación: https://rickandmortyapi.com/api/character

$id_personaje = "2";

$url = "https://rickandmortyapi.com/api/character/" . $id_personaje;

$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
$response = curl_exec($ch);

curl_close($ch);

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
