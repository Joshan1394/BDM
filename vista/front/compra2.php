<?php

require '../../php/Config.php';
require '../../php/Conexion.php';
$db = new Database();
$con = $db->conectar();


$id = isset($_GET['ProductoID']) ? $_GET['ProductoID'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

// echo "ID: $id<br>";
// echo "Token: $token<br>";

if ($id == '' || $token == '') {
  echo "Error al procesar la peticioon";
  exit;
} else {
  $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);

  if ($token == $token_tmp) {

    $sql = $con->prepare("SELECT count(ProductoID) FROM Productos WHERE ProductoID=?");
    $sql->execute([$id]);
    if ($sql->fetchColumn() > 0) {

      $sql = $con->prepare("SELECT NombreProducto, DescripcionProducto, Precio FROM Productos WHERE ProductoID=? LIMIT 1");
      $sql->execute([$id]);
      $row = $sql->fetch(PDO::FETCH_ASSOC);
      $nombre = $row['NombreProducto'];
      $descripcion = $row['DescripcionProducto'];
      $precio = $row['Precio'];
      $dir_img = '../../public/img/' . $id . '/';
      // echo $id;
      // echo $dir_img;
      $ruta_img = $dir_img . 'imgPrincipal.jpg';



      if (!file_exists($ruta_img)) {
        $ruta_img = "/BDM/public/img/no-photo.jpg";
      }


      $imagenes = array();
      if (file_exists($dir_img)) {

        $dir = dir($dir_img);

        while (($archivo = $dir->read()) != false) {
          if ($archivo != 'imgPrincipal.jpg' && (strpos($archivo, 'jpg') || strpos($archivo, 'jpeg'))) {
            $imagenes[] = $dir_img . $archivo;
          }
        }
        $dir->close();

      }


    }

  } else {
    echo "Error al procesar la peticion";
    exit;
  }
}

?>

<!doctype html>
<html lang="en" data-bs-theme="auto">

<head>
  <!-- <script src="../assets/js/color-modes.js"></script> -->

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
  </style>


  <!-- Custom styles for this template -->
  <!-- <link href="navbar-fixed.css" rel="stylesheet"> -->
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
            <a class="nav-link text"  href="/BDM/vista/front/verCarrito.php" style="display: flex; align-items: center;">
              Carrito<span id="num_cart" class="badge"
                style="background-color: transparent; font-size: inherit; margin-top: -0.9em;"><?php echo $num_cart;?></span></a>
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



    <div class="container">
      <div class="row">
        <div class="col-md-6 order-md-1">

          <div id="carouselImagenes" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
              <div class="carousel-item active">
                <img src="<?php echo $ruta_img; ?>" class="d-block w-100">
                <!-- style="max-width: 100%; height: auto; margin-right: 20px;" -->
              </div>

              <?php foreach ($imagenes as $img) { ?>
                <div class="carousel-item">
                  <img src="<?php echo $img; ?>" class="d-block w-100">
                </div>
              <?php } ?>

            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselImagenes" data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselImagenes" data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div>





        </div>
        <div class="col-md-6 order-md-2">
          <h2 style="color: #333;">
            <?php echo $nombre ?>
          </h2>
          <h2 style="color: #333;">$
            <?php echo number_format($precio, 2, '.', ','); ?>
          </h2>
          <p class="lead" style="color: #333;">
            <?php echo $descripcion; ?>
          </p>

          <div class="d-grid gap-3 col-10 mx-auto">
            <button class="btn btn-primary" type="button">Comprar ahora</button>
            <button class="btn btn-outline-primary" type="button"
              onclick="addProducto(<?php echo $id; ?>, '<?php echo $token_tmp; ?>')">Agregar al Carrito</button>
          </div>

        </div>
      </div>

    </div>



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

  <script>
    //AJAX
    function addProducto(id, token) {
      // let url = '../php/carrito.php';
      let url = '/BDM/php/carrito.php';
      let formData = new FormData();
      formData.append('ProductoID', id);
      formData.append('token', token);
      
      fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors'
      }).then(response => response.json())
        .then(data => {
          if (data.ok) {
            let elemento = document.getElementById("num_cart")
            elemento.innerHTML = data.numero;
            
          }
        })

    }

  </script>

</body>

</html>