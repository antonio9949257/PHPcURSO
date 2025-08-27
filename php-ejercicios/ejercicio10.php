<?php
header('Content-Type: text/plain');

echo "EJERCICIO 10: PROGRAMACIÓN ORIENTADA A OBJETOS (POO)

";

// --- Clases y Objetos ---
echo "--- Clases y Objetos ---
";

class Vehiculo {
    // Propiedades (visibilidad public)
    public $marca;
    public $modelo;

    // Constructor: se ejecuta al crear un nuevo objeto
    public function __construct($marca, $modelo) {
        echo "Se ha creado un nuevo vehículo.
";
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    // Método
    public function mostrarInfo() {
        return "Vehículo: " . $this->marca . " " . $this->modelo;
    }
}

// Crear un objeto (instancia) de la clase Vehiculo
$miCoche = new Vehiculo("Toyota", "Corolla");
echo $miCoche->mostrarInfo() . "

";


// --- Herencia y Visibilidad ---
echo "--- Herencia y Visibilidad ---
";

class Coche extends Vehiculo {
    // Propiedad privada (solo accesible desde esta clase)
    private $numeroPuertas;

    // Propiedad protegida (accesible desde esta clase y clases hijas)
    protected $tipoMotor;

    public function __construct($marca, $modelo, $puertas, $motor) {
        // Llamar al constructor de la clase padre (Vehiculo)
        parent::__construct($marca, $modelo);
        $this->numeroPuertas = $puertas;
        $this->tipoMotor = $motor;
    }

    // Sobrescribir un método de la clase padre
    public function mostrarInfo() {
        return "Coche: " . $this->marca . " " . $this->modelo . " con " . $this->numeroPuertas . " puertas y motor " . $this->tipoMotor;
    }
    
    public function getNumeroPuertas(){
        return $this->numeroPuertas;
    }
}

$miSegundoCoche = new Coche("Honda", "Civic", 4, "Gasolina");
echo $miSegundoCoche->mostrarInfo() . "
";
// echo $miSegundoCoche->numeroPuertas; // Esto daría un error porque la propiedad es privada
echo "El coche tiene " . $miSegundoCoche->getNumeroPuertas() . " puertas.

";


// --- Métodos Estáticos ---
echo "--- Métodos Estáticos ---
";

class Calculadora {
    // Un método estático se puede llamar sin crear una instancia de la clase
    public static function sumar($a, $b) {
        return $a + $b;
    }
}

// Llamar a un método estático
$resultadoSuma = Calculadora::sumar(10, 5);
echo "Resultado de la suma estática: " . $resultadoSuma . "
";

?>
