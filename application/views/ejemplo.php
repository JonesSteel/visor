<?php

echo strtotime("now"), "\n"; 
echo "<br>";
echo strtotime("10 September 2000"), "\n";
echo "<br>";
echo strtotime("+1 day"), "\n";
echo "<br>";
echo strtotime("+1 week"), "\n";
echo "<br>";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo "<br>";
echo strtotime("next Thursday"), "\n";
echo "<br>";
echo strtotime("last Monday"), "\n";
echo "<br>";
echo "<br>";
echo " ----------------------------";echo "<br>";
echo "Ejemplo 2";echo "<br>";
echo " ----------------------------";echo "<br>";
echo "<br>";echo "<br>";


$cadena = '02-01-2020';

// antes de PHP 5.1.0 se debería de comparar con -1, en vez de con false
if (($timestamp = strtotime($cadena)) === false) {
    echo "La cadena ($cadena) es falsa";
} else {
    echo "$cadena == " . date('l dS \o\f F Y h:i:s A', $timestamp);
}


echo " ----------------------------";echo "<br>";
echo "Ejemplo 3";echo "<br>";
echo " ----------------------------";echo "<br>";
echo "<br>";echo "<br>";

$fecha_actual = date("d-m-Y");
//sumo 1 día
echo date("d-m-Y",strtotime($fecha_actual."+ 1 days")); 
//resto 1 día
echo date("d-m-Y",strtotime($fecha_actual."- 1 days")); 


?>