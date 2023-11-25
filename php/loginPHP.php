<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $servername = "localhost";
    $username = "root";
    $password = "1234"; // Cambia esto con tu contraseña
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

           $_SESSION 

            // Verificar el tipo de usuario y redirigir a la vista correspondiente
            if ($user["rol"] === 'Administrador') {
                header("Location: /BDM/vista/admin/paginaPrincipal.php");
            } else {
                header("Location: /BDM/vista/front/perfil.php");
                console.log($user);
            }

            exit();
        } else {
            echo '<script>alert("Contraseña incorrecta.");</script>';
        }
    } else {
        echo '<script>alert("Apodo incorrecto.");</script>';
    }

    // Cerrar conexiones y liberar recursos...

    $stmt->close();
    $conn->close();
}
?>