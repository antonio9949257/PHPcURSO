<?php
header('Content-Type: text/plain');

// La herencia permite que una clase (clase hija) herede las propiedades y métodos
// de otra clase (clase padre).

// --- Clase Padre ---
class Animal {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    public function comer() {
        echo "El animal $this->nombre está comiendo.\n";
    }

    public function dormir() {
        echo "El animal $this->nombre está durmiendo.\n";
    }
}

// --- Clase Hija ---
// La clase Perro hereda de Animal usando la palabra clave 'extends'.
class Perro extends Animal {
    // Puede tener sus propios métodos
    public function ladrar() {
        echo "El perro $this->nombre está ladrando: ¡Guau! ¡Guau!\n";
    }
}

// --- Clase Hija 2 ---
class Gato extends Animal {
    // También puede tener sus propios métodos
    public function maullar() {
        echo "El gato $this->nombre está maullando: ¡Miau!\n";
    }
}

$perro = new Perro("Fido");
$gato = new Gato("Misi");

// Los objetos de las clases hijas pueden usar los métodos de la clase padre.
$perro->comer();
$gato->dormir();

// Y también pueden usar sus propios métodos.
$perro->ladrar();
$gato->maullar();

?>