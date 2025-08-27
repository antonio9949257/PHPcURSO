<?php
header('Content-Type: text/plain');

// Operador Ternario
// Es una forma corta de escribir una sentencia if-else.

// Ejemplo 1: Comprobar si un usuario está logueado
$logueado = false;
$mensaje_bienvenida = $logueado ? "Bienvenido de nuevo." : "Por favor, inicia sesión.";

echo "Ejemplo 1: Mensaje de bienvenida\n";
echo $mensaje_bienvenida . "\n\n";

// Ejemplo 2: Determinar si un número es par o impar
$numero = 7;
$resultado = ($numero % 2 == 0) ? "El número $numero es par." : "El número $numero es impar.";

echo "Ejemplo 2: Par o impar\n";
echo $resultado . "\n\n";

// Ejemplo 3: Asignar un descuento
$es_miembro_vip = true;
$descuento = $es_miembro_vip ? 20 : 5; // 20% si es VIP, 5% si no

echo "Ejemplo 3: Asignación de descuento\n";
echo "Tu descuento es del $descuento%."

?>
