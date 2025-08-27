<?php
header('Content-Type: text/plain');

echo "EJERCICIO 4: TIPOS DE DATOS Y CONSTANTES

";

// --- Tipos de Datos ---
echo "--- Tipos de Datos ---
";

$entero = 42;
$flotante = 3.14;
$string = "PHP es genial";
$booleano = true;
$nulo = null;
$array = [1, "dos", 3.0];

echo "Entero: " . $entero . " (Tipo: " . gettype($entero) . ")
";
echo "Flotante: " . $flotante . " (Tipo: " . gettype($flotante) . ")
";
echo "String: " . $string . " (Tipo: " . gettype($string) . ")
";
echo "Booleano: " . ($booleano ? 'true' : 'false') . " (Tipo: " . gettype($booleano) . ")
";
echo "Nulo: " . $nulo . " (Tipo: " . gettype($nulo) . ")
";
echo "Array: ";
print_r($array);
echo "(Tipo: " . gettype($array) . ")

";


// --- Constantes ---
echo "--- Constantes ---
";

// Definir una constante
define("PI", 3.14159);
define("SALUDO", "Hola a todos");

// Usar las constantes
echo "El valor de PI es: " . PI . "
";
echo SALUDO . "
";

// A partir de PHP 5.3 se puede usar la palabra clave `const`
const VERSION = "1.0";
echo "Versión del script: " . VERSION . "
";

?>
