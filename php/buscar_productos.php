<?php
// Conexión a la base de datos (ajusta los valores según tu configuración)
$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "bd_bdm";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
   die("Conexión fallida: " . $conn->connect_error);
}

// Obtener la entrada del usuario desde el formulario
$busqueda = $_POST['busqueda'];

// Consulta SQL para buscar productos que coincidan con la entrada del usuario
$sql = "SELECT * FROM Productos WHERE NombreProducto LIKE '%$busqueda%'";
$result = $conn->query($sql);

// Mostrar los resultados
if ($result->num_rows > 0) {
   while ($row = $result->fetch_assoc()) {
      // Aquí puedes mostrar la información de cada producto
      echo "Nombre del Producto: " . $row['NombreProducto'] . "<br>";
      echo "Precio: $" . number_format($row['Precio'], 2, '.', ',') . "<br>";
      echo "<hr>";
   }
} else {
   echo "No se encontraron productos.";
}

// Cerrar la conexión a la base de datos
$conn->close();
?>