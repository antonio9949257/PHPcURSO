<?php
header('Content-Type: text/plain');

// Formateando Strings con printf y sprintf

// printf(): Muestra un string formateado.
// sprintf(): Devuelve un string formateado, para que pueda ser almacenado en una variable.

$producto = "Laptop";
$cantidad = 3;
$precio_unitario = 1250.75;
$total = $cantidad * $precio_unitario;

// --- printf() ---
echo "--- Usando printf() ---
";
echo "Imprimiendo directamente el resumen de la compra:
";
// %s para string
// %d para entero (decimal)
// %.2f para flotante con 2 decimales
printf("Producto: %s\nCantidad: %d\nPrecio Unitario: $%.2f\nTotal: $%.2f\n", 
    $producto, 
    $cantidad, 
    $precio_unitario, 
    $total
);

// --- sprintf() ---
echo "\n--- Usando sprintf() ---
";
echo "Guardando el resumen en una variable para usarlo después:
";
$resumen_compra = sprintf("Resumen: %d unidades de %s a un total de $%.2f.",
    $cantidad,
    $producto,
    $total
);

echo $resumen_compra . "\n";

// Esto es útil para generar logs, mensajes de API, etc.
// file_put_contents("log_compra.txt", $resumen_compra);

?>