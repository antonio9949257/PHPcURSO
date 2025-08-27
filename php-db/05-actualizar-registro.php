<?php
require 'conexion.php';

$mensaje = "";
$error = false;
$usuario = null;

// --- PASO 1: OBTENER EL ID Y BUSCAR AL USUARIO ---

// Comprobar si se ha pasado un ID por la URL
if (isset($_GET['id'])) {
    $id = $_GET['id'];

    try {
        $sql = "SELECT id, nombre, email FROM usuarios WHERE id = :id";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':id' => $id]);

        // fetch() devuelve una sola fila, o false si no encuentra nada
        $usuario = $stmt->fetch(PDO::FETCH_ASSOC);

        if (!$usuario) {
            $mensaje = "Usuario no encontrado.";
            $error = true;
        }

    } catch (PDOException $e) {
        die("Error al buscar el usuario: " . $e->getMessage());
    }
}

// --- PASO 2: PROCESAR EL FORMULARIO DE ACTUALIZACIÓN ---

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['id'])) {
    $id = $_POST['id'];
    $nombre = $_POST['nombre'];
    $email = $_POST['email'];

    if (empty($nombre) || empty($email)) {
        $mensaje = "El nombre y el email son obligatorios.";
        $error = true;
        // Recargamos los datos del usuario para mostrar el formulario de nuevo
        $usuario = ['id' => $id, 'nombre' => $nombre, 'email' => $email];
    } else {
        try {
            $sql = "UPDATE usuarios SET nombre = :nombre, email = :email WHERE id = :id";
            $stmt = $pdo->prepare($sql);
            $stmt->execute([
                ':nombre' => $nombre,
                ':email' => $email,
                ':id' => $id
            ]);

            $mensaje = "Usuario actualizado correctamente.";
            // Para ver el cambio, volvemos a cargar los datos del usuario desde la BD
            $usuario = ['id' => $id, 'nombre' => $nombre, 'email' => $email];

        } catch (PDOException $e) {
            $mensaje = "Error al actualizar el usuario: " . $e->getMessage();
            $error = true;
            $usuario = ['id' => $id, 'nombre' => $nombre, 'email' => $email];
        }
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Actualizar Registro</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Paso 5: Actualizar un Registro</h1>

    <a href="04-seleccionar-registros.php">&larr; Ver lista de usuarios</a>

    <?php if ($usuario): ?>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?php echo htmlspecialchars($usuario['id']); ?>">
            
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" value="<?php echo htmlspecialchars($usuario['nombre']); ?>" required>
            
            <label for="email">Email:</label>
            <input type="email" id="email" name="email" value="<?php echo htmlspecialchars($usuario['email']); ?>" required>
            
            <input type="submit" value="Actualizar Usuario">
        </form>
    <?php elseif (!isset($_GET['id'])): ?>
        <p>Por favor, selecciona un usuario de la <a href="04-seleccionar-registros.php">lista</a> para editarlo.</p>
    <?php endif; ?>

    <?php if (!empty($mensaje)): ?>
        <div class="mensaje <?php echo $error ? 'error' : 'exito'; ?>">
            <?php echo $mensaje; ?>
        </div>
    <?php endif; ?>

    <br>
    <a href="06-eliminar-registro.php">Siguiente paso: Eliminar un registro &rarr;</a>

</body>
</html>
