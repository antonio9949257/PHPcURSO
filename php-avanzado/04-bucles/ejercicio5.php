<?php
header('Content-Type: text/plain');

// Uso de 'break' y 'continue' en Bucles

// --- Ejemplo de 'break' ---
// Detiene la ejecución del bucle por completo.

echo "--- Ejemplo de 'break' ---\\n";
echo "Buscando el número 5 en un array:\\n";
$numeros = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];

foreach ($numeros as $numero) {
    echo "Comprobando: $numero\\n";
    if ($numero == 5) {
        echo "¡Número 5 encontrado! Deteniendo el bucle.\\n";
        break; // Sale del bucle foreach
    }
}

echo "\\n--- Ejemplo de 'continue' ---\\n";
echo "Imprimiendo solo los números impares:\\n";

foreach ($numeros as $numero) {
    // Si el número es par...
    if ($numero % 2 == 0) {
        continue; // ...salta a la siguiente iteración, ignorando el código de abajo.
    }
    // Este código solo se ejecuta si el número es impar.
    echo "$numero es impar.\\n";
}

?>