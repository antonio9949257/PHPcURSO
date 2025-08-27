<?php
header('Content-Type: text/plain');

// Sistema de Calificaciones (if-elseif-else)

function obtenerCalificacion($puntuacion) {
    if ($puntuacion >= 90) {
        return "A (Excelente)";
    } elseif ($puntuacion >= 80) {
        return "B (Bueno)";
    } elseif ($puntuacion >= 70) {
        return "C (Aceptable)";
    } elseif ($puntuacion >= 60) {
        return "D (Apenas Aprobado)";
    } else {
        return "F (Reprobado)";
    }
}

$puntuacion_alumno1 = 95;
$puntuacion_alumno2 = 72;
$puntuacion_alumno3 = 50;

echo "Sistema de Calificaciones:\n";
echo "Alumno 1 (Puntuación: $puntuacion_alumno1): " . obtenerCalificacion($puntuacion_alumno1) . "\n";
echo "Alumno 2 (Puntuación: $puntuacion_alumno2): " . obtenerCalificacion($puntuacion_alumno2) . "\n";
echo "Alumno 3 (Puntuación: $puntuacion_alumno3): " . obtenerCalificacion($puntuacion_alumno3) . "\n";

?>