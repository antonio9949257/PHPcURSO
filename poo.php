<?php 
class Persona {
	public $nombre;
	public $edad;

	public function __construct ($nombre , $edad){
		$this->nombre = $nombre;
		$this->edad = $edad;
	}

	public function saludar () {
		return "Hola, me llamo {$this->nombre} y tengo {$this->edad} años. \n";
	}

}

$persona1 = new Persona ("Ana", 30);
echo $persona1->saludar ();
?>
