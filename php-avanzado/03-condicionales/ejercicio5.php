<?php
header('Content-Type: text/plain');

// Combinando Condicionales con Operadores Lógicos

// Escenario: Aprobar un préstamo
// Requisitos: Ingreso anual > 30000 Y (no estar en el buró de crédito O tener un buen historial)

$ingreso_anual = 40000;
$en_buro_credito = false;
$buen_historial = true;

echo "Análisis para Aprobación de Préstamo:\n";
echo "Ingreso Anual: $$ingreso_anual\n";
echo "En Buró de Crédito: " . ($en_buro_credito ? 'Sí' : 'No') . "\n";
echo "Buen Historial de Crédito: " . ($buen_historial ? 'Sí' : 'No') . "\n\n";

if ($ingreso_anual > 30000 && (!$en_buro_credito || $buen_historial)) {
    echo "¡Felicidades! Tu préstamo ha sido APROBADO.\n";
    echo "Razón: Cumples con el ingreso mínimo y tienes un perfil crediticio favorable.\n";
} else {
    echo "Lo sentimos, tu préstamo ha sido RECHAZADO.\n";
    if ($ingreso_anual <= 30000) {
        echo "Razón: El ingreso anual es insuficiente.\n";
    }
    if ($en_buro_credito && !$buen_historial) {
        echo "Razón: El perfil crediticio no es favorable.\n";
    }
}

?>