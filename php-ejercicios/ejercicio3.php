<?php
header('Content-Type: text/plain');

echo "EJERCICIO 3: STRINGS Y CONCATENACIÓN

";

// Creación de strings
$string1 = "Hola";
$string2 = 'Mundo';

// Concatenación con el operador .
$saludo = $string1 . " " . $string2;
echo "Concatenación con .: " . $saludo . "
";

// Concatenación con comillas dobles
$saludo2 = "$string1 $string2";
echo "Concatenación con comillas dobles: " . $saludo2 . "
";

// Concatenación con el operador .=
$frase = "Este es un ";
$frase .= "string largo.";
echo "Concatenación con .=: " . $frase . "
";

?>
