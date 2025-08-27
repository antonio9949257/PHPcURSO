<?php
header('Content-Type: text/plain');

echo "EJERCICIO 8: FUNCIONES Y ARREGLOS

";

// --- FUNCIONES ---
echo "--- Funciones ---
";

// Definición de una función simple
function saludar($nombre) {
    return "Hola, " . $nombre;
}

// Llamada a la función
echo saludar("Carlos") . "
";

// Función con valor de retorno
function sumar($a, $b) {
    return $a + $b;
}
$resultado = sumar(5, 3);
echo "5 + 3 = " . $resultado . "

";


// --- ARREGLOS ---
echo "--- Arreglos ---
";

// Arreglo de índice numérico
$frutas = ["Manzana", "Banana", "Naranja"];
echo "Arreglo de índice numérico:
";
print_r($frutas);
echo "El segundo elemento es: " . $frutas[1] . "

";

// Arreglo asociativo
$persona = [
    "nombre" => "Ana",
    "edad" => 28,
    "ciudad" => "Madrid"
];
echo "Arreglo asociativo:
";
print_r($persona);
echo "La edad de " . $persona["nombre"] . " es " . $persona["edad"] . " años.

";

// Leer arreglos con un ciclo
echo "Recorriendo el arreglo de frutas con foreach:
";
foreach ($frutas as $fruta) {
    echo "- " . $fruta . "
";
}

echo "
Recorriendo el arreglo de persona con foreach:
";
foreach ($persona as $clave => $valor) {
    echo "- " . $clave . ": " . $valor . "
";
}

?>
