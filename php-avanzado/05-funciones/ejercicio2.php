<?php
header('Content-Type: text/plain');

// Funciones con Número Variable de Argumentos

// A partir de PHP 5.6, puedes usar el operador ... (splat) para indicar
// que una función puede recibir un número variable de argumentos.
// Estos argumentos se pasarán a la función como un array.

function sumarTodo(...$numeros) {
    $total = 0;
    foreach ($numeros as $numero) {
        $total += $numero;
    }
    return $total;
}

echo "Suma con número variable de argumentos:\n";

$resultado1 = sumarTodo(1, 2, 3);
echo "sumarTodo(1, 2, 3) = $resultado1\n";

$resultado2 = sumarTodo(10, 20, 30, 40, 50);
echo "sumarTodo(10, 20, 30, 40, 50) = $resultado2\n";

$resultado3 = sumarTodo(5);
echo "sumarTodo(5) = $resultado3\n";

?>