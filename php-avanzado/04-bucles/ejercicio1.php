<?php
header('Content-Type: text/plain');

// Imprimiendo Patrones con Bucles 'for'

// 1. Triángulo Rectángulo
echo "1. Triángulo Rectángulo\n";
$altura = 5;
for ($i = 1; $i <= $altura; $i++) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

echo "\n";

// 2. Triángulo Invertido
echo "2. Triángulo Invertido\n";
for ($i = $altura; $i >= 1; $i--) {
    for ($j = 1; $j <= $i; $j++) {
        echo "*";
    }
    echo "\n";
}

echo "\n";

// 3. Tabla de Multiplicar
$numero_tabla = 3;
echo "3. Tabla de Multiplicar del $numero_tabla\n";
for ($i = 1; $i <= 10; $i++) {
    echo "$numero_tabla x $i = " . ($numero_tabla * $i) . "\n";
}

?>