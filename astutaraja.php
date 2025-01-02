<?php
$total = 64;
$granos = 1;

echo "casillas      |   granos en las casillas \n";
for ($i = 1; $i <= $total; $i++) {
    echo "$i    |   $granos\n";
    $granos *= 2;
}
?>
