<?php
if (!empty($_ENV)) {
    echo "<h1>Variables de entorno:</h1>";
    echo "<pre>";
    print_r($_ENV);
    echo "</pre>";
} else {
    echo "No hay variables de entorno disponibles o la directiva 'variables_order' no incluye 'E'.";
}
?>