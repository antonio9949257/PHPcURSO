<?php
header('Content-Type: text/plain');

// Una interfaz es un "contrato" que una clase puede firmar.
// Define un conjunto de métodos que la clase se compromete a implementar.
// Una clase puede implementar múltiples interfaces.

// --- Definición de Interfaces ---
interface Exportable {
    public function exportarComoCSV();
}

interface MostrableEnHTML {
    public function mostrarComoCard();
}

// --- Implementación de Interfaces ---

class Articulo implements Exportable, MostrableEnHTML {
    public $titulo;
    public $contenido;

    public function __construct($titulo, $contenido) {
        $this->titulo = $titulo;
        $this->contenido = $contenido;
    }

    // Implementación del método de la interfaz Exportable
    public function exportarComoCSV() {
        return "\"{$this->titulo}\",\"{$this->contenido}\"";
    }

    // Implementación del método de la interfaz MostrableEnHTML
    public function mostrarComoCard() {
        return "<div class='card'><h3>{$this->titulo}</h3><p>{$this->contenido}</p></div>";
    }
}

class Usuario implements MostrableEnHTML {
    public $nombre;

    public function __construct($nombre) {
        $this->nombre = $nombre;
    }

    // Este no necesita exportarse, solo mostrarse
    public function mostrarComoCard() {
        return "<div class='card user'><h4>Usuario: {$this->nombre}</h4></div>";
    }
}

$articulo = new Articulo("PHP es Genial", "Contenido del artículo sobre PHP...");
$usuario = new Usuario("Admin");

echo "--- Exportación ---
";
echo $articulo->exportarComoCSV() . "\n";
// echo $usuario->exportarComoCSV(); // Error: La clase Usuario no implementa Exportable


echo "\n--- Muestra en HTML (simulado) ---
";
echo $articulo->mostrarComoCard() . "\n";
echo $usuario->mostrarComoCard() . "\n";

?>