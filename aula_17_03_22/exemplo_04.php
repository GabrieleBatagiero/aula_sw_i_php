<?php

$sigla = "SP";
switch ($sigla){ // idade>15 não dá pra fazer com Switch
    case "SP":
        echo "Voce escolheu São Paulo";
        break;
    case "RJ":
        echo "Voce escolheu Rio de Janeiro";
        break;
    case "MG";
        echo "Voce escolheu Minas Gerais";
        break;
    default:
        echo "NÃO ENCONTREI A SIGLA EM MINHA BASE DE DADOS!";
        break;
     

}
?>