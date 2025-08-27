<?php
header('Content-Type: text/plain');

// Simulación de Menú con 'do-while'

// El bucle do-while es ideal para menús porque siempre se ejecuta al menos una vez,
// mostrando las opciones al usuario antes de pedir una entrada.

// En un entorno web real, esto sería más complejo y manejaría estados.
// Aquí simulamos la interacción.

function mostrarMenu() {
    echo "\n--- MENÚ ---\n";
    echo "1. Ver Perfil\n";
    echo "2. Editar Perfil\n";
    echo "3. Ver Mensajes\n";
    echo "4. Salir\n";
    echo "------------\n";
}

// Simulamos una secuencia de entradas del usuario
$entradas_usuario = [1, 3, 2, 4];
$indice_entrada = 0;

do {
    mostrarMenu();
    // En un script de consola real, aquí se leería la entrada del usuario.
    // $opcion = readline("Elige una opción: ");
    $opcion = $entradas_usuario[$indice_entrada];
    echo "Opción elegida: $opcion\n";

    switch ($opcion) {
        case 1:
            echo "... Mostrando perfil de usuario.\n";
            break;
        case 2:
            echo "... Abriendo editor de perfil.\n";
            break;
        case 3:
            echo "... Cargando mensajes nuevos.\n";
            break;
        case 4:
            echo "Saliendo del sistema. ¡Hasta luego!\n";
            break;
        default:
            echo "Opción no válida. Inténtalo de nuevo.\n";
            break;
    }

    $indice_entrada++;

} while ($opcion != 4 && $indice_entrada < count($entradas_usuario));

?>