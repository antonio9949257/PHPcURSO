<!DOCTYPE html>
<html>
<head>
    <title>Ejercicio 1: Sintaxis, Comentarios y POST</title>
</head>
<body>

<h1>Formulario de Saludo</h1>

<form action="ejercicio1.php" method="post">
    <label for="nombre">Tu nombre:</label>
    <input type="text" id="nombre" name="nombre">
    <input type="submit" value="Enviar">
</form>

<?php
// Esto es un comentario de una sola línea

/*
Esto es un comentario
de varias líneas.
*/

// Comprobar si se ha enviado el formulario usando el método POST
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el valor del campo "nombre"
    $nombre = $_POST['nombre'];

    // Validar que el nombre no esté vacío
    if (!empty($nombre)) {
        // Mostrar un saludo
        echo "<h2>¡Hola, " . $nombre . "!</h2>";
    } else {
        echo "<h2>Por favor, introduce tu nombre.</h2>";
    }
}
?>

</body>
</html>
