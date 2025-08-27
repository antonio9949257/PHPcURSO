<?php
header('Content-Type: text/plain');

class Usuario {
    public $nombre;
    public $email;

    // --- Constructor ---
    // Es un método especial que se ejecuta automáticamente cuando se crea un objeto.
    // Es ideal para inicializar las propiedades del objeto.
    public function __construct($nombre, $email) {
        echo "--- Creando nueva instancia de Usuario ---
";
        $this->nombre = $nombre;
        $this->email = $email;
        echo "Usuario '$this->nombre' creado.
";
    }

    public function presentarse() {
        echo "Hola, soy $this->nombre y mi email es $this->email.
";
    }

    // --- Destructor ---
    // Es un método especial que se ejecuta automáticamente cuando un objeto va a ser destruido
    // (por ejemplo, al final del script o cuando se elimina la referencia a él).
    // Es útil para liberar recursos, como cerrar una conexión a base de datos.
    public function __destruct() {
        echo "--- Destruyendo instancia de Usuario ---
";
        echo "Usuario '$this->nombre' destruido. Adiós.

";
    }
}

$usuario1 = new Usuario("Juan", "juan@example.com");
$usuario1->presentarse();

$usuario2 = new Usuario("Maria", "maria@example.com");
$usuario2->presentarse();

// El destructor se llamará automáticamente para cada objeto al final del script.

?>