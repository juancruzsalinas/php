<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$valor= rand(1,5);

if ($valor == 1 || $valor == 3 || $valor == 5 ) {
    echo "El numero $valor es impar.";
    }
    else {
        echo "El numero $valor es par.";
    } 
  //echo $valor== 1 || $valor == 3 || $valor == 5 ? "el numero $valor es impar" : "el numero $valor es par"; 
  //solucion con if ternario. 
  /*otra solucion posible : 
  if ($valor %==0){
    echo "el numero $valor es par";
    }else {
        echo "el numero $valor es impar";
    }
?>



