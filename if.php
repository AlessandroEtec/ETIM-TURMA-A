<h1> if.php </h1>
<form method="get" action="">
    <input type="radio" name="sexo" value="M">Masculino<br>
    <input type="radio" name="sexo" value="F">Feminino<br><br>
    <input type="submit" value="Enviar">
</form>
<br><br>

<?php
if (!empty($_GET["sexo"])) {
    $sexo = $_GET["sexo"];
    if ($sexo == "M"){
        echo "Sexo masculino";
    }else if ($sexo == "F"){
        echo "Sexo feminino";
    } 
}
?>