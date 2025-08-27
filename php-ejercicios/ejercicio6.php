<?php
header('Content-Type: text/plain');

echo "EJERCICIO 6: ESTRUCTURAS CONDICIONALES

";

// --- IF, ELSEIF, ELSE ---
echo "--- IF, ELSEIF, ELSE ---
";
$edad = 20;
echo "La edad es $edad.
";

if ($edad < 18) {
    echo "Eres menor de edad.
";
} elseif ($edad >= 18 && $edad <= 65) {
    echo "Eres un adulto.
";
} else {
    echo "Eres un adulto mayor.
";
}

// --- IF Anidado ---
echo "
--- IF Anidado ---
";
$autenticado = true;
$es_admin = false;
echo "Usuario autenticado: " . ($autenticado ? 'si' : 'no') . ", Es admin: " . ($es_admin ? 'si' : 'no') . "
";

if ($autenticado) {
    echo "Bienvenido. ";
    if ($es_admin) {
        echo "Tienes acceso al panel de administración.
";
    } else {
        echo "No tienes permisos de administrador.
";
    }
} else {
    echo "Por favor, inicia sesión.
";
}


// --- SWITCH ---
echo "
--- SWITCH ---
";
$dia = "lunes";
echo "El día es $dia.
";

switch ($dia) {
    case "lunes":
        echo "Hoy es el primer día de la semana.
";
        break;
    case "viernes":
        echo "¡Casi es fin de semana!
";
        break;
    default:
        echo "Es un día normal.
";
        break;
}
?>
