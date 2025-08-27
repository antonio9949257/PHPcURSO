<?php
header('Content-Type: text/plain');

// Manipulación de Arrays

$tareas = ["Hacer la compra", "Limpiar la casa"];
echo "Lista de tareas inicial:\n";
print_r($tareas);

// --- array_push(): Añadir uno o más elementos al final ---
echo "\nAñadiendo 'Pasear al perro' y 'Estudiar PHP' con array_push():\n";
array_push($tareas, "Pasear al perro", "Estudiar PHP");
print_r($tareas);

// --- array_pop(): Extraer el último elemento ---
echo "\nExtrayendo el último elemento con array_pop():\n";
$ultima_tarea = array_pop($tareas);
echo "Tarea extraída: $ultima_tarea\n";
echo "Array resultante:\n";
print_r($tareas);

// --- array_merge(): Combinar dos o más arrays ---
$tareas_trabajo = ["Preparar informe", "Reunión de equipo"];
$todas_las_tareas = array_merge($tareas, $tareas_trabajo);
echo "\nCombinando arrays con array_merge():\n";
print_r($todas_las_tareas);

// --- count(): Contar el número de elementos ---
echo "\nNúmero total de tareas: " . count($todas_las_tareas) . "\n";

?>