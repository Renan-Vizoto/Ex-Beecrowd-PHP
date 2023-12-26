<?php
$input = fgets(STDIN);
list($a, $b, $c, $d) = explode(' ', $input);

$a = intval($a);
$b = intval($b);
$c = intval($c);
$d = intval($d);

$hora1 = ($a * 60) + $b;
$hora2 = ($c * 60) + $d;

if ($hora2 <= $hora1) {
    $menos = ($hora2 - $hora1) + 24 * 60;
} else {
    $menos = $hora2 - $hora1;
}

$resHora = intval($menos / 60);
$resMin = $menos % 60;

echo "O JOGO DUROU $resHora HORA(S) E $resMin MINUTO(S)"
?>