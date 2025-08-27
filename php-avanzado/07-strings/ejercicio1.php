<?php
header('Content-Type: text/plain');

// Funciones de Manipulación de Strings

$frase = "El rápido zorro marrón salta sobre el perro perezoso.";

echo "Frase original: " . $frase . "\n\n";

// --- substr(): Extraer una parte de un string ---
// substr(string, inicio, longitud)
echo "--- substr() ---\\n";
$palabra_zorro = substr($frase, 10, 5); // Extrae "zorro"
echo "Extraer 5 caracteres desde la posición 10: " . $palabra_zorro . "\n";
$final_frase = substr($frase, -15); // Extrae los últimos 15 caracteres
echo "Extraer los últimos 15 caracteres: " . $final_frase . "\n\n";

// --- strpos(): Encontrar la posición de la primera ocurrencia de un substring ---
echo "--- strpos() ---\\n";
$posicion_marron = strpos($frase, "marrón");
if ($posicion_marron !== false) {
    echo "La palabra 'marrón' se encuentra en la posición: " . $posicion_marron . "\n\n";
} else {
    echo "La palabra 'marrón' no se encontró.\n\n";
}

// --- str_replace(): Reemplazar todas las ocurrencias de un substring ---
echo "--- str_replace() ---\\n";
$nueva_frase = str_replace("marrón", "negro", $frase);
echo "Reemplazando 'marrón' por 'negro': " . $nueva_frase . "\n";

// También puede reemplazar múltiples palabras a la vez
$animales_viejos = ["zorro", "perro"];
$animales_nuevos = ["gato", "conejo"];
$frase_animales_nuevos = str_replace($animales_viejos, $animales_nuevos, $frase);
echo "Reemplazando múltiples animales: " . $frase_animales_nuevos . "\n";

?>