<?php
header('Content-Type: text/plain');

// Función Recursiva (Factorial)

// Una función recursiva es una función que se llama a sí misma.
// Es importante tener una condición de salida para evitar un bucle infinito.

function factorial($numero) {
    // Condición de salida: el factorial de 0 o 1 es 1.
    if ($numero <= 1) {
        return 1;
    }
    // Llamada recursiva: el número multiplicado por el factorial del número anterior.
    return $numero * factorial($numero - 1);
}

// Cómo funciona factorial(4):
// 1. return 4 * factorial(3)
// 2.   return 3 * factorial(2)
// 3.     return 2 * factorial(1)
// 4.       return 1 (condición de salida)
// El resultado se calcula hacia atrás: 2*1=2, 3*2=6, 4*6=24

$numero_a_calcular = 5;
echo "Cálculo de Factorial (Recursividad):\n";
echo "El factorial de $numero_a_calcular es: " . factorial($numero_a_calcular) . "\n";

$numero_a_calcular = 7;
echo "El factorial de $numero_a_calcular es: " . factorial($numero_a_calcular) . "\n";

?>