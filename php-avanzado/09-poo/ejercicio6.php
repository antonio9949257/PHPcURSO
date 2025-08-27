<?php
header('Content-Type: text/plain');

// Una clase abstracta es una clase que no puede ser instanciada.
// Sirve como una clase base para otras clases, forzando a las clases hijas
// a implementar ciertos métodos (métodos abstractos).

// --- Clase Abstracta ---
abstract class FormaGeometrica {
    protected $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Un método normal que las clases hijas heredarán
    public function getNombre() {
        return $this->nombre;
    }

    // Un método abstracto. No tiene cuerpo ({}) y debe ser implementado
    // por cualquier clase que herede de FormaGeometrica.
    abstract public function calcularArea();
}

// --- Clases Hijas ---

class Circulo extends FormaGeometrica {
    private $radio;

    public function __construct($radio) {
        parent::__construct("Círculo");
        $this->radio = $radio;
    }

    // Implementación obligatoria del método abstracto
    public function calcularArea() {
        return pi() * $this->radio * $this->radio;
    }
}

class Rectangulo extends FormaGeometrica {
    private $ancho;
    private $alto;

    public function __construct($ancho, $alto) {
        parent::__construct("Rectángulo");
        $this->ancho = $ancho;
        $this->alto = $alto;
    }

    // Implementación obligatoria del método abstracto
    public function calcularArea() {
        return $this->ancho * $this->alto;
    }
}

// $forma = new FormaGeometrica("algo"); // Error: No se puede instanciar una clase abstracta

$circulo = new Circulo(10);
echo "Forma: " . $circulo->getNombre() . "\n";
echo "Área: " . $circulo->calcularArea() . "\n\n";

$rectangulo = new Rectangulo(5, 10);
echo "Forma: " . $rectangulo->getNombre() . "\n";
echo "Área: " . $rectangulo->calcularArea() . "\n";

?>
