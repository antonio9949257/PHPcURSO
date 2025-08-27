<?php
require 'conexion.php'; // Reutilizamos la conexión
$mensaje = "";
$error = false;

// Comprobar si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // --- 1. OBTENER DATOS DEL FORMULARIO ---
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    // Validación simple
    if (empty($nombre) || empty($email)) {
        $mensaje = "Por favor, completa todos los campos.";
        $error = true;
    } else {
        try {
            // --- 2. PREPARAR LA SENTENCIA SQL ---
            // Se usan placeholders (:nombre, :email) para evitar inyección SQL.
            // El motor de la base de datos trata los valores como datos puros, no como código SQL.
            $sql = "INSERT INTO usuarios (nombre, email) VALUES (:nombre, :email)";
            $stmt = $pdo->prepare($sql);

            // --- 3. VINCULAR LOS DATOS Y EJECUTAR ---
            // Pasamos un array asociativo a execute() donde las claves coinciden con los placeholders.
            $stmt->execute([
                ':nombre' => $nombre,
                ':email' => $email
            ]);

            $mensaje = "Usuario '" . htmlspecialchars($nombre) . "' insertado correctamente.";

        } catch (PDOException $e) {
            // Comprobar si el error es por una clave única duplicada (email)
            if ($e->getCode() == 23000 || strpos($e->getMessage(), 'UNIQUE constraint failed') !== false) {
                $mensaje = "Error: El email '" . htmlspecialchars($email) . "' ya está registrado.";
            } else {
                $mensaje = "Error al insertar el usuario: " . $e->getMessage();
            }
            $error = true;
        }
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Insertar Datos</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Paso 3: Insertar Datos de Forma Segura</h1>

    <form action="" method="post">
        <label for="nombre">Nombre:</label>
        <input type="text" id="nombre" name="nombre" required>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required>
        
        <input type="submit" value="Añadir Usuario">
    </form>

    <?php if (!empty($mensaje)): ?>
        <div class="mensaje <?php echo $error ? 'error' : 'exito'; ?>">
            <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>

    <br>
    <a href="04-seleccionar-registros.php">Siguiente paso: Seleccionar registros &rarr;</a>

</body>
</html>
