<?php
header('Content-Type: text/plain');

// Clase: Una plantilla para crear objetos.
// Objeto: Una instancia de una clase.

class Producto {
    // Propiedades: variables que pertenecen a la clase.
    public $nombre;
    public $precio;
    public $disponible;

    // Métodos: funciones que pertenecen a la clase.
    public function mostrarNombre() {
        echo "El nombre del producto es: " . $this->nombre . "\n";
    }
}

// Crear un objeto (instancia) de la clase Producto
$producto1 = new Producto();

// Asignar valores a las propiedades del objeto
$producto1->nombre = "Tablet 10 pulgadas";
$producto1->precio = 200;
$producto1->disponible = true;

// Llamar a un método del objeto
$producto1->mostrarNombre();

// Acceder a las propiedades
echo "Precio: $" . $producto1->precio . "\n";
echo "Disponible: " . ($producto1->disponible ? 'Sí' : 'No') . "\n";

// Crear un segundo objeto
$producto2 = new Producto();
$producto2->nombre = "Monitor Curvo";
$producto2->precio = 400;

$producto2->mostrarNombre();

?>