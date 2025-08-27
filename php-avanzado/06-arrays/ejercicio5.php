<?php
header('Content-Type: text/plain');

// Convertir entre Array y String

// --- implode(): Une los elementos de un array en un string ---

$tags = ["php", "desarrollo web", "tutorial", "código"];

// Unir con una coma y un espacio
$string_tags = implode(", ", $tags);

echo "--- implode() ---\\n";
echo "Array original de tags:\n";
print_r($tags);
echo "\\nString resultante de implode():\n";
echo $string_tags . "\\n";

// --- explode(): Divide un string en un array ---

$csv_data = "Juan,Perez,juan.perez@example.com,35";

// Dividir el string por la coma
$array_usuario = explode(",", $csv_data);

echo "\\n--- explode() ---\\n";
echo "String original (formato CSV):\n";
echo $csv_data . "\\n";
echo "\\nArray resultante de explode():\n";
print_r($array_usuario);

?>