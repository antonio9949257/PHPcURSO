<?php
// --- 1. CONFIGURACIÓN DE LA CONEXIÓN ---

// SQLite usa un archivo para la base de datos. Vamos a definir la ruta.
// __DIR__ es una constante mágica de PHP que devuelve el directorio del script actual.
// Esto asegura que la ruta al archivo de la base de datos sea siempre correcta.
$ruta_db = __DIR__ . '/database.sqlite';

// DSN (Data Source Name) para SQLite
$dsn = 'sqlite:' . $ruta_db;

// Mensaje para mostrar el resultado
$mensaje = "";

// --- 2. INTENTO DE CONEXIÓN ---

try {
    // Crear una nueva instancia de PDO (PHP Data Objects)
    // PDO es una capa de abstracción que permite conectar a diferentes tipos de bases de datos (MySQL, PostgreSQL, SQLite, etc.)
    // usando el mismo conjunto de funciones.
    $pdo = new PDO($dsn);

    // Configurar PDO para que lance excepciones en caso de error.
    // Esto es una buena práctica para manejar errores de forma centralizada con try-catch.
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $mensaje = "¡Conexión a la base de datos SQLite establecida con éxito!";

    // En un escenario real, podrías querer cerrar la conexión cuando termines,
    // aunque PHP lo hace automáticamente al final del script.
    // $pdo = null;

} catch (PDOException $e) {
    // Si algo sale mal durante la conexión, se captura una excepción de tipo PDOException.
    $mensaje = "Error al conectar a la base de datos: " . $e->getMessage();
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>Conexión a Base de Datos con PDO</title>
    <style>
        body { font-family: sans-serif; padding: 20px; }
        .mensaje { padding: 15px; border-radius: 5px; }
        .exito { background-color: #d4edda; color: #155724; border: 1px solid #c3e6cb; }
        .error { background-color: #f8d7da; color: #721c24; border: 1px solid #f5c6cb; }
    </style>
</head>
<body>

    <h1>Paso 1: Conexión a la Base de Datos (SQLite)</h1>
    
    <div class="mensaje <?php echo (isset($e)) ? 'error' : 'exito'; ?>">
        <?php echo $mensaje; ?>
    </div>

    <?php if (!isset($e)): ?>
        <p>El archivo de la base de datos se encuentra en: <strong><?php echo $ruta_db; ?></strong></p>
        <p>Si no existía, PDO lo ha creado automáticamente.</p>
        <p>El siguiente paso es crear una tabla.</p>
    <?php endif; ?>

</body>
</html>
