<?php

// numeros aleatorios con rand(rangox,y)
$numeroAleatorio = rand(1,10);
echo "$numeroAleatorio \n";
// metodo  strtoupper(variable) para convertir a mayusculas
$nombre = "Oscar Uh";
$nombreMayuscula = strtoupper($nombre);

echo "$nombreMayuscula \n";

// arrays 
$frutas = array("nieve","pera","Hola");
echo "$frutas[1] \n";

$arreglos = array("f"=>"fresa", "m"=>"manzana", "p"=>"pera");
echo "$arreglos[f] \n";
print_r($arreglos);
print_r($frutas);
// Realizando el metodo foreach($x as $indice=>&$valor)

foreach($arreglos as $indice=>&$valor){
	echo "$valor \n";	
}

foreach($arreglos as $indice=>&$valor){
        echo "$arreglos[$indice] \n";
}

// metodo array_push($arreglo, "valor") para agregar nuevos valores al arreglo

array_push($arreglos, "añadido ahora");
foreach($arreglos as $indice=>&$valor){
        echo "$arreglos[$indice] \n";
}

?>
