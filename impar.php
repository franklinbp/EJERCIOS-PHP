<?php
$i=1;
while ($i <= 100) {
    if ($i %2== 0) {
        $i++;
        continue;
    }
    echo $i . "\n";
    $i++;
}
?>