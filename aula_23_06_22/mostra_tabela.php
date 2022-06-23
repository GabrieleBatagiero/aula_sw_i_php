<?php 
    //incluir o arquivo de conexao sempre que precisar acessar o SGBD
    include_once 'conecta.php';

    //consulta em SQL que será executada na base de dados
    $sql = "SELECT * FROM alunos";

    //armazena o resultado da consulta
    $resultado = myqli_query($conexao, $sql);

    if (mysqli_num_rows($resultado) >0){
        //saida de dados de cada linha na tabela
        while($linha = mysqi_fetch_assoc($resultado)){
            echo "id: ".$linha["id"]. "<br>";
            echo "nome: ".$linha["nome"]. "<br>";
            echo "curso: ".$linha["curso"]. "<br>";
            echo "idade: ".$linha["idade"]. "<br>";

        }
    }else {
        echo "0 resultados";
    }

    //fechar conexão
    mysqli_close($conexao);


?>