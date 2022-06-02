<?php
    session_start();
    if($_SESSION['logado'] != 1){
        header("Location: index.html");
        
    }

    echo "VOCE ESTA NA PAGINA RESTRITA!";
    echo "<a href= 'logout.php'SAIR</a>";

?>