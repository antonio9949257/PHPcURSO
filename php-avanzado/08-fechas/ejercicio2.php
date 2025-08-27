<?php
header('Content-Type: text/plain');
date_default_timezone_set('America/Mexico_City');

// Cálculo de Diferencia entre Fechas

// --- Método 1: Usando timestamps (para cálculos simples) ---
echo "--- Método 1: Timestamps ---\\n";
$fecha_inicio_ts = strtotime("2023-01-01");
$fecha_fin_ts = strtotime("2023-01-31");

$diferencia_segundos = $fecha_fin_ts - $fecha_inicio_ts;
$diferencia_dias = $diferencia_segundos / (60 * 60 * 24); // 60s * 60m * 24h

echo "La diferencia entre 2023-01-01 y 2023-01-31 es de $diferencia_dias días.\\n";

// --- Método 2: Usando el objeto DateTime (recomendado) ---
// Es más preciso y maneja mejor los cambios de horario (verano/invierno).

echo "\\n--- Método 2: Objeto DateTime ---\\n";
$fecha_nacimiento = new DateTime("1990-05-15");
$fecha_actual = new DateTime("now");

// El método diff() devuelve un objeto DateInterval
$intervalo = $fecha_nacimiento->diff($fecha_actual);

echo "Tu edad es:\\n";
echo $intervalo->y . " años, " . $intervalo->m . " meses y " . $intervalo->d . " días.\\n";

// También podemos obtener la diferencia total en un formato específico
echo "Diferencia total en días: " . $intervalo->days . " días.\\n";

?>