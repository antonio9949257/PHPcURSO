<?php
header('Content-Type: text/plain');
date_default_timezone_set('America/Mexico_City');

// Modificando Fechas con strtotime()

// strtotime() es muy potente para convertir texto en inglés sobre fechas a timestamps.
// También puede usarse para realizar cálculos de fechas de forma sencilla.

$fecha_actual = time(); // Timestamp actual

echo "Fecha de referencia: " . date('Y-m-d H:i:s', $fecha_actual) . "\n\n";

// --- Sumar y Restar Tiempo ---
echo "--- Sumar y Restar Tiempo ---\
";
$fecha_manana = strtotime("+1 day", $fecha_actual);
echo "Mañana será: " . date('Y-m-d', $fecha_manana) . "\n";

$fecha_ayer = strtotime("-1 day", $fecha_actual);
echo "Ayer fue: " . date('Y-m-d', $fecha_ayer) . "\n";

$proxima_semana = strtotime("+1 week", $fecha_actual);
echo "La próxima semana será: " . date('Y-m-d', $proxima_semana) . "\n";

$hace_un_mes = strtotime("-1 month", $fecha_actual);
echo "Hace un mes fue: " . date('Y-m-d', $hace_un_mes) . "\n";

$dos_años_tres_dias = strtotime("+2 years +3 days", $fecha_actual);
echo "En 2 años y 3 días será: " . date('Y-m-d', $dos_años_tres_dias) . "\n\n";

// --- Fechas Específicas ---
echo "--- Fechas Específicas ---\
";
$proximo_viernes = strtotime("next Friday");
echo "El próximo viernes es: " . date('Y-m-d', $proximo_viernes) . "\n";

$ultimo_lunes = strtotime("last Monday");
echo "El lunes pasado fue: " . date('Y-m-d', $ultimo_lunes) . "\n";

$fin_de_mes = strtotime("last day of this month");
echo "El último día de este mes es: " . date('Y-m-d', $fin_de_mes) . "\n";

?>