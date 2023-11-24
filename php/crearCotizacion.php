<?php

require '../php/Conexion.php';



$db = new Database();
$con = $db->conectar();

$nombre = $_POST['nombreCotizacion'];
$descripcion = $_POST['descripcionCotizacion'];
$category = $_POST['categoriaCotizacion'];
$cantidad = $_POST['cantidadCotizacion'];


$sql = "INSERT INTO Productos (NombreCotizacion, DescripcionCotizacion, CategoriaID, CantidadDisponible) 
VALUES(?,?,?,?)";
$stm = $con->prepare($sql);
if ($stm->execute([$nombre, $descripcion, $category, $cantidad])) {
    $id = $con->lastInsertId();

    /*Imagen principal*/
    if ($_FILES['imagen1Cotizacion']['error'] == UPLOAD_ERR_OK) {
        $dir = '../public/img/' . $id . '/';
        $allow = ['jpeg', 'jpg'];

        $arregloImg = explode('.', $_FILES['imagen1Cotizacion']['name']);
        $extension = strtolower(end($arregloImg));

        if (in_array($extension, $allow)) {
            if (!file_exists($dir)) {
                mkdir($dir, 0777, true);
            }


            $ruta_img = $dir . 'imgPrincipal.' . $extension;
            if (move_uploaded_file($_FILES['imagen1Cotizacion']['tmp_name'], $ruta_img)) {
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
    if (isset($_FILES['imagen2Cotizacion'])) {
        $dir = '../public/img/' . $id . '/';
        $allow = ['jpeg', 'jpg'];

        if (!file_exists($dir)) {
            mkdir($dir, 0777, true);
        }

        $contador = 1;
        foreach ($_FILES['imagen2Cotizacion']['tmp_name'] as $key => $tmp_name) {
            $fileName = $_FILES['imagen2Cotizacion']['name'][$key];

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