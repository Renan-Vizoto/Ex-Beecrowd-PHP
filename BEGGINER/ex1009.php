<?php
$nome = trim(fgets(STDIN));
$salFix = floatval(fgets(STDIN));
$valorVendasTotais = floatval(fgets(STDIN));

$porcentVenda = 0.15 * $valorVendasTotais;

$aReceber = $salFix + $porcentVenda;

$aReceber_Format = sprintf("%.2f", $aReceber);

echo "TOTAL = R$ $aReceber_Format" . PHP_EOL;
?>