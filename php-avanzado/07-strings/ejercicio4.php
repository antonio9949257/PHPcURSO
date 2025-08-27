<?php
header('Content-Type: text/plain');

// Expresiones Regulares

// Las expresiones regulares son patrones que se utilizan para encontrar combinaciones de caracteres en strings.

// --- preg_match(): Comprueba si un patrón existe en un string ---
// Devuelve 1 si encuentra el patrón, 0 si no, y false si hay un error.

echo "--- preg_match() ---\n";
$email = "contacto@example.com";
// Patrón simple para validar un email
$patron_email = "/^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\\.[a-zA-Z]{2,6}$/";

if (preg_match($patron_email, $email)) {
    echo "El email '$email' tiene un formato válido.\n";
} else {
    echo "El email '$email' tiene un formato inválido.\n";
}

$telefono = "123-456-7890";
// Patrón para encontrar números de teléfono con formato XXX-XXX-XXXX
$patron_telefono = "/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/";
if (preg_match($patron_telefono, $telefono)) {
    echo "El teléfono '$telefono' es válido.\n\n";
} else {
    echo "El teléfono '$telefono' es inválido.\n\n";
}

// --- preg_replace(): Busca un patrón y lo reemplaza ---
echo "--- preg_replace() ---\n";
$texto = "El usuario juan123 ha comentado en el post #45.";
// Patrón para encontrar cualquier secuencia de dígitos
$patron_digitos = "/[0-9]+/i";
$reemplazo = "[NÚMERO CENSURADO]";

$texto_censurado = preg_replace($patron_digitos, $reemplazo, $texto);
echo "Texto original: $texto\n";
echo "Texto censurado: $texto_censurado\n";

?>
