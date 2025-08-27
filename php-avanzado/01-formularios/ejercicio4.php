<?php
// "Sticky form" significa que el formulario recuerda los valores que el usuario introdujo,
// incluso si la página se recarga o hay un error de validación.

$nombre = "";
$email = "";
$nombreErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Se mantienen los valores enviados
    $nombre = isset($_POST['nombre']) ? htmlspecialchars($_POST['nombre']) : '';
    $email = isset($_POST['email']) ? htmlspecialchars($_POST['email']) : '';

    // Validación simple
    if (empty($nombre)) {
        $nombreErr = "El nombre no puede estar vacío.";
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Sticky Form</title>
    <style>.error { color: #FF0000; }</style>
</head>
<body>

<h2>Formulario "Pegajoso"</h2>
<p>Introduce tus datos. Si hay un error, los campos no se borrarán.</p>

<form action="" method="post">
    <!-- El atributo 'value' se usa para "recordar" el dato -->
    Nombre: <input type="text" name="nombre" value="<?php echo $nombre; ?>">
    <span class="error">* <?php echo $nombreErr; ?></span>
    <br><br>

    E-mail: <input type="text" name="email" value="<?php echo $email; ?>">
    <br><br>

    <input type="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $nombreErr == "") {
    echo "<h2>Formulario enviado correctamente!</h2>";
}
?>

</body>
</html>
