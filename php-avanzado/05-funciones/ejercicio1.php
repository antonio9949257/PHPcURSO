<?php
header('Content-Type: text/plain');

// Funciones con Argumentos por Defecto

// Podemos asignar un valor por defecto a un argumento de una función.
// Si no se pasa ese argumento al llamar a la función, se usará el valor por defecto.

function crearPedido($producto, $cantidad = 1, $tienda = "Online") {
    echo "Creando pedido:\n";
    echo "- Producto: $producto\n";
    echo "- Cantidad: $cantidad\n";
    echo "- Tienda: $tienda\n\n";
}

// Llamada 1: Pasando todos los argumentos
echo "Llamada 1:\n";
crearPedido("Laptop", 2, "Tienda Central");

// Llamada 2: Omitiendo el argumento 'tienda' (usará el valor por defecto "Online")
echo "Llamada 2:\n";
crearPedido("Teclado", 3);

// Llamada 3: Omitiendo 'cantidad' y 'tienda'
echo "Llamada 3:\n";
crearPedido("Mouse");

?>