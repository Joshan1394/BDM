<?php

require '../../php/Config.php';
require '../../php/Conexion.php';
$db = new Database();
$con = $db->conectar();

// Consultar la vista Vista_Productos_Mas_Vendidos
$sqlMasVendidos = $con->prepare("SELECT ProductoID, TotalVentas FROM Vista_Productos_Mas_Vendidos");
$sqlMasVendidos->execute();
$productosMasVendidos = $sqlMasVendidos->fetchAll(PDO::FETCH_ASSOC);

// Consultar la vista Vista_Compras_Ultimo_Mes
$sqlCompras = $con->prepare("SELECT * FROM Vista_Compras_Ultimo_Mes");
$sqlCompras->execute();
$comprasUltimoMes = $sqlCompras->fetchAll(PDO::FETCH_ASSOC);

$sql = $con->prepare("SELECT ProductoID, NombreProducto, Precio FROM Productos");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <script src="../assets/js/color-modes.js"></script>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="description" content="">
  <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
  <meta name="generator" content="Hugo 0.115.4">
  <title>Blissful</title>

  <link rel="canonical" href="https://getbootstrap.com/docs/5.3/examples/navbar-fixed/">

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="/BDM/public/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fugaz One" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <!-- Style -->
  <link rel="stylesheet" href="/BDM/public/css/pagina.css">
  <link rel="stylesheet" href="/BDM/public/css/historial_style.css">

  <style>
    body {
      min-height: 75rem;
      padding-top: 4.5rem;
    }

    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    .b-example-divider {
      width: 100%;
      height: 3rem;
      background-color: rgba(0, 0, 0, .1);
      border: solid rgba(0, 0, 0, .15);
      border-width: 1px 0;
      box-shadow: inset 0 .5em 1.5em rgba(0, 0, 0, .1), inset 0 .125em .5em rgba(0, 0, 0, .15);
    }

    .b-example-vr {
      flex-shrink: 0;
      width: 1.5rem;
      height: 100vh;
    }

    .bi {
      vertical-align: -.125em;
      fill: currentColor;
    }

    .nav-scroller {
      position: relative;
      z-index: 2;
      height: 2.75rem;
      overflow-y: hidden;
    }

    .nav-scroller .nav {
      display: flex;
      flex-wrap: nowrap;
      padding-bottom: 1rem;
      margin-top: -1px;
      overflow-x: auto;
      text-align: center;
      white-space: nowrap;
      -webkit-overflow-scrolling: touch;
    }

    .title {
      font-family: 'Fugaz One';
      color: rgb(178, 112, 146) !important;
    }

    .bd-mode-toggle {
      z-index: 1500;
    }

    .custom-card {
      height: 400px;
      /* Ajusta esta altura según tus necesidades */
    }
    .mensajeCompasMes{
      color: #f00;
    }
    .mensajeProductoVendido{
      color: #f00;
    }
  </style>


  <!-- Custom styles for this template -->
  <link href="navbar-fixed.css" rel="stylesheet">
</head>

<body>





  <nav class="navbar navbar-expand-md  fixed-top nav-background" role="navigation">
    <div class="container-fluid">
      <a class="navbar-brand title" href="/BDM/vista/front/paginaPrincipal.php">Blissful</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="d-flex justify-content-start">
        <form class="d-flex searchbar" role="search" method="post" action="BuscarProducto.php">
          <input class="form-control me-2" type="search" placeholder="Buscar" name="busqueda" aria-label="Search">
          <button class="btn btn-sumit" type="submit">Buscar</button>
        </form>
      </div>


      <div id="menuToggle" class="me-3">

        <input type="checkbox" />
        <span></span>
        <span></span>
        <span></span>

        <ul id="menu">
          <li class="nav-item">
            <a class="nav-link text" href="/BDM/vista/front/perfil.php">Perfil</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text" href="/BDM/vista/front/verCarrito.php" style="display: flex; align-items: center;">
              Carrito<span id="num_cart" class="badge"
                style="background-color: transparent; font-size: inherit; margin-top: -0.9em;"><?php echo $num_cart;?></span></a>
          </li>
          <li class="nav-item">
            <a  class="nav-link text" href="/BDM/vista/front/historial.php">Historial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text" href="/BDM/vista/login.php">Inicio sesión</a>
          </li>
          <li class="nav-item">
            <!-- <a class="nav-link text" href="/BDM/vista/login.php">Inicio sesión</a> -->
          </li>
        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container container-background">
      <div class="p-5 rounded">
        <div class="row align-items-center ">
          <div class="col align-self-center">
            <div class="card card-background">
              <div class="card-body">
                <h1 class="title">Tu estilo, tu elección</h1>
                <p class="text">Resalta la variedad de productos para que los clientes encuentren algo que se ajuste a
                  su estilo.</p>
              </div>
            </div>

          </div>
          <div class="col">
            <img src="/BDM/public/img/principal.svg" alt="compras" style="height: 20rem;">
          </div>
        </div>
      </div>
    </div>

    <div class="container text-center mt-4">
      <div class="row align-items-start">

        <div class="row">

          <?php
            // Verificar si hay resultados en la vista de productos más vendidos
            if ($productosMasVendidos) {
              // Mostrar los resultados de productos más vendidos
              echo '<h2>Productos Más Vendidos</h2>';
              foreach ($productosMasVendidos as $productoMasVendido) {
                  echo '<div class="producto-mas-vendido">';
                  echo '<p>ProductoID: ' . $productoMasVendido['ProductoID'] . '</p>';
                  echo '<p>Total de Ventas: ' . $productoMasVendido['TotalVentas'] . '</p>';
                  // Puedes agregar más detalles según sea necesario
                  echo '</div>';
              }
            } else {
              // Manejar el caso en que no haya productos más vendidos
              echo '<p class="mensajeProductoVendido">No se encontraron productos más vendidos.</p>';
            }
          ?>

        </div>
        <div class="row">
          <?php 
            // Verificar si hay resultados en la vista de compras del último mes
            if ($comprasUltimoMes) {
              // Mostrar los resultados de compras
              echo '<h2>Compras del Último Mes</h2>';
              foreach ($comprasUltimoMes as $compra) {
                  echo '<div class="compra">';
                  echo '<p>CompraID: ' . $compra['CompraID'] . '</p>';
                  echo '<p>Fecha de Compra: ' . $compra['FechaCompra'] . '</p>';
                  // Agregar más detalles según sea necesario
                  echo '</div>';
              }
            } else {
              // Manejar el caso en que no haya compras en el último mes
              echo '<p class="mensajeCompasMes"> No se encontraron compras en el último mes.</p>';
            }
          ?>
        </div>
        
        <?php foreach ($resultado as $row) { ?>
          <div class="col-md-4 mb-4">
            <div class="card" style="width: 18rem;">
              <?php



              $id = $row['ProductoID'];
              // echo $id;
              $imagen = "/BDM/public/img/" . $id . "/imgPrincipal.jpg";
              // echo $imagen;
            
              if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $imagen)) {
                $imagen = "/BDM/public/img/no-photo.jpg";
              }

              ?>
              <img src="<?php echo $imagen; ?>" class="card-img-top">
              <div class="card-body">
                <h5 class="card-title">
                  <?php echo $row['NombreProducto']; ?>
                </h5>
                <p class="card-text">$
                  <?php echo number_format($row['Precio'], 2, '.', ','); ?>
                </p>
              </div>

              <div class="mt-1 mb-3">
                <a class="nav-link text botton" href="/BDM/vista/front/compra2.php?ProductoID=<?php echo $row['ProductoID'];?>&token=<?php
                echo hash_hmac('sha1', $row['ProductoID'], KEY_TOKEN);?>">Comprar</a>
              </div>
            </div>
          </div>
        
      </div>
    </div>
    <div id="contenidoModal"></div>
<?php } ?>


    <!-- ======= Footer ======= -->
    <footer id="footer" class="footer mt-5">


      <div class="container mt-4 text-center">
        <div class="text">
          &copy; Copyright <strong></strong>. All Rights Reserved
        </div>
        <div class="text">

          Designed by perla, gera y mike</a>
        </div>
      </div>

    </footer><!-- End Footer -->
  </main>
  <script src="/BDM/public/js/bootstrap.bundle.min.js"></script>
 <!-- Incluye tu JavaScript al final del cuerpo del documento -->
 
</body>

</html>