<?php
//Função com parametro e com retorno

function teste($x, $y){
    $soma = $x + $y;
    return  $soma;
}

$num1= 10;
$num2= 20;

$result = teste($num1,$num2);
echo "A soma é: $result";

?>