<?php

require '../php/Conexion.php';

// if (!isset($_SESSION['user_type'])) {
//     header('Location: /BDM/vista/front/paginaPrincipal.php ');
//     exit;
// }

// if($_SESSION['user_type'])

$db = new Database();
$con = $db->conectar();

$nombre = $_POST['nombre'];
$descripcion = $_POST['descripcion'];
$category = $_POST['categoria'];
$precio = $_POST['precio'];
$cantidad = $_POST['cantidad'];


$sql = "INSERT INTO Productos (NombreProducto, DescripcionProducto, CategoriaID, Precio, CantidadDisponible) 
VALUES(?,?,?,?,?)";
$stm = $con->prepare($sql);
if ($stm->execute([$nombre, $descripcion, $category, $precio, $cantidad])) {
    $id = $con->lastInsertId();

    /*Imagen principal*/
    if ($_FILES['imagen1']['error'] == UPLOAD_ERR_OK) {
        $dir = '../public/img/' . $id . '/';
        $allow = ['jpeg', 'jpg'];

        $arregloImg = explode('.', $_FILES['imagen1']['name']);
        $extension = strtolower(end($arregloImg));

        if (in_array($extension, $allow)) {
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }


            $ruta_img = $dir . 'imgPrincipal.' . $extension;
            if (move_uploaded_file($_FILES['imagen1']['tmp_name'], $ruta_img)) {
                echo "Archivo cargado correctamente";
            } else {
                echo "Error al cargar archivo";
            }
        } else {
            echo "Archivo no permitido";
        }

    } else {
        echo "No se envio ningun archivo";
    }


    //Otras imagenes
    if (isset($_FILES['imagen2'])) {
        $dir = '../public/img/' . $id . '/';
        $allow = ['jpeg', 'jpg'];

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        $contador = 1;
        foreach ($_FILES['imagen2']['tmp_name'] as $key => $tmp_name) {
            $fileName = $_FILES['imagen2']['name'][$key];

            $arregloImg = explode('.', $fileName);
            $extension = strtolower(end($arregloImg));

            if (in_array($extension, $allow)) {
                $ruta_img = $dir . $contador . '.' . $extension;
                if (move_uploaded_file($tmp_name, $ruta_img)) {
                    echo "Archivo cargado correctamente.<br>";
                    $contador++;
                } else {
                    echo "Error al cargar archivo";
                }
            }else{
                echo "Archivo no permitido";
            }
            
        }
    }
}

header('Location:\BDM\vista\front\paginaPrincipal.php');



