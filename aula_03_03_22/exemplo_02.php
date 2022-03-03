<?php
$soma = ($valor1 = 4) + 5; //$soma é igual a 9 agoraa e $valor1 foi configurado como 4.

$valor2 = 20;
$valor3 = 30;

$soma += 1; //$soma fica com 10
$soma += $valor2; //$soma fica com 10+20=30
$soma *= $valor3;//$soma fica com 30*30=900
$soma %=100;

$saudacao = "Bom";
$saudacao .= "Dia!";//configura $saudacao para "bom dia!", como em $saudacao=$saudacao . "dia!"

echo $saudacao . "Hoje vai ter" . $soma ." % tristeza!";

?>