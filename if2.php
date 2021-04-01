<meta charset="UTF-8">
<h1> if2.php </h1>
<?php
$a = 6;		
$b = 2;		
$c = false;

if ($a > 0 && $b > 0){  //Operador AND
 	echo "A e B são maiores que Zero " . '<br>'; 
}

if ($a < 5 || $b < 5){  //Operador OU
	echo "A ou B é menor que Cinco " . '<br>';  
}

//Operador NÃO
if (!$c){  
    echo "C não é verdadeiro" . '<br>';	 
}

//Operador Diferente
if ($a != 0){ 
    echo "A não é igual a 0" . '<br>'; 
}
?>
