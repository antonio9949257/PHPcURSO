<?php
header('Content-Type: text/plain');

// Funciones Anónimas (Closures)

// Una función anónima es una función sin nombre.
// A menudo se asignan a una variable, que se usa para llamar a la función.

$saludar = function($nombre) {
    return "Hola, $nombre";
};

echo "Llamando a una función anónima asignada a una variable:\n";
echo $saludar("Mundo") . "\n\n";

// Las funciones anónimas son muy útiles como callbacks (funciones que se pasan como argumento a otras funciones).

$numeros = [1, 2, 3, 4, 5];
// array_map aplica una función a cada elemento de un array.
$cuadrados = array_map(function($numero) {
    return $numero * $numero;
}, $numeros);

echo "Usando una función anónima con array_map para calcular cuadrados:\n";
print_r($cuadrados);

// Heredar variables del ámbito padre con 'use'
$factor = 10;
$multiplicar = function($valor) use ($factor) {
    return $valor * $factor;
};

echo "\nUsando 'use' para heredar una variable del ámbito padre:\n";
echo "15 * $factor = " . $multiplicar(15) . "\n";

?>