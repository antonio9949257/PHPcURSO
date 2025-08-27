<?php
header('Content-Type: text/plain');

// Los Traits son un mecanismo para reutilizar código en clases independientes y de diferentes jerarquías.
// Permiten "copiar y pegar" métodos en una clase.

// --- Definición de un Trait ---
trait Logger {
    public function log($mensaje) {
        // Simula escribir en un archivo de log
        $fecha = date('Y-m-d H:i:s');
        echo "[LOG - $fecha]: " . $mensaje . "\n";
    }
}

trait Notificador {
    public function enviarNotificacion($destinatario, $mensaje) {
        echo "Enviando notificación a '$destinatario': $mensaje\n";
    }
}

// --- Uso de Traits en Clases ---

class GestorUsuarios {
    // La clase "usa" el trait Logger
    use Logger;

    public function crearUsuario($nombre) {
        // Podemos usar el método del trait como si fuera propio
        $this->log("Intentando crear usuario '$nombre'...");
        echo "Usuario '$nombre' creado.\n";
        $this->log("Usuario '$nombre' creado exitosamente.");
    }
}

class Pedido {
    // Una clase puede usar múltiples traits
    use Logger, Notificador;

    public $id;

    public function __construct($id) {
        $this->id = $id;
    }

    public function procesar() {
        $this->log("Procesando pedido #{$this->id}");
        echo "Pedido #{$this->id} procesado.\n";
        $this->enviarNotificacion("cliente@example.com", "Tu pedido #{$this->id} ha sido enviado.");
    }
}

$gestor = new GestorUsuarios();
$gestor->crearUsuario("Pedro");

echo "\n";

$pedido = new Pedido(123);
$pedido->procesar();

?>