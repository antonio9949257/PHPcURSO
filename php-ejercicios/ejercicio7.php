<?php
header('Content-Type: text/plain');

echo "EJERCICIO 7: CICLOS

";

// --- Ciclo FOR ---
echo "--- Ciclo FOR (contando hasta 5) ---
";
for ($i = 1; $i <= 5; $i++) {
    echo "Número: " . $i . "
";
}

// --- Ciclo WHILE ---
echo "
--- Ciclo WHILE (contando hasta 5) ---
";
$j = 1;
while ($j <= 5) {
    echo "Número: " . $j . "
";
    $j++;
}

// --- Ciclo DO-WHILE ---
// La diferencia es que este se ejecuta al menos una vez.
echo "
--- Ciclo DO-WHILE (contando hasta 5, empezando en 6) ---
";
$k = 6;
do {
    echo "Número: " . $k . "
";
    $k++;
} while ($k <= 5);

?>
