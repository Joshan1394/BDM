<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "bd_bdm";

    $conn = new mysqli($servername, $username, $password, $dbname);

    if ($conn->connect_error) {
        die("Error en la conexión a la base de datos: " . $conn->connect_error);
    }

    $nombre = $_POST['nombre'];
    $apellido = $_POST['apellido'];
    $email = $_POST['email'];
    $fechaNacimiento = $_POST['fechaNacimiento'];
    $genero = $_POST['genero'];
    $tipo = $_POST['tipo'];
    $id = $_POST['id']; 

   
    if ($_FILES['imagen']['error'] === UPLOAD_ERR_OK) {
        $imagen = file_get_contents($_FILES['imagen']['tmp_name']);
        $sql = "UPDATE usuarios SET nombre=?, apellido=?, email=?, fecha_nacimiento=?, genero=?, tipo=?, imagen=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("sssssssi", $nombre, $apellido, $email, $fechaNacimiento, $genero, $tipo, $imagen, $id);
    } else {
        $sql = "UPDATE usuarios SET nombre=?, apellido=?, email=?, fecha_nacimiento=?, genero=?, tipo=? WHERE id=?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("ssssssi", $nombre, $apellido, $email, $fechaNacimiento, $genero, $tipo, $id);
    }

    if ($stmt->execute()) {
    

      
        $sql = "SELECT * FROM usuarios WHERE id = ?";

        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $_SESSION['idUsuario']);
        $stmt->execute();
        $result = $stmt->get_result();
        $user = $result->fetch_assoc();
        

        if ($user) {

            $nombreUsuario = $user["nombre"];
            $apellidosUsuario = $user["apellido"];
            $emailUsuario = $user["email"];
            $fechaNacimientoUsuario = $user["fecha_nacimiento"];
            $generoUsuario = $user["genero"];
            $tipoUsuario = $user["tipo"];
            $rutaDeImagenDelUsuario = $user["imagen"];
          
            $_SESSION['nombreUsuario'] = $nombreUsuario;
            $_SESSION['apellidosUsuario'] = $apellidosUsuario;
            $_SESSION['emailUsuario'] = $emailUsuario;
            $_SESSION['fechaNacimientoUsuario'] = $fechaNacimientoUsuario;
            $_SESSION['generoUsuario'] = $generoUsuario;
            $_SESSION['tipoUsuario'] = $tipoUsuario;
            $imagenBase64 = base64_encode($rutaDeImagenDelUsuario);
            $_SESSION['imagenUsuario'] = $imagenBase64; 
           
        }

        header("Location: /BDM/vista/front/perfil.php");
        exit();
    } else {
        echo "Error al actualizar el perfil: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
} else {
    echo "Acceso no autorizado";
}
