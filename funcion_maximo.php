<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

function maximo($aVector){
    $valorMaximo= 0;
    foreach ($aVector as $valor){
    
    if($valorMaximo < $valor){
        $valorMaximo = $valor;
        }
    }
    return $valorMaximo;
   
}



$aSueldo = array(800.30, 400.87, 500.45, 300, 900.70, 100, 900, 1800);
echo "el sueldo maximo es : " . maximo($aSueldo) . "<br>";
?>