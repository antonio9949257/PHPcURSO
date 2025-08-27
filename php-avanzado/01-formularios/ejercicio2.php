<?php
$nombre = $comentarios = $genero = $vehiculo = $idioma = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : 'No especificado';
    $comentarios = isset($_POST['comentarios']) ? htmlspecialchars($_POST['comentarios']) : 'Sin comentarios';
    $genero = isset($_POST['genero']) ? htmlspecialchars($_POST['genero']) : 'No especificado';
    $vehiculos = isset($_POST['vehiculos']) ? $_POST['vehiculos'] : []; // Array
    $idioma = isset($_POST['idioma']) ? htmlspecialchars($_POST['idioma']) : 'No especificado';
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Diferentes Inputs</title>
</head>
<body>
    <form action="" method="post">
        <!-- Input de Texto -->
        Nombre: <input type="text" name="nombre"><br><br>

        <!-- Textarea -->
        Comentarios: <textarea name="comentarios" rows="5" cols="40"></textarea><br><br>

        <!-- Radio Buttons -->
        Género:<br>
        <input type="radio" name="genero" value="masculino"> Masculino<br>
        <input type="radio" name="genero" value="femenino"> Femenino<br>
        <input type="radio" name="genero" value="otro"> Otro<br><br>

        <!-- Checkboxes -->
        Vehículos que posees:<br>
        <input type="checkbox" name="vehiculos[]" value="Bicicleta"> Tengo una bicicleta<br>
        <input type="checkbox" name="vehiculos[]" value="Coche"> Tengo un coche<br><br>

        <!-- Select -->
        Idioma principal:
        <select name="idioma">
            <option value="es">Español</option>
            <option value="en">Inglés</option>
            <option value="fr">Francés</option>
        </select><br><br>

        <input type="submit" value="Enviar">
    </form>

    <?php if ($_SERVER["REQUEST_METHOD"] == "POST"): ?>
        <hr><h2>Datos Recibidos</h2>
        <p><strong>Nombre:</strong> <?php echo $nombre; ?></p>
        <p><strong>Comentarios:</strong> <?php echo $comentarios; ?></p>
        <p><strong>Género:</strong> <?php echo $genero; ?></p>
        <p><strong>Vehículos:</strong> <?php echo !empty($vehiculos) ? implode(', ', array_map('htmlspecialchars', $vehiculos)) : 'Ninguno'; ?></p>
        <p><strong>Idioma:</strong> <?php echo $idioma; ?></p>
    <?php endif; ?>
</body>
</html>
