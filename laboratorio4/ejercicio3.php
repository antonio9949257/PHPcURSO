<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $nombre = $_POST["nombre"];
  $apellido = $_POST["apellido"];
  echo "Nombre: " . $nombre . "<br>";
  echo "Apellido: " . $apellido . "<br>";
}
?>