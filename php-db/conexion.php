<?php
// Este archivo centraliza la conexión para que los demás lo puedan usar.
// Así, si necesitamos cambiar los datos de conexión, solo lo hacemos en un lugar.

$ruta_db = __DIR__ . '/database.sqlite';
$dsn = 'sqlite:' . $ruta_db;

try {
    $pdo = new PDO($dsn);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Si hay un error crítico de conexión, detenemos la ejecución y mostramos el error.
    die("Error fatal: No se pudo conectar a la base de datos: " . $e->getMessage());
}
?>