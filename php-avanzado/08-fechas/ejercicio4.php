<?php
header('Content-Type: text/plain');
date_default_timezone_set('America/Mexico_City');

// Trabajando con el Objeto DateTime

// El objeto DateTime es la forma moderna y orientada a objetos de trabajar con fechas en PHP.
// Ofrece más flexibilidad y claridad que las funciones procedurales como date() y strtotime().

// --- Creación de un objeto DateTime ---
echo "--- Creación ---
";
$fecha_actual = new DateTime(); // Fecha y hora actual
$fecha_especifica = new DateTime('2024-12-25 18:00:00');

echo "Fecha actual: " . $fecha_actual->format('Y-m-d H:i:s') . "\n";
echo "Fecha específica: " . $fecha_especifica->format('d/m/Y h:i A') . "\n\n";

// --- Modificación de un objeto DateTime ---
echo "--- Modificación ---
";
$fecha_mod = new DateTime('2023-11-20');
echo "Fecha original: " . $fecha_mod->format('Y-m-d') . "\n";

$fecha_mod->modify('+1 month');
echo "Después de +1 mes: " . $fecha_mod->format('Y-m-d') . "\n";

$fecha_mod->modify('-10 days');
echo "Después de -10 días: " . $fecha_mod->format('Y-m-d') . "\n";

$fecha_mod->setDate(2025, 1, 15); // Establecer una nueva fecha
echo "Después de setDate(2025, 1, 15): " . $fecha_mod->format('Y-m-d') . "\n\n";

// --- Comparación de Fechas ---
echo "--- Comparación ---
";
$evento_a = new DateTime('2024-01-01');
$evento_b = new DateTime('2024-01-15');

if ($evento_a < $evento_b) {
    echo "El Evento A es anterior al Evento B.\n";
}

// --- Obtener el timestamp ---
echo "\nTimestamp del Evento A: " . $evento_a->getTimestamp() . "\n";

?>