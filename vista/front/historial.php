<?php

require '../../php/Config.php';
require '../../php/Conexion.php';
// require 'C:/xampp/htdocs/BDM/php/Conexion.php';
$db = new Database();
$con = $db->conectar();



// print_r($_SESSION);
$idCliente = $_SESSION['idUsuario'];
// echo $idCliente;

$sql = $con->prepare("SELECT TransaccionID, FechaCompra, Estado, Total FROM Compra WHERE UsuarioID=? ORDER BY DATE(FechaCompra) DESC");
$sql->execute([$idCliente]);

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
  <link rel="stylesheet" href="/BDM/public/css/pagina2.css">
  <link rel="stylesheet" href="/BDM/public/css/historial_style.css">

  <style>
    body {
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

    .title {
      font-family: 'Fugaz One';
      color: rgb(178, 112, 146) !important;
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
        <form class="d-flex searchbar" role="search">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
          <button class="btn btn-sumit" type="submit">Search</button>
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
                style="background-color: transparent; font-size: inherit; margin-top: -0.9em;">
                <?php echo $num_cart; ?>
              </span></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text" href="/BDM/vista/front/historial.php">Historial</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text" href="/BDM/vista/login.php">Inicio sesión</a>
          </li>

        </ul>
      </div>
    </div>
  </nav>


  <main>
    <div class="container text-center">
      <h1 style="color: black" class="mt-3">Mis compras</h1>
    </div>

    <?php while ($row = $sql->fetch(PDO::FETCH_ASSOC)) { ?>
      <div class="card bg-light mb-3">
        <div class="card-header">
          <?php echo $row['FechaCompra'] ?>
        </div>
        <div class="card-body ">
          <!-- <h5 class="card-title">Clave de la compra
            <?php echo $row['TransaccionID'] ?>
          </h5> -->
          <h5 class="card-title">Clave de la compra
            <?php echo $row['TransaccionID'] ?>
          </h5>
          <p class="card-text">Total: $<?php echo $row['Total'] ?></p>
          <!-- <a href="/BDM/vista/front/detallesCompra.php?orden=<?php echo $row['TransaccionID']; ?>" class="btn btn-primary">Ver Compra</a> -->
        </div>
      </div>
    <?php } ?>

    <br><br>
  </main>
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
  <script src="/BDM/public/js/bootstrap.bundle.min.js"></script>

</body>

</html>