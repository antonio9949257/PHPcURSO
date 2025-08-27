<?php
// Incluir la lógica de conexión para reutilizarla.
// En una aplicación real, esto estaría en un archivo de configuración o bootstrap.
$ruta_db = __DIR__ . '/database.sqlite';
$dsn = 'sqlite:' . $ruta_db;
$mensaje = "";
$error = false;

try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // --- 1. DEFINIR EL SQL PARA CREAR LA TABLA ---
    // Se usa "IF NOT EXISTS" para evitar errores si el script se ejecuta varias veces.
    $sql = "
    CREATE TABLE IF NOT EXISTS usuarios (
        id INTEGER PRIMARY KEY AUTOINCREMENT,
        nombre TEXT NOT NULL,
        email TEXT NOT NULL UNIQUE,
        fecha_registro DATETIME DEFAULT CURRENT_TIMESTAMP
    );
    ";

    // --- 2. EJECUTAR EL SQL ---
    // El método exec() se usa para sentencias SQL que no devuelven resultados (como CREATE, INSERT, UPDATE, DELETE).
    // Devuelve el número de filas afectadas.
    $pdo->exec($sql);

    $mensaje = "Tabla 'usuarios' creada con éxito (o ya existía).";

} catch (PDOException $e) {
    $mensaje = "Error al crear la tabla: " . $e->getMessage();
    $error = true;
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Crear Tabla en la Base de Datos</title>
    <link rel="stylesheet" href="style.css"> <!-- Usaremos un CSS simple para todos los ejercicios -->
</head>
<body>

    <h1>Paso 2: Crear una Tabla</h1>
    
    <div class="mensaje <?php echo $error ? 'error' : 'exito'; ?>">
        <?php echo $mensaje; ?>
    </div>

    <?php if (!$error): ?>
        <p>La tabla <strong>usuarios</strong> ahora está lista para recibir datos.</p>
        <p>La estructura es la siguiente:</p>
        <ul>
            <li><strong>id</strong>: Identificador único (se genera solo).</li>
            <li><strong>nombre</strong>: El nombre del usuario (texto).</li>
            <li><strong>email</strong>: El email del usuario (texto, debe ser único).</li>
            <li><strong>fecha_registro</strong>: La fecha y hora en que se crea el registro (se genera sola).</li>
        </ul>
        <a href="03-insertar-datos.php">Siguiente paso: Insertar datos &rarr;</a>
    <?php endif; ?>

</body>
</html>
<?php
// Crear un archivo CSS simple para compartir entre los ejercicios
if (!file_exists(__DIR__ . '/style.css')) {
    $css = "body { font-family: sans-serif; padding: 20px; background-color: #f4f4f4; color: #333; } h1 { color: #0056b3; } .mensaje { padding: 15px; border-radius: 5px; margin: 15px 0; } .exito { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; } .error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; } a { color: #0056b3; } table { width: 100%; border-collapse: collapse; margin-top: 20px; } th, td { padding: 10px; border: 1px solid #ddd; text-align: left; } th { background-color: #e9ecef; } form { background-color: #fff; padding: 20px; border-radius: 5px; border: 1px solid #ddd; } input[type=text], input[type=email] { width: 100%; padding: 8px; margin-bottom: 10px; border-radius: 4px; border: 1px solid #ccc; box-sizing: border-box; }";
    file_put_contents(__DIR__ . '/style.css', $css);
}
?>
