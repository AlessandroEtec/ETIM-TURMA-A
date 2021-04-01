<h1> while.php </h1>
<?php
$i = 0;
while ($i < 10) {
    echo 'Valor de i = ' . $i . '<br>';
    $i++; // ou $i = $i + 1
}
echo 'Outro while <br>';
$a = 10;
while ($a > 0) {
    echo 'Valor de a = ' . $a . '<br>';
    $a--; // ou $a = $a - 1
}

?>