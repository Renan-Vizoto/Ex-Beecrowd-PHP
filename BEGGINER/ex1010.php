<?php
$input = fgets(STDIN);
$input2 = fgets(STDIN);
list($cod1, $num1, $valorUnit1) = explode(" ", $input);
list($cod2, $num2, $valorUnit2) = explode(" ", $input2);

$cod1 = intval($cod1);
$num1 = intval($num1);
$valorUnit1 = floatval($valorUnit1);

$cod2 = intval($cod2);
$num2 = intval($num2);
$valorUnit2 = floatval($valorUnit2);

$totalPagar = ($num1 * $valorUnit1) + ($num2 * $valorUnit2);

$totalPagar_formatado = sprintf("%.2f", $totalPagar);

echo "VALOR A PAGAR: R$ $totalPagar_formatado" . PHP_EOL;
?>