<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

//Definición
function contar($aArray){
    $contador = 0;
    foreach ($aArray as $item){
        $contador++;
     }
     return $contador;
    }

//Uso
$aNotas= array(9,8,6,7,8,9,6);
$aPacientes[] = array(
    "dni" => "54.658.695",
    "nombre" => "Carla Anchorena",
    "edad" => 22,
    "peso" => 53.50);
    $aProductos = array();
$aProductos[] = array("nombre" => "Smart TV 55\" 4K UHD",
    "marca" => "Hitachi",
    "modelo" => "554KS20",
    "stock" => 60,
    "precio" => 58000,
);



echo "Cantidad de productos " . contar($aNotas). "<br>"; 
echo "Cantidad de productos " . contar($aProductos). "<br>"; 
echo "Cantidad de productos " . contar($aPacientes). "<br>"; 


?>
function contar($aArray){
    $contador = 0;
    foreach($aArray as $item){
        $contador++;
    }
    return $contador;
}
