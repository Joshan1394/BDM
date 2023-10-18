<?php
  $servername = "localhost";
  $username = "root";
  $password = "1234";
  $dbname = "bd_bdm";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Error en la conexión a la base de datos: " . $conn->connect_error);
}

echo "Conexión exitosa a la base de datos.";

$conn->close();
?>