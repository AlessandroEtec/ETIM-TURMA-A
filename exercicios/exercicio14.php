<h1>Exercício 14</h1>
<a href="index.php">Voltar</a>
<p>Crie uma página que mostre os números de 10 (inclusive) a 100 (inclusive)
 em ordem crescente. 
</p>

<?php
$inicio = 10;
$fim = 100;

while($inicio <= $fim){
    echo $inicio++ . "<br>";
}
?>