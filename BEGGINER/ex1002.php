<?php
$n = 3.14159;
$raio = floatval(fgets(STDIN));
$area = $n * $raio**2;

$area_formatada = number_format($area, 4, '.', '');

echo "A = " . $area_formatada . PHP_EOL;
?>