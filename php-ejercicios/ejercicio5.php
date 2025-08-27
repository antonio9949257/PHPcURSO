<?php
header('Content-Type: text/plain');

echo "EJERCICIO 5: OPERADORES

";

$a = 10;
$b = 5;
$c = true;
$d = false;

// --- Operadores Aritméticos ---
echo "--- Operadores Aritméticos (a=10, b=5) ---
";
echo "Suma (a + b): " . ($a + $b) . "
";
echo "Resta (a - b): " . ($a - $b) . "
";
echo "Multiplicación (a * b): " . ($a * $b) . "
";
echo "División (a / b): " . ($a / $b) . "
";
echo "Módulo (a % b): " . ($a % $b) . "
";
echo "Exponenciación (a ** b): " . ($a ** $b) . "

";

// --- Operadores Relacionales ---
echo "--- Operadores Relacionales (a=10, b=5) ---
";
echo "Igual (a == 10): " . ($a == 10 ? 'true' : 'false') . "
";
echo "Idéntico (a === '10'): " . ($a === '10' ? 'true' : 'false') . "
";
echo "Diferente (a != b): " . ($a != $b ? 'true' : 'false') . "
";
echo "Mayor que (a > b): " . ($a > $b ? 'true' : 'false') . "
";
echo "Menor o igual que (b <= a): " . ($b <= $a ? 'true' : 'false') . "

";

// --- Operadores Lógicos ---
echo "--- Operadores Lógicos (c=true, d=false) ---
";
echo "AND (c && d): " . ($c && $d ? 'true' : 'false') . "
";
echo "OR (c || d): " . ($c || $d ? 'true' : 'false') . "
";
echo "NOT (!c): " . (!$c ? 'true' : 'false') . "
";

?>
