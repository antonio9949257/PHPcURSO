<?php
header('Content-Type: text/plain');

// Ordenando Arrays

// --- sort() y rsort() para arrays indexados ---
$frutas = ["Naranja", "Manzana", "Uva", "Banana"];
echo "Array original de frutas:\n";
print_r($frutas);

sort($frutas); // Ordena alfabéticamente
echo "\nArray ordenado con sort():\n";
print_r($frutas);

rsort($frutas); // Ordena alfabéticamente en orden inverso
echo "\nArray ordenado con rsort():\n";
print_r($frutas);

// --- asort() y ksort() para arrays asociativos ---
$edades = ["Juan" => 25, "Ana" => 22, "Pedro" => 30];
echo "\nArray original de edades:\n";
print_r($edades);

asort($edades); // Ordena por valor, manteniendo la asociación clave-valor
echo "\nArray ordenado por valor con asort():\n";
print_r($edades);

ksort($edades); // Ordena por clave, manteniendo la asociación clave-valor
echo "\nArray ordenado por clave con ksort():\n";
print_r($edades);

?>