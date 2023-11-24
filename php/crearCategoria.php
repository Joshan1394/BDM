<?php
session_start();
require '../php/Conexion.php';
$db = new Database();
$con = $db->conectar();
// Verifica si el usuario ha iniciado sesión
if (isset($_SESSION['idUsuario'])) {
    $usuario_id = $_SESSION['idUsuario'];

    // Resto de tu código para la conexión y procesamiento del formulario...
    $categoria = $_POST['categoria'];
    $descripcion = $_POST['descripcion'];

    $sql = "INSERT INTO categorias (NombreCategoria, DescripcionCategoria, UsuarioID) VALUES (:categoria, :descripcion, :usuario_id)";
    $stmt = $con->prepare($sql);

    // Bind de parámetros
    $stmt->bindParam(':categoria', $categoria, PDO::PARAM_STR);
    $stmt->bindParam(':descripcion', $descripcion, PDO::PARAM_STR);
    $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);

    if ($stmt->execute()) {
        // Éxito al insertar la categoría
        header('Location: \BDM\vista\front\paginaPrincipal.php');
        exit();
    } else {
        // Manejo de errores, redirección a una página de error, etc.
        echo "Error al insertar la categoría: " . implode(", ", $stmt->errorInfo());
    }

    $stmt->closeCursor();
    $con = null;
} else {
    // Manejo de error: El usuario no ha iniciado sesión
    echo "Error: El usuario no ha iniciado sesión.";
}
?>


