<?php

  $num = $_POST['num'];
  $temp = $_POST['temp'];
  
  if($num==1)
   echo "Temperatura em Farenheit: ".CtoF($temp);
  elseif($num==2)
   echo "Temperatura em Celsius: ".FtoC($temp);
  else
   echo "Opção inválida";
  
  function CtoF($temperatura){
   return ($temperatura*9/5) + 32;
  }
  function FtoC($temperatura){
   return ($temperatura-32)*5/9;
  }
?>