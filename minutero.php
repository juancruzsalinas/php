<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

date_default_timezone_set('America/Argentina/Buenos_Aires');

echo "Fecha y hora actual " . date("d/m/Y H:i") . "<br><br>";

$hr= date("H");
$min= date("i");

$hr= "21" ;
$min= "10";

echo "La hora es $hr : $min hs.";

for($min=0; $min < 60; $min++){
 echo "La hora es";
}



?>