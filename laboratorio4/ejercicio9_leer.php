<?php
// Iniciar la sesión para poder acceder a las variables de sesión
session_start();

echo "<h1>Ejercicio $_SESSION - Lectura</h1>";

// Leer la variable de sesión
if (isset($_SESSION['producto'])) {
    echo "El valor de la variable de sesión 'producto' es: " . htmlspecialchars($_SESSION['producto']);
} else {
    echo "La variable de sesión 'producto' no está establecida.";
}

// Para destruir la sesión, se puede usar session_destroy()
// session_destroy();
?>