<?php
$a = floatval(fgets(STDIN));
$b = floatval(fgets(STDIN));

$nota1 = ($a * 3.5)/11;
$nota2 = ($b * 7.5)/11;

$media = $nota1 + $nota2;

$media_formatada = number_format($media,5,".","");

if ($media_formatada > 10) {
    $media_formatada = 10;
    echo "MEDIA = $media_formatada" . PHP_EOL;
} else {
    echo "MEDIA = $media_formatada" . PHP_EOL;
}

?>