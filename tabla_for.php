<?php 
$aProductos = array("tv samsung", "cafetera", "horno");
echo "<table>";

for ($i=0; $i < count($aProductos); $i++) {
    echo "<tr><td>" . $aProductos[$i] . "</td></tr>";
}
echo "</table>";

?>