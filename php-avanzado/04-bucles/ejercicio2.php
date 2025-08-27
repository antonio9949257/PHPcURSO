<?php
header('Content-Type: text/plain');

// Iterando un array con un bucle 'while'

$frutas = ["Manzana", "Banana", "Naranja", "Mango", "Uva"];

echo "Lista de Frutas (recorrida con while):\n";

$i = 0; // Inicializamos el contador
$total_frutas = count($frutas); // Contamos los elementos para saber dónde parar

while ($i < $total_frutas) {
    echo "- " . $frutas[$i] . "\n";
    $i++; // Incrementamos el contador para avanzar al siguiente elemento
}

// Este método es más verboso que un `foreach`, pero es útil para entender
// cómo funcionan los bucles y el acceso a los índices del array manualmente.

?>
