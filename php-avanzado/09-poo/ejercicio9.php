<?php
header('Content-Type: text/plain');

// Los métodos mágicos son métodos especiales que se ejecutan automáticamente en respuesta a ciertos eventos.
// Se reconocen porque sus nombres empiezan con doble guion bajo (__).

class PropiedadPrivada {
    private $datos = [];

    // __set(): Se ejecuta al intentar escribir en una propiedad inaccesible (privada o no existente).
    public function __set($nombre, $valor) {
        echo "__set: Intentando establecer la propiedad '$nombre' a '$valor'\n";
        $this->datos[$nombre] = $valor;
    }

    // __get(): Se ejecuta al intentar leer una propiedad inaccesible.
    public function __get($nombre) {
        echo "__get: Intentando obtener la propiedad '$nombre'\n";
        return isset($this->datos[$nombre]) ? $this->datos[$nombre] : null;
    }

    // __isset(): Se ejecuta cuando se llama a isset() o empty() en una propiedad inaccesible.
    public function __isset($nombre) {
        echo "__isset: Comprobando si la propiedad '$nombre' está definida\n";
        return isset($this->datos[$nombre]);
    }

    // __unset(): Se ejecuta cuando se llama a unset() en una propiedad inaccesible.
    public function __unset($nombre) {
        echo "__unset: Eliminando la propiedad '$nombre'\n";
        unset($this->datos[$nombre]);
    }

    // __toString(): Se ejecuta cuando se intenta tratar un objeto como un string.
    public function __toString() {
        echo "__toString: Convirtiendo el objeto a string\n";
        return "Propiedades: " . json_encode($this->datos);
    }
}

$obj = new PropiedadPrivada();

// Estos llaman a __set()
$obj->nombre = "Juan";
$obj->edad = 30;

// Estos llaman a __get()
echo "Nombre: " . $obj->nombre . "\n";
echo "Edad: " . $obj->edad . "\n";

// Esto llama a __isset()
if (isset($obj->nombre)) {
    echo "La propiedad 'nombre' existe.\n";
}

// Esto llama a __unset()
unset($obj->edad);

// Esto llama a __toString()
echo $obj . "\n";

?>