<?php
if (isset($_GET['nombre']) && isset($_GET['edad'])) {
    $nombre = $_GET['nombre'];
    $edad = $_GET['edad'];
    echo "Nombre: " . htmlspecialchars($nombre) . "<br>";
    echo "Edad: " . htmlspecialchars($edad);
} else {
    echo "No se han recibido datos.";
}
?>