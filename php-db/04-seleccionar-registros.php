<?php
require 'conexion.php'; // Reutilizamos la conexión

try {
    // --- 1. PREPARAR Y EJECUTAR LA CONSULTA ---
    $sql = "SELECT id, nombre, email, fecha_registro FROM usuarios ORDER BY fecha_registro DESC";
    $stmt = $pdo->prepare($sql);
    $stmt->execute();

    // --- 2. OBTENER LOS RESULTADOS ---
    // fetchAll(PDO::FETCH_ASSOC) devuelve un array de arrays asociativos (clave => valor).
    // Es ideal para convertirlo a JSON o para iterar y mostrar en una tabla.
    $usuarios = $stmt->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    // En un caso real, aquí podrías registrar el error en un log
    die("Error al consultar los usuarios: " . $e->getMessage());
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Seleccionar Registros</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <h1>Paso 4: Seleccionar y Mostrar Registros</h1>

    <a href="03-insertar-datos.php">&larr; Volver a insertar</a>

    <?php if (empty($usuarios)): ?>
        <p>No hay usuarios registrados todavía.</p>
    <?php else: ?>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nombre</th>
                    <th>Email</th>
                    <th>Fecha de Registro</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($usuarios as $usuario): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($usuario['id']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['nombre']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['email']); ?></td>
                        <td><?php echo htmlspecialchars($usuario['fecha_registro']); ?></td>
                        <td>
                            <a href="05-actualizar-registro.php?id=<?php echo $usuario['id']; ?>">Editar</a>
                            <a href="06-eliminar-registro.php?id=<?php echo $usuario['id']; ?>">Eliminar</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>

    <br>
    <a href="05-actualizar-registro.php">Siguiente paso: Actualizar un registro &rarr;</a>

</body>
</html>
