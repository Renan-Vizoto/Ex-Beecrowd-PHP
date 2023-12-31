<?php
$pi = 3.14159;

$raio = intval(fgets(STDIN));

$form = (4/3) * $pi * $raio**3;

$volume = sprintf("%.3f", $form);

echo "VOLUME = $volume" . PHP_EOL;
?>