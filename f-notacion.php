<?php
echo ("Cual es tu nombre?");
$nombre = trim(fgets(STDIN));
echo ("Cual es tu Edad?");
$edad = trim(fgets(STDIN));
echo ("En que ciudad vives?");
$ciudad = trim(fgets(STDIN));

echo ("Hola, $nombre tienes $edad y vives en $ciudad . \n");
?>