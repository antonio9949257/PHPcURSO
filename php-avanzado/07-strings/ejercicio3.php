<?php
// La función htmlspecialchars() es crucial para la seguridad en aplicaciones web.
// Convierte caracteres especiales en sus entidades HTML correspondientes.
// Esto previene ataques de Cross-Site Scripting (XSS), donde un atacante
// podría inyectar código HTML o JavaScript malicioso en tu página.

// Caracteres que convierte:
// & (ampersand) se convierte en &amp;
// " (comillas dobles) se convierte en &quot;
// ' (comillas simples) se convierte en &#039; o &apos;
// < (menor que) se convierte en &lt;
// > (mayor que) se convierte en &gt;

// Simulamos una entrada de usuario maliciosa
$comentario_malicioso = '<script>alert("¡Has sido hackeado!");</script>';

// Simulamos una entrada de usuario normal
$comentario_normal = 'Me parece un > gran producto & es barato.';

?>
<!DOCTYPE html>
<html>
<head>
    <title>Seguridad con htmlspecialchars</title>
    <style>
        body { font-family: sans-serif; }
        .card { border: 1px solid #ccc; padding: 10px; margin-bottom: 10px; border-radius: 5px; }
        .card-header { font-weight: bold; border-bottom: 1px solid #eee; padding-bottom: 5px; margin-bottom: 5px; }
    </style>
</head>
<body>

    <h1>Comentarios de Usuarios</h1>

    <div class="card">
        <div class="card-header">Comentario SIN htmlspecialchars (INSEGURO)</div>
        <div><?php echo $comentario_malicioso; ?></div>
        <!-- En el navegador, esto ejecutará el script de JavaScript. -->
    </div>

    <div class="card">
        <div class="card-header">Comentario CON htmlspecialchars (SEGURO)</div>
        <div><?php echo htmlspecialchars($comentario_malicioso); ?></div>
        <!-- En el navegador, esto mostrará el texto del script de forma segura, sin ejecutarlo. -->
    </div>

    <div class="card">
        <div class="card-header">Comentario normal CON htmlspecialchars</div>
        <div><?php echo htmlspecialchars($comentario_normal); ?></div>
        <!-- Los caracteres > y & se mostrarán correctamente sin romper el HTML. -->
    </div>

</body>
</html>
