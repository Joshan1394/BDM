<?php

require '../php/Config.php';
// require require 'C:\xampp\htdocs\BDM\php\Config.php';

if (isset($_POST['ProductoID'])) { 

    $id = $_POST['ProductoID'];
    $token = $_POST['token'];

    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

    if ($token == $token_tmp) {

        if (isset($_SESSION['carrito']['productos'][$id])) {
            $_SESSION['carrito']['productos'][$id] += 1;
        } else {
            $_SESSION['carrito']['productos'][$id] = 1;
        }

        $datos['numero']= count( $_SESSION['carrito']['productos']);
        $datos['ok'] = true;
    } else {
        $datos['ok'] = false;
    }
} else {
    $datos['ok'] = false;
}


echo json_encode($datos);