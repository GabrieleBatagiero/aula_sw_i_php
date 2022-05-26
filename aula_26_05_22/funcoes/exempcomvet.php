<?php
//Exemplo com VETOR 

    $vetor = [2,13,56,9,4,10];

    function soma_vetor($x){
        $total = 0;
        for($i=0;$i<count($x);$i++){
            $total += $x[$i];
        }
         echo "A soma é $total";   
    }
    soma_vetor($vetor);

?>