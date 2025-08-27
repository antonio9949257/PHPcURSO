<?php
header('Content-Type: text/plain');

// Arrays Multidimensionales

// Un array multidimensional es un array que contiene otros arrays.

$estudiantes = [
    // Estudiante 1
    [
        "nombre" => "Juan Perez",
        "edad" => 20,
        "calificaciones" => ["Matemáticas" => 9, "Historia" => 8, "Inglés" => 10]
    ],
    // Estudiante 2
    [
        "nombre" => "Maria Lopez",
        "edad" => 22,
        "calificaciones" => ["Matemáticas" => 10, "Historia" => 7, "Inglés" => 9]
    ],
    // Estudiante 3
    [
        "nombre" => "Carlos Sanchez",
        "edad" => 21,
        "calificaciones" => ["Matemáticas" => 8, "Historia" => 9, "Inglés" => 8]
    ]
];

// Acceder a los datos
echo "Accediendo a datos específicos:\n";
echo "- Nombre del segundo estudiante: " . $estudiantes[1]["nombre"] . "\n";
echo "- Calificación de Historia del primer estudiante: " . $estudiantes[0]["calificacionesਤਾ"]["Historia"] . "\n\n";

// Recorrer el array multidimensional con bucles anidados
echo "Listado de todos los estudiantes y sus calificaciones:\n";
foreach ($estudiantes as $estudiante) {
    echo "------------------------------------
";
    echo "Nombre: " . $estudiante["nombre"] . "\n";
    echo "Edad: " . $estudiante["edad"] . "\n";
    echo "Calificaciones:\n";
    foreach ($estudiante["calificaciones"] as $materia => $nota) {
        echo "  - $materia: $nota\n";
    }
}

?>