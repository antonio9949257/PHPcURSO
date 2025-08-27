<?php
header('Content-Type: text/plain');

// Las propiedades y métodos estáticos pertenecen a la clase en sí, no a una instancia (objeto) de la clase.
// Se pueden llamar sin necesidad de crear un objeto.

class Configuracion {
    // Propiedad estática
    public static $nombre_sitio = "Mi increíble Sitio Web";

    // Propiedad estática privada para un contador
    private static $contador_objetos = 0;

    public function __construct() {
        // Accedemos a la propiedad estática con self::
        self::$contador_objetos++;
    }

    // Método estático
    public static function getNombreSitio() {
        // Para acceder a una propiedad estática dentro de un método estático, se usa self::
        return self::$nombre_sitio;
    }

    public static function getContador() {
        return self::$contador_objetos;
    }
}

// --- Acceso sin crear un objeto ---

// Acceder a una propiedad estática pública
echo "Nombre del sitio (desde la clase): " . Configuracion::$nombre_sitio . "\n";

// Llamar a un método estático público
echo "Nombre del sitio (vía método estático): " . Configuracion::getNombreSitio() . "\n";

echo "\n--- Uso con instancias ---\n";
echo "Contador inicial: " . Configuracion::getContador() . "\n";

$obj1 = new Configuracion();
echo "Contador después del objeto 1: " . Configuracion::getContador() . "\n";

$obj2 = new Configuracion();
echo "Contador después del objeto 2: " . Configuracion::getContador() . "\n";

?>