<?php
    //Função sem retorno e com parametro

    function teste($a){
        echo $a;
    }

    // a variavel $a tem escopo local

    teste('bom dia!');
    echo "<hr>";
    teste('oii');

?>