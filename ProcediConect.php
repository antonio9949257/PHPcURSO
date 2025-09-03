<?php
$nomServer= "127.0.0.1";
$nomUser="root";
$pass= "2147";

$conn = mysqli_connect($nomServer, $nomUser ,$pass);

if (!$conn){
	die ("Conexion fallida: ". mysqli_connect_error());
}
echo "conexion exitosa";

mysqli_close($conn);
?>
