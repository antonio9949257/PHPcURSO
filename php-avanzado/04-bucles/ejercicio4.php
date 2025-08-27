<?php
header('Content-Type: text/plain');

// Recorriendo un Array Asociativo con 'foreach'

// El bucle `foreach` es la forma más fácil y recomendada de iterar sobre arrays en PHP.

$configuracion_usuario = [
    'nombre' => 'Ana García',
    'email' => 'ana.garcia@example.com',
    'tema' => 'oscuro',
    'notificaciones' => 'activadas',
    'idioma' => 'es'
];

echo "Configuración del Usuario:\n";

// El bucle foreach asigna la clave y el valor a las variables $clave y $valor en cada iteración.
foreach ($configuracion_usuario as $clave => $valor) {
    echo "- " . ucfirst($clave) . ": " . $valor . "\n";
}

?>