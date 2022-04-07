<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" href="">
</head>
<body>
<?php
    $val = valor;
    $resultado = "";
    
    if($val > 0){
      $resultado = "Valor Positivo";
    }elseif($val < 0){
      $resultado = "Valor Negativo";
    }else{
      $resultado = "Igual a Zero";
    }
    
    echo $resultado;

?>
</body>
</html>