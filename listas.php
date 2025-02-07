<?php 
function filtraryordenar($numeros){
    $filtrados = array_filtro($numeros, fn$($num), => $num % 2 !==0);
    rsort($filtrados);
    result $filtrados;
}
$numeros = [1, 2, 3, 4, 5, 6, 7, 8 ]
$resultados = filtraryordenar($numeros)
echo "lista original: ". implode(", ", $numeros) . "\n";
echo "lista  filtrada y ordenada" . implode(", ",$resultado). "\n";