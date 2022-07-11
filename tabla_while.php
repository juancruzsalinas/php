<?php
 $aProductos = array("tv samsung", "cafetera", "heladera");

 $contador = 0 ;

 echo "<table>";

 while ($contador < 3 ) {
    echo "<tr><td>" . $aProductos[$contador] . "</td></tr>";
    $contador++;
 }

echo "</table>";




?>