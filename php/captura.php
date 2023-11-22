<?php

require '../php/Config.php';
require '../php/Conexion.php';
// require 'C:/xampp/htdocs/BDM/php/Conexion.php';
$db = new Database();
$con = $db->conectar();

$json = file_get_contents('php://input');
$datos = json_decode($json, true);

echo '<pre>';
print_r($datos);
echo '</pre>';

if (is_array($datos)) {

    $idCliente = $_SESSION['idUsuario'];
    // $sqlProd = $con->prepare("SELECT email FROM usuarios WHERE id=?");
    // $sqlProd->execute([$idCliente]);
    // $row_cliente = $sql->fetch(PDO::FETCH_ASSOC);

    $id_transaccion = $datos['detalles']['id'];
    $total = $datos['detalles']['purchase_units'][0]['amount']['value'];
    $status = $datos['detalles']['status'];
    $fecha = $datos['detalles']['update_time'];
    $fecha_nueva = date('Y-m-d H:i:s', strtotime($fecha));
    // $email = $row_cliente['email'];
    $email = $datos['detalles']['payer']['email_address'];
    // $id_cliente = $datos['detalles']['payer']['payer_id'];


    $sql = $con->prepare("INSERT INTO Compra (TransaccionID, FechaCompra, Estado, UsuarioID, Total, Email) VALUES (?,?,?,?,?,?)");
    $sql->execute([$id_transaccion, $fecha_nueva, $status, $idCliente, $total, $email]);
    $id = $con->lastInsertId();

    if ($id > 0) {

        $productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

        if ($productos != null) {
            foreach ($productos as $clave => $cantidad) {

                $sql = $con->prepare("SELECT ProductoID, NombreProducto, Precio FROM Productos WHERE ProductoID=?");
                $sql->execute([$clave]);
                $row_prod = $sql->fetch(PDO::FETCH_ASSOC);
                $precio = $row_prod['Precio'];

                $sql_insert = $con->prepare("INSERT INTO detallesCompra (CompraID, ProductoID, Nombre, Precio, Cantidad) VALUES (?,?,?,?,?)");
                $sql_insert->execute([$id, $clave, $row_prod['NombreProducto'], $precio, $cantidad]);
            }

        }
        unset($_SESSION['carrito']);
    }


}