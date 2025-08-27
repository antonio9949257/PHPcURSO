<?php
header('Content-Type: text/plain');

// Búsqueda en Arrays

$participantes = ["Ana", "Juan", "Maria", "Carlos", "Sofia"];
$puntuaciones = ["Ana" => 95, "Juan" => 82, "Maria" => 76, "Carlos" => 88];

// --- in_array(): Comprueba si un valor existe en un array ---
// Devuelve true o false.

echo "--- Búsqueda con in_array() ---
";
$buscar_nombre = "Maria";
if (in_array($buscar_nombre, $participantes)) {
    echo "Sí, '$buscar_nombre' está en la lista de participantes.
";
} else {
    echo "No, '$buscar_nombre' no está en la lista de participantes.
";
}

$buscar_nombre = "Pedro";
if (in_array($buscar_nombre, $participantes)) {
    echo "Sí, '$buscar_nombre' está en la lista de participantes.
";
} else {
    echo "No, '$buscar_nombre' no está en la lista de participantes.
";
}

// --- array_search(): Busca un valor y devuelve su clave correspondiente ---
// Devuelve la clave si lo encuentra, o false si no.

echo "\n--- Búsqueda con array_search() ---
";
$buscar_puntuacion = 82;
$clave_encontrada = array_search($buscar_puntuacion, $puntuaciones);

if ($clave_encontrada !== false) {
    echo "La puntuación $buscar_puntuacion fue obtenida por: $clave_encontrada.
";
} else {
    echo "Nadie obtuvo la puntuación $buscar_puntuacion.
";
}

?>