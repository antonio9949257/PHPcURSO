<?php
require 'conexion.php';

$mensaje = "";
$error = false;
$usuario = null;

// --- PASO 2: PROCESAR LA ELIMINACIÓN (si se envió el formulario) ---
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    try {
        $sql = "DELETE FROM usuarios WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        $mensaje = "Usuario eliminado correctamente.";
        // No hay datos de usuario que mostrar porque ya fue eliminado.
        $usuario = false;

    } catch (PDOException $e) {
        $mensaje = "Error al eliminar el usuario: " . $e->getMessage();
        $error = true;
    }
}
// --- PASO 1: MOSTRAR LA CONFIRMACIÓN (si se pasó un ID por GET) ---
elseif (isset($_GET['id'])) {
    $id = $_GET['id'];
    try {
        $sql = "SELECT id, nombre, email FROM usuarios WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$usuario) {
            $mensaje = "No se encontró un usuario con ese ID.";
            $error = true;
            $usuario = null;
        }
    } catch (PDOException $e) {
        die("Error al buscar el usuario: " . $e->getMessage());
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Eliminar Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Paso 6: Eliminar un Registro</h1>

    <a href="04-seleccionar-registros.php">&larr; Ver lista de usuarios</a>

    <?php if (!empty($mensaje)): ?>
        <div class="mensaje <?php echo $error ? 'error' : 'exito'; ?>">
            <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>

    <?php if ($usuario): ?>
        <h2>Confirmar Eliminación</h2>
        <p>¿Estás seguro de que quieres eliminar al siguiente usuario?</p>
        <ul>
            <li><strong>ID:</strong> <?php echo htmlspecialchars($usuario['id']); ?></li>
            <li><strong>Nombre:</strong> <?php echo htmlspecialchars($usuario['nombre']); ?></li>
            <li><strong>Email:</strong> <?php echo htmlspecialchars($usuario['email']); ?></li>
        </ul>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($usuario['id']); ?>">
            <input type="submit" value="Sí, Eliminar" style="background-color: #dc3545; color: white; border-color: #dc3545;">
            <a href="04-seleccionar-registros.php" style="margin-left: 10px;">No, Cancelar</a>
        </form>
    <?php elseif (!isset($_GET['id']) && $_SERVER["REQUEST_METHOD"] != "POST"): ?>
        <p>Por favor, selecciona un usuario de la <a href="04-seleccionar-registros.php">lista</a> para eliminarlo.</p>
    <?php endif; ?>

    <br><br>
    <a href="07-app-crud.php">Siguiente paso: App CRUD Completa &rarr;</a>

</body>
</html>
