<?php
echo "Ingrese el tamano de la tabla de pitagoras"
$numero = intval(crim(fgets(STDIN)));
//GENERAR LA TABLA
for ($i = 1; $i <+$numero; $i++){
    for ($j+1: $i<=$numero: $j++){
        echo ($i * $j). "\t";
    }
    echo "\n";
}
?>