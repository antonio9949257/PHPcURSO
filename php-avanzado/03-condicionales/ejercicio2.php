<?php
header('Content-Type: text/plain');

// Control de Acceso Basado en Roles (switch)

function obtenerPermisos($rol) {
    switch ($rol) {
        case 'admin':
            return "Acceso total al sistema.";
            break;
        case 'editor':
            return "Acceso para crear y editar contenido.";
            break;
        case 'suscriptor':
            return "Acceso para ver contenido exclusivo.";
            break;
        case 'visitante':
            return "Acceso limitado a páginas públicas.";
            break;
        default:
            return "Rol no reconocido. Acceso denegado.";
            break;
    }
}

$rol_usuario1 = 'admin';
$rol_usuario2 = 'suscriptor';
$rol_usuario3 = 'invitado';

echo "Control de Acceso por Roles:\n";
echo "Usuario 1 (Rol: $rol_usuario1): " . obtenerPermisos($rol_usuario1) . "\n";
echo "Usuario 2 (Rol: $rol_usuario2): " . obtenerPermisos($rol_usuario2) . "\n";
echo "Usuario 3 (Rol: $rol_usuario3): " . obtenerPermisos($rol_usuario3) . "\n";

?>