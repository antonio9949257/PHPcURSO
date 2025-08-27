<?php
header('Content-Type: text/plain');

echo "EJERCICIO 9: FUNCIONES INTEGRADAS

";

// --- Funciones Matemáticas ---
echo "--- Funciones Matemáticas ---
";
$numero = -15.7;
echo "Valor absoluto de $numero: " . abs($numero) . "
";
echo "Redondear $numero: " . round($numero) . "
";
echo "Raíz cuadrada de 16: " . sqrt(16) . "
";
echo "Número aleatorio entre 1 y 100: " . rand(1, 100) . "

";

// --- Funciones para Strings ---
echo "--- Funciones para Strings ---
";
$texto = "hola mundo, php es divertido";
echo "Texto original: '$texto'
";
echo "Longitud del texto: " . strlen($texto) . "
";
echo "Convertir a mayúsculas: " . strtoupper($texto) . "
";
echo "Primera letra en mayúscula: " . ucfirst($texto) . "
";
echo "Reemplazar 'divertido' por 'genial': " . str_replace("divertido", "genial", $texto) . "

";

// --- Funciones de Fecha ---
echo "--- Funciones de Fecha ---
";
// Establecer la zona horaria para evitar advertencias
date_default_timezone_set('America/Mexico_City');

echo "Fecha y hora actual: " . date("Y-m-d H:i:s") . "
";
echo "Solo el año: " . date("Y") . "
";
echo "Nombre del día: " . date("l") . "
";
echo "Timestamp actual: " . time() . "
";

?>
