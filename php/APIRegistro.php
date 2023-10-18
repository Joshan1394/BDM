

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $db_host = 'localhost';
    $db_user = 'root';
    $db_pass = '1234';
    $db_name = 'bd_bdm';

    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Error de conexión: " . $conn->connect_error);
    }


    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $apodo = $_POST['apodo'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_BCRYPT);
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $tipo = $_POST['tipo'];
    $genero = $_POST['genero'];
    $imagen = file_get_contents($_FILES['imagen']['tmp_name']);

    $sql = "INSERT INTO usuarios (nombre, apellido, apodo, email, password, fecha_nacimiento, tipo, genero, imagen) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param('sssssssss', $nombre, $apellido, $apodo, $email, $password, $fechaNacimiento, $tipo, $genero, $imagen);

    if ($stmt->execute()) {
    
        header('Location: /BDM/vista/login.php');
        exit; 
    } else {
        echo json_encode(["error" => "Error al registrar el usuario"]);
    }

    $stmt->close();
    $conn->close();
} else {
    echo json_encode(["error" => "Método no permitido"]);
}
?>
