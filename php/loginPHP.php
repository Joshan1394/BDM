<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   
    $servername = "localhost";
    $username = "root";
    $password = "admin"; //$password = "1234";
    $dbname = "bd_bdm";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    $usuario = $_POST["Usuario"];
    $contra = $_POST["Contra1"];


    $sql = "SELECT * FROM usuarios WHERE apodo = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $usuario);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
 
        if (password_verify($contra, $user["password"])) {
        
            $nombreUsuario = $user["nombre"];
            $apellidosUsuario = $user["apellido"];
            $emailUsuario = $user["email"];
            $fechaNacimientoUsuario = $user["fecha_nacimiento"];
            $generoUsuario = $user["genero"];
            $tipoUsuario = $user["tipo"];
            $rutaDeImagenDelUsuario = $user["imagen"];
            $idUsuario = $user['id'];
            session_start();
            $_SESSION['nombreUsuario'] = $nombreUsuario;
            $_SESSION['apellidosUsuario'] = $apellidosUsuario;
            $_SESSION['emailUsuario'] = $emailUsuario;
            $_SESSION['fechaNacimientoUsuario'] = $fechaNacimientoUsuario;
            $_SESSION['generoUsuario'] = $generoUsuario;
            $_SESSION['tipoUsuario'] = $tipoUsuario;
            $imagenBase64 = base64_encode($rutaDeImagenDelUsuario);
            $_SESSION['imagenUsuario'] = $imagenBase64; 
            $_SESSION['idUsuario'] = $idUsuario;
            header("Location: /BDM/vista/front/perfil.php"); 
            exit();
        } else {
            echo "Contraseña incorrecta.";
        }
    } else {
        echo "Apodo incorrecto.";
    }

    $stmt->close();
    $conn->close();
}
?>
