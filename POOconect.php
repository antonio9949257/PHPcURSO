<?php
$nomServer = "127.0.0.1";
$nomUser= "root";
$pass = "2147";

$conn = new mysqli($nomServer, $nomUser, $pass);

if ($conn->connect_error){
	die("Connect failded: ". $conn->connect_error);
}
echo "Connect successfully";

$conn->close();

?>
