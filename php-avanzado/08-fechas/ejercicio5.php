<?php
// Creando un Calendario Simple

function crearCalendario($mes, $año) {
    // Crear el timestamp del primer día del mes
    $primer_dia_ts = mktime(0, 0, 0, $mes, 1, $año);

    // Número de días en el mes
    $dias_en_mes = date('t', $primer_dia_ts);

    // Nombre del mes y año
    $nombre_mes = date('F', $primer_dia_ts);

    // Día de la semana del primer día (1=Lunes, 7=Domingo)
    $dia_semana_inicio = date('N', $primer_dia_ts);

    // Iniciar la tabla del calendario
    $calendario = "<table class='calendario'>";
    $calendario .= "<caption>$nombre_mes $año</caption>";
    $calendario .= "<tr><th>Lun</th><th>Mar</th><th>Mié</th><th>Jue</th><th>Vie</th><th>Sáb</th><th>Dom</th></tr>";
    $calendario .= "<tr>";

    // Rellenar los espacios en blanco al principio del mes
    for ($i = 1; $i < $dia_semana_inicio; $i++) {
        $calendario .= "<td></td>";
    }

    // Rellenar los días del mes
    for ($dia = 1; $dia <= $dias_en_mes; $dia++) {
        // Si es el primer día de la semana (Lunes), empezar una nueva fila
        if ($dia_semana_inicio > 7) {
            $dia_semana_inicio = 1;
            $calendario .= "</tr><tr>";
        }

        // Marcar el día actual
        $clase_hoy = (date('j') == $dia && date('n') == $mes && date('Y') == $año) ? 'hoy' : '';
        $calendario .= "<td class='$clase_hoy'>$dia</td>";
        
        $dia_semana_inicio++;
    }

    // Rellenar los espacios en blanco al final del mes
    while ($dia_semana_inicio <= 7) {
        $calendario .= "<td></td>";
        $dia_semana_inicio++;
    }

    $calendario .= "</tr>";
    $calendario .= "</table>";

    return $calendario;
}

// Establecer la zona horaria
date_default_timezone_set('America/Mexico_City');

// Obtener mes y año actual (o de la URL)
$mes_actual = isset($_GET['mes']) ? (int)$_GET['mes'] : date('n');
$año_actual = isset($_GET['año']) ? (int)$_GET['año'] : date('Y');

?>
<!DOCTYPE html>
<html>
<head>
    <title>Calendario PHP</title>
    <style>
        .calendario { width: 100%; border-collapse: collapse; }
        .calendario th, .calendario td { border: 1px solid #ccc; text-align: center; padding: 10px; }
        .calendario th { background-color: #f2f2f2; }
        .calendario caption { font-size: 1.5em; margin: 10px; }
        .hoy { background-color: #ffc; font-weight: bold; }
    </style>
</head>
<body>

<?php echo crearCalendario($mes_actual, $año_actual); ?>

</body>
</html>
