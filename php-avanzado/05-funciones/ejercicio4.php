<?php
header('Content-Type: text/plain');

// Ámbito (Scope) de las Variables

// Variable global: definida fuera de cualquier función.
$variable_global = "Soy global";

function miFuncion() {
    // Variable local: definida dentro de una función.
    // Solo existe dentro de esta función.
    $variable_local = "Soy local";

    echo "Dentro de la función:\n";
    echo "- Variable local: $variable_local\n";
    // Para acceder a una variable global desde una función, se debe usar la palabra clave 'global'.
    global $variable_global;
    echo "- Variable global (accedida con 'global'): $variable_global\n";
}

echo "Fuera de la función:\n";
echo "- Variable global: $variable_global\n";
// echo $variable_local; // Esto produciría un error, porque $variable_local no existe aquí.

echo "\n";
miFuncion();

?>
