<?php
header('Content-Type: text/plain');

// Parseando (analizando) un String

// A menudo necesitamos extraer información estructurada de un string.

// --- parse_str(): Parsea un string de "query" (como los de una URL) en variables ---
echo "--- parse_str() ---\n";
$query_string = "nombre=Juan+Perez&edad=30&ciudad=Madrid";

echo "Query string original: $query_string\n";

// Parsea el string y crea las variables $nombre, $edad y $ciudad en el ámbito actual.
parse_str($query_string);

echo "Variables creadas:\n";
echo "- Nombre: $nombre\n";
echo "- Edad: $edad\n";
echo "- Ciudad: $ciudad\n";

// Es más seguro parsear en un array para no sobreescribir variables existentes
$resultado_array = [];
parse_str($query_string, $resultado_array);
echo "\nResultado parseado en un array:\n";
print_r($resultado_array);

// --- sscanf(): Parsea un string según un formato especificado ---
echo "\n--- sscanf() ---\n";
$log_entry = "2023-10-27 10:30:15 [ERROR] Fallo de autenticación para el usuario 'admin'";

echo "Entrada de log: $log_entry\n";

// Especificamos el formato que esperamos
$formato = "%s %s [%s] %s %s %s %s";
$datos = sscanf($log_entry, $formato);

echo "\nDatos extraídos con sscanf():\n";
print_r($datos);

// Podemos asignar directamente a variables
sscanf($log_entry, "%s %s [%s]", $fecha, $hora, $nivel);
echo "\nDatos asignados a variables:\n";
echo "- Fecha: $fecha\n";
echo "- Hora: $hora\n";
echo "- Nivel: $nivel\n";

?>
