<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 2: Método GET</title>
</head>
<body>

<h1>Pasa un dato por la URL</h1>

<a href="ejercicio2.php?producto=Laptop&precio=1200">Ver producto</a>

<?php
// Comprobar si las variables 'producto' y 'precio' existen en la URL
if (isset($_GET['producto']) && isset($_GET['precio'])) {
    $producto = $_GET['producto'];
    $precio = $_GET['precio'];

    echo "<h2>Información del Producto</h2>";
    echo "<p>Producto: " . $producto . "</p>";
    echo "<p>Precio: $" . $precio . "</p>";
}
?>

</body>
</html>
