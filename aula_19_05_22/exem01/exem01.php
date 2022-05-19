<?php
//Trabalhando com vetores
//$numero = array(1,12,50,1.2);
$numeros = [1,12,50,1.2];
//echo $numero[2];
$qtde = count($numeros);
echo "Meu vetor tem: $qtde de posições <hr>";
$total= 0;
for($i=0;$i<4;$i++){
    echo "INDICE = $i ==> $numeros[$i] <br>";
    $total = $total + $numeros[$i];
    echo "soma parcial  é $total <hr>";
}
echo "<hr>";
echo "soma toral é $total <br>";
$media = $total/$qtde;
echo "A média é $media";

?>