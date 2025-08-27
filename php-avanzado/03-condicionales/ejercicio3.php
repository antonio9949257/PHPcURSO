<?php
header('Content-Type: text/plain');

// Condicionales Anidados
// Determinar si un usuario puede obtener un descuento especial

$es_cliente = true;
$antiguedad_años = 6;
$total_compra = 150;

echo "Análisis de Descuento Especial:\n";
echo "Es cliente: " . ($es_cliente ? 'Sí' : 'No') . "\n";
echo "Antigüedad: $antiguedad_años años\n";
echo "Total de compra: $$total_compra\n\n";

if ($es_cliente) {
    echo "El usuario es cliente. Verificando antigüedad...\n";
    if ($antiguedad_años > 5) {
        echo "El cliente tiene más de 5 años. Verificando total de compra...\n";
        if ($total_compra >= 100) {
            echo "¡Califica para el descuento especial del 15%!\n";
        } else {
            echo "No califica. El total de la compra es menor a $100.\n";
        }
    } else {
        echo "No califica. La antigüedad es menor o igual a 5 años.\n";
    }
} else {
    echo "No califica. El usuario no es cliente.\n";
}

?>