<?php
// Establecer una cookie
setcookie("usuario", "armin", time() + 3600, "/");

echo "<h1>Ejercicio $_COOKIE</h1>";

// Leer una cookie
if (isset($_COOKIE['usuario'])) {
    echo "La cookie 'usuario' está establecida.<br>";
    echo "Valor: " . htmlspecialchars($_COOKIE['usuario']) . "<br><br>";
} else {
    echo "La cookie 'usuario' no está establecida.<br><br>";
}

// Para mostrar cómo eliminarla, la establecemos con una fecha de caducidad en el pasado.
// Descomenta la siguiente línea para eliminar la cookie:
// setcookie("usuario", "", time() - 3600, "/");

echo "Para eliminar la cookie, descomenta la línea en el código y actualiza la página.";

?>