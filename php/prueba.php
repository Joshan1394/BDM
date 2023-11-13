<?php
session_start();

if (isset($_SESSION['usuario_id'])) {
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "bd_bdm";


    $usuario_id = 20;

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    $sql = "SELECT imagen FROM usuarios WHERE id = ?";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param('i', $usuario_id);
    $stmt->execute();
    $stmt->bind_result($imagen_contenido);
    $stmt->fetch();
    $stmt->close();

 
    header('Content-Type: image/png'); 

    echo $imagen_contenido;

    header("Location: /BDM/vista/front/perfil.php"); 
    exit();
} else {

}
?>

