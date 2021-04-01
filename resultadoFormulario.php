<meta charset="UTF-8">
<?php
$x = $_GET["v1"];
$y = $_GET["v2"];
echo "Valores Digitados: " . $x . " e " . $y . "<hr>";
$soma = $x + $y;
echo "Soma: " . $soma . "<br>";
$subtracao = $x - $y;
echo "Subtração: " . $subtracao . "<br>";
$multi = $x * $y;
echo "Multiplicação: " . $multi . "<br>";
$divisao = $x / $y;
echo "Divisão: " . $divisao . "<br>";
$resto = $x % $y;
echo "Resto da Divisão: " . $resto ;
?>