<?php
$nombreErr = $emailErr = "";
$nombre = $email = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validar nombre
    if (empty($_POST["nombre"])) {
        $nombreErr = "El nombre es obligatorio.";
    } else {
        $nombre = test_input($_POST["nombre"]);
    }

    // Validar email
    if (empty($_POST["email"])) {
        $emailErr = "El email es obligatorio.";
    } else {
        $email = test_input($_POST["email"]);
        // Comprobar si el formato de email es válido
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Formato de email inválido.";
        }
    }
}

// Función para limpiar los datos de entrada
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Validación de Formulario</title>
    <style>.error { color: #FF0000; }</style>
</head>
<body>

<h2>Formulario de Registro</h2>
<p><span class="error">* campo obligatorio</span></p>
<form method="post" action="">
    Nombre: <input type="text" name="nombre">
    <span class="error">* <?php echo $nombreErr;?></span>
    <br><br>
    E-mail: <input type="text" name="email">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <input type="submit" name="submit" value="Enviar">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST" && $nombreErr == "" && $emailErr == "") {
    echo "<h2>Datos Correctos:</h2>";
    echo "<p>Nombre: $nombre</p>";
    echo "<p>Email: $email</p>";
}
?>

</body>
</html>
