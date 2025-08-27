<?php
require 'conexion.php';

// --- INICIALIZACIÓN Y CREACIÓN DE TABLA ---
try {
    // Crear la tabla de tareas si no existe
    $pdo->exec("
    CREATE TABLE IF NOT EXISTS tareas (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        titulo TEXT NOT NULL,
        completada INTEGER DEFAULT 0,
        fecha_creacion DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    ");
} catch (PDOException $e) {
    die("Error al crear la tabla de tareas: " . $e->getMessage());
}

$accion = $_REQUEST['accion'] ?? 'listar';
$id = $_GET['id'] ?? null;
$mensaje = "";
$error = false;

// --- LÓGICA PARA MANEJAR ACCIONES POST (Crear, Actualizar, Eliminar) ---
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    try {
        switch ($accion) {
            case 'crear':
                $titulo = $_POST['titulo'] ?? '';
                if (empty($titulo)) throw new Exception("El título no puede estar vacío.");
                $stmt = $pdo->prepare("INSERT INTO tareas (titulo) VALUES (:titulo)");
                $stmt->execute([':titulo' => $titulo]);
                $mensaje = "Tarea creada con éxito.";
                break;

            case 'actualizar':
                $titulo = $_POST['titulo'] ?? '';
                $completada = isset($_POST['completada']) ? 1 : 0;
                if (empty($titulo) || $id === null) throw new Exception("Datos inválidos.");
                $stmt = $pdo->prepare("UPDATE tareas SET titulo = :titulo, completada = :completada WHERE id = :id");
                $stmt->execute([':titulo' => $titulo, ':completada' => $completada, ':id' => $id]);
                $mensaje = "Tarea actualizada con éxito.";
                break;

            case 'eliminar':
                if ($id === null) throw new Exception("ID inválido.");
                $stmt = $pdo->prepare("DELETE FROM tareas WHERE id = :id");
                $stmt->execute([':id' => $id]);
                $mensaje = "Tarea eliminada con éxito.";
                break;
        }
    } catch (Exception $e) {
        $mensaje = $e->getMessage();
        $error = true;
    }
    // Después de una acción POST, redirigimos a la lista para evitar reenvíos del formulario
    if (!$error) {
        header("Location: 07-app-crud.php?mensaje=" . urlencode($mensaje));
        exit;
    }
}

// --- LÓGICA PARA OBTENER DATOS PARA LAS VISTAS (Listar, Editar) ---
$tareas = [];
$tarea_actual = null;

if ($accion === 'listar') {
    $stmt = $pdo->query("SELECT * FROM tareas ORDER BY fecha_creacion DESC");
    $tareas = $stmt->fetchAll(PDO::FETCH_ASSOC);
}

if ($accion === 'editar' && $id !== null) {
    $stmt = $pdo->prepare("SELECT * FROM tareas WHERE id = :id");
    $stmt->execute([':id' => $id]);
    $tarea_actual = $stmt->fetch(PDO::FETCH_ASSOC);
}

// Mensaje de éxito desde la redirección
if (isset($_GET['mensaje'])) {
    $mensaje = $_GET['mensaje'];
}

?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>App de Tareas (CRUD)</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <h1>Paso 7: Aplicación CRUD de Tareas</h1>

    <?php if (!empty($mensaje)): ?>
        <div class="mensaje <?php echo $error ? 'error' : 'exito'; ?>"><?php echo htmlspecialchars($mensaje); ?></div>
    <?php endif; ?>

    <?php if ($accion === 'editar' && $tarea_actual): ?>
        <!-- VISTA DE EDICIÓN -->
        <h2>Editar Tarea</h2>
        <form action="?accion=actualizar&id=<?php echo $tarea_actual['id']; ?>" method="post">
            <input type="text" name="titulo" value="<?php echo htmlspecialchars($tarea_actual['titulo']); ?>" required>
            <label>
                <input type="checkbox" name="completada" <?php echo $tarea_actual['completada'] ? 'checked' : ''; ?>>
                Completada
            </label>
            <input type="submit" value="Actualizar Tarea">
            <a href="?">Cancelar</a>
        </form>
    <?php else: ?>
        <!-- VISTA DE CREACIÓN Y LISTADO -->
        <h2>Nueva Tarea</h2>
        <form action="?accion=crear" method="post">
            <input type="text" name="titulo" placeholder="Escribe una nueva tarea" required>
            <input type="submit" value="Añadir Tarea">
        </form>

        <h2>Lista de Tareas</h2>
        <?php if (empty($tareas)): ?>
            <p>No hay tareas pendientes. ¡Añade una!</p>
        <?php else: ?>
            <table>
                <thead>
                    <tr>
                        <th>Estado</th>
                        <th>Título</th>
                        <th>Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($tareas as $tarea): ?>
                        <tr style="<?php echo $tarea['completada'] ? 'text-decoration: line-through; color: #888;' : ''; ?>">
                            <td><?php echo $tarea['completada'] ? 'Completada' : 'Pendiente'; ?></td>
                            <td><?php echo htmlspecialchars($tarea['titulo']); ?></td>
                            <td>
                                <a href="?accion=editar&id=<?php echo $tarea['id']; ?>">Editar</a>
                                <form action="?accion=eliminar&id=<?php echo $tarea['id']; ?>" method="post" style="display:inline;" onsubmit="return confirm('¿Estás seguro?');">
                                    <button type="submit" style="border:none; background:none; color:#0056b3; padding:0; font-size:inherit; cursor:pointer;">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        <?php endif; ?>
    <?php endif; ?>

</body>
</html>
