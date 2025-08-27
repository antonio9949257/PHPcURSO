<?php
// El método GET envía los datos del formulario en la URL.
// Es visible para todos y tiene un límite de longitud.
// Es útil para búsquedas o filtros donde quieres que la URL sea compartible.

// El método POST envía los datos en el cuerpo de la solicitud HTTP.
// No es visible en la URL y no tiene límite de tamaño.
// Es útil para formularios con información sensible (contraseñas) o grandes cantidades de datos.
?>
<!DOCTYPE html>
<html>
<head>
    <title>GET vs POST</title>
</head>
<body>

    <h2>Formulario con GET</h2>
    <form action="" method="get">
        <input type="text" name="busqueda_get" placeholder="Buscar algo...">
        <input type="submit" value="Buscar con GET">
    </form>

    <h2>Formulario con POST</h2>
    <form action="" method="post">
        <input type="text" name="usuario_post" placeholder="Nombre de usuario">
        <input type="password" name="pass_post" placeholder="Contraseña">
        <input type="submit" value="Iniciar sesión con POST">
    </form>

    <hr>

    <h2>Resultados</h2>
    <?php
        if (!empty($_GET['busqueda_get'])) {
            echo "<p>Búsqueda (GET): " . htmlspecialchars($_GET['busqueda_get']) . "</p>";
        }

        if (!empty($_POST['usuario_post'])) {
            echo "<p>Usuario (POST): " . htmlspecialchars($_POST['usuario_post']) . "</p>";
            echo "<p><i>(La contraseña se envió pero no se muestra por seguridad)</i></p>";
        }
    ?>
</body>
</html>
