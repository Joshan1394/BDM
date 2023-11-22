<?php

define("CLIENT_ID", "AVchtxEgqt6k6TWU82egjtL70BmKvrtr0AeUqRkdf0npmfVjXCd1hIi0U60yOElay3S8wUzdPhw-dffm");
define("CURRENCY", "MXN");
define("KEY_TOKEN", "APR.wqc-354*");

session_start();

$num_cart = 0;
if(isset($_SESSION['carrito']['productos'])){
    $num_cart = count($_SESSION['carrito']['productos']);
}


?>