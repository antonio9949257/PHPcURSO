  <?php
//POO clases
class  persona{
	public $nombre; 
	public function asignarNombre($nuevoNombre){
		$this->nombre= $nuevoNombre;
	}
	public function imprimirNombre(){
		echo "Hola soy $this->nombre \n";
	}
}

$objAlumno = new persona();
$objAlumno->asignarNombre("Armin");
$objAlumno->imprimirNombre();

// extends de una clase 
class trabajador extends persona{
	public $puesto;
	public function presentarseComoTrabajador(){
		echo "Hola soy $this->nombre y soy un $this->puesto \n";
	}
}

$objTrabajador = new trabajador();
$objTrabajador->asignarNombre("Daneil");
$objTrabajador->puesto = "profesor";
$objTrabajador -> presentarseComoTrabajador();


?>
