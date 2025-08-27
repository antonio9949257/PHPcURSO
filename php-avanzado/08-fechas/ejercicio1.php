<?php
header('Content-Type: text/plain');

// Formateando Fechas con date()

// Es importante establecer la zona horaria para obtener resultados precisos.
date_default_timezone_set('America/Mexico_City');

$timestamp_actual = time(); // Obtiene el timestamp actual de Unix (segundos desde 1970-01-01)

echo "--- Formatos de Fecha Comunes ---\
";

// Formato Completo (ISO 8601)
echo "Formato ISO 8601 (Y-m-d H:i:s): " . date("Y-m-d H:i:s", $timestamp_actual) . "\
";

// Formato Común (Latinoamérica)
echo "Formato Común (d/m/Y): " . date("d/m/Y", $timestamp_actual) . "\
";

// Formato con nombres de día y mes
echo "Formato Largo (l, j \\de F \\de Y): " . date("l, j \\de F \\de Y", $timestamp_actual) . "\
";
// La barra invertida antes de 'de' evita que PHP interprete la 'd' como un carácter de formato.

// Formato de 12 horas con AM/PM
echo "Formato 12 horas (h:i:s a): " . date("h:i:s a", $timestamp_actual) . "\
";

// Obtener partes específicas de la fecha
echo "\
--- Partes Específicas ---\
";
echo "Día del mes (d): " . date("d") . "\
";
echo "Día de la semana (N, 1=Lunes): " . date("N") . "\
";
echo "Día del año (z, empieza en 0): " . date("z") . "\
";
echo "Semana del año (W): " . date("W") . "\
";

?>