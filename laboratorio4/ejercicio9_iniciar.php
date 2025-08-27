<?php
// Iniciar la sesión
session_start();

// Establecer una variable de sesión
$_SESSION['producto'] = "Laptop";

echo "<h1>Ejercicio $_SESSION</h1>";
echo "Sesión iniciada y variable de sesión 'producto' establecida.";
echo "<a href=\"ejercicio9_leer.php\">Ir a la página de lectura de sesión</a>";
?>
