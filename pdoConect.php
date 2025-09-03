<?php
$nomServer="127.0.0.1";
$nomUser="root";
$pass = "2147";

try{
	$conn = new PDO("mysql:host=$nomServer;dbname=myDB", $nomUser, $pass);
	$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	echo "Conectado exitosamente a la bd";
}catch(PDOException $e){
	echo "Conexion fallo: ".$e->getMessage();
}

$conn = null; 
?>
