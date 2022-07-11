<?php 
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


//listado del 1 al 100.
for ( $i=1; $i <= 100; $i++ ) {
    
    echo $i . "<br>";
    
}
// solo numeros pares.

for ($i = 2; $i <= 100; $i +=2) {
    echo $i . "<br>";
}

//cuando el número llegue a 60 mostrarlo e interrumpir con un break.

for ($i = 2; $i <= 100; $i +=2) {
    echo $i . "<br>";
    if ($i == 60 ){

         break;
         
    }
}


?> 