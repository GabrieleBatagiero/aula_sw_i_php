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
    //$num1 = 5;
    //$num2 = 10;

    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];


    $soma = $num1 + $num2;

    echo "<h1>A soma de " .$num1. " + ".$num2." é igual a " .$soma.</h1>;
    //echo "A soma de $num1 + $num2 é igual a $soma"

?>
</body>
</html>


