<?php
    //Ddos do SGBD MySQL para a conexão
    $servidor = "localhost";
    $usuario = "root";
    $senha = "";
    $banco = "teste_myqli";

    //crinado a conexão
    $conexao = new mysqli($servidor, $usuario, $senha, $banco);

    //checando a conexão
    if ($conexao->connect_error){
        die("conexão falhou: " . $conn->connect_error);
    
    }
    echo "Conetcado com successo";

?>