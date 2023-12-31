<?php
$numFunc = intval(fgets(STDIN));

$numHrTrab = intval(fgets(STDIN));
$valorHr = floatval(fgets(STDIN));

$salary = $numHrTrab * $valorHr;

$salary_format = number_format($salary,2,".","");

echo "NUMBER = $numFunc" . PHP_EOL;
echo "SALARY = U$ $salary_format";
?>