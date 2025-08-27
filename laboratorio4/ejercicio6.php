<?php
if (isset($_FILES['archivo'])) {
    $archivo = $_FILES['archivo'];
    echo "Nombre del archivo: " . $archivo['name'] . "<br>";
    echo "Tipo de archivo: " . $archivo['type'] . "<br>";
    echo "Tamaño del archivo: " . $archivo['size'] . " bytes<br>";
    echo "Nombre temporal del archivo: " . $archivo['tmp_name'] . "<br>";
    echo "Código de error: " . $archivo['error'] . "<br>";
} else {
    echo "No se ha subido ningún archivo.";
}
?>