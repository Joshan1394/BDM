<?php
var_dump($_POST);
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "bd_bdm";

    $conn = new mysqli($servername, $username, $password, $dbname);


    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }


    $nombre = $_POST["nombre"];
    $apellido = $_POST["apellido"];
    $apodo = $_POST["apodo"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $fechaNacimiento = $_POST["fechaNacimiento"];
    $tipo = $_POST["radioGroup1"];
    $genero = $_POST["radioGroup"];

    $imagen = $_FILES["imagen"]["tmp_name"];
    $imagenNombre = $_FILES["imagen"]["name"];

    $rutaImagen = "/BDM/public/img/perfil/" . $imagenNombre;


    if (!file_exists("/BDM/public/img/perfil/")) {
        mkdir("/BDM/public/img/perfil/", 0777, true);
    }

    if (move_uploaded_file($imagen, $rutaImagen)) {
      
        $stmt = $conn->prepare("INSERT INTO usuarios (nombre, apellido, apodo, email, password, fecha_nacimiento, tipo, genero, imagen) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("sssssssss", $nombre, $apellido, $apodo, $email, $password, $fechaNacimiento, $tipo, $genero, $rutaImagen);

        if ($stmt->execute()) {
            echo "Registro exitoso.";
        } else {
            echo "Error al registrar: " . $stmt->error;
        }
    } else {
        echo "Error al cargar la imagen.";
    }

    $stmt->close();
    $conn->close();
}
?>