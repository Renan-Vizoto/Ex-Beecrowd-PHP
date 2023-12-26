<?php
$a = intval(fgets(STDIN));
$b = intval(fgets(STDIN));
$c = intval(fgets(STDIN));

$nota1 = ($a * 2)/10;
$nota2 = ($b * 3)/10;
$nota3 = ($c * 5)/10;

$media = $nota1 + $nota2 + $nota3;

$media_formatada = number_format($media,1,".","");

echo "MEDIA = " . $media_formatada . PHP_EOL;

?>