<?php
$pi = 3.14159;
$input = fgets(STDIN);
list($a, $b, $c) = explode(" ", $input);

$a = floatval($a);
$b = floatval($b);
$c = floatval($c);

$triangulo = ($a * $c) / 2;
$triangulo_format = sprintf("%.3f", $triangulo);

$areaCirculo = $pi * $c**2;
$areaCirculo_format = sprintf("%.3f", $areaCirculo);

$trapezio = (($a + $b) * $c)/2;
$trapezio_format = sprintf("%.3f", $trapezio);

$quadrado = $b * $b;
$quadrado_format = sprintf("%.3f", $quadrado);

$retangulo = $a * $b;
$retangulo_format = sprintf("%.3f", $retangulo);

echo "TRIANGULO: $triangulo_format" . PHP_EOL;
echo "CIRCULO: $areaCirculo_format" . PHP_EOL;
echo "TRAPEZIO: $trapezio_format" . PHP_EOL;
echo "QUADRADO: $quadrado_format" . PHP_EOL;
echo "RETANGULO: $retangulo_format" . PHP_EOL;
?>