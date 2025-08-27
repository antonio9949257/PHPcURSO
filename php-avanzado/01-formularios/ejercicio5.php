<?php
$mensaje = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Comprobar si se subió un archivo
    if (isset($_FILES["archivo"]) && $_FILES["archivo"]["error"] == 0) {
        $directorio_subidas = "uploads/";
        // Si el directorio no existe, lo creamos
        if (!file_exists($directorio_subidas)) {
            mkdir($directorio_subidas, 0777, true);
        }

        $nombre_archivo = basename($_FILES["archivo"]["name"]);
        $ruta_archivo = $directorio_subidas . $nombre_archivo;

        // Mover el archivo del directorio temporal al directorio de subidas
        if (move_uploaded_file($_FILES["archivo"]["tmp_name"], $ruta_archivo)) {
            $mensaje = "El archivo ". htmlspecialchars($nombre_archivo). " ha sido subido correctamente.";
        } else {
            $mensaje = "Hubo un error al mover el archivo subido.";
        }
    } else {
        $mensaje = "Error al subir el archivo. Código de error: " . $_FILES["archivo"]["error"];
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Subida de Archivos</title>
</head>
<body>

<h2>Sube una imagen</h2>
<!-- El atributo enctype es crucial para la subida de archivos -->
<form action="" method="post" enctype="multipart/form-data">
    Selecciona un archivo:
    <input type="file" name="archivo" id="archivo">
    <input type="submit" value="Subir Archivo" name="submit">
</form>

<?php if (!empty($mensaje)): ?>
    <p><?php echo $mensaje; ?></p>
<?php endif; ?>

</body>
</html>
