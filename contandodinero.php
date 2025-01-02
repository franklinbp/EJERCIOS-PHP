<?php
$suma = 0;
while (true ) {
    echo"Ingrese un numero (Ingresa un numero negativo para terminar: )";
    $numero = (float)trim(fgets(STDIN));
    if ($numero < 0) {
        break;
    }
    $suma += $numero;
}
echo "La suma += $suma\n";
?>