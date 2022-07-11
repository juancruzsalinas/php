<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

$stock = 800;

if ($stock > 0) {
    echo "Hay stock";
}

else {
    echo "No hay stock";
}

// si stock es mayor que 0, entonces:
//imprime "hay stock" 
//sino 
//imprime "no hay stock"





?>