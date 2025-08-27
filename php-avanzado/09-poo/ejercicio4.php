<?php
header('Content-Type: text/plain');

// Los modificadores de acceso (visibilidad) controlan cómo se pueden acceder
// a las propiedades y métodos de una clase.

class CuentaBancaria {
    // public: Se puede acceder desde cualquier lugar (fuera de la clase, en clases hijas).
    public $titular;

    // protected: Solo se puede acceder desde la propia clase y desde clases que hereden de ella.
    protected $saldo;

    // private: Solo se puede acceder desde la propia clase. Ni siquiera las clases hijas pueden.
    private $numero_cuenta;

    public function __construct($titular, $saldo_inicial, $numero_cuenta) {
        $this->titular = $titular;
        $this->saldo = $saldo_inicial;
        $this->numero_cuenta = $numero_cuenta;
    }

    // Método público para depositar
    public function depositar($cantidad) {
        $this->saldo += $cantidad;
        echo "Depósito de $$cantidad realizado. Nuevo saldo: $$this->saldo\n";
    }

    // Método público para obtener el saldo (controlamos el acceso)
    public function getSaldo() {
        return $this->saldo;
    }

    // Método privado para registrar una transacción (lógica interna)
    private function registrarTransaccion($tipo, $cantidad) {
        echo "Registrando transacción: $tipo de $$cantidad\n";
    }
}

$cuenta = new CuentaBancaria("Carlos Ruiz", 500, "12345-67890");

// Acceso a propiedad pública (permitido)
echo "Titular de la cuenta: " . $cuenta->titular . "\n";

// Acceso a propiedad protected o private (NO permitido, causaría un error fatal)
// echo $cuenta->saldo; // Error
// echo $cuenta->numero_cuenta; // Error

// Usamos un método público para acceder a un dato protegido
echo "Saldo actual: $" . $cuenta->getSaldo() . "\n";

$cuenta->depositar(100);

// No podemos llamar a un método privado desde fuera
// $cuenta->registrarTransaccion("Depósito", 100); // Error

?>