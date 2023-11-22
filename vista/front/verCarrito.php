<?php

require '../../php/Config.php';
require '../../php/Conexion.php';
// require 'C:/xampp/htdocs/BDM/php/Conexion.php';
$db = new Database();
$con = $db->conectar();

$productos = isset($_SESSION['carrito']['productos']) ? $_SESSION['carrito']['productos'] : null;

// print_r($_SESSION);

$lista_carrito = array();

if ($productos != null) {
  foreach ($productos as $clave => $cantidad) {

    $sql = $con->prepare("SELECT ProductoID, NombreProducto, Precio, $cantidad AS cantidad FROM Productos WHERE ProductoID=?");
    $sql->execute([$clave]);
    $lista_carrito[] = $sql->fetch(PDO::FETCH_ASSOC);

  }
}




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

    <div class="container">
      <div class="table-response">
        <table class="table">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <?php if ($lista_carrito == null) {
              echo '<tr><td colspan="5" class="text-center"><b>Lista Vacia</td></tr>';
            } else {
              $total = 0;
              // print_r($lista_carrito);
              foreach ($lista_carrito as $producto) {
                $_id = $producto['ProductoID'];
                $nombre = $producto['NombreProducto'];
                $precio = $producto['Precio'];
                $cantidad = $producto['cantidad'];
                $subtotal = $cantidad * $precio;
                $total += $subtotal;


                ?>


                <tr>
                  <td>
                    <?php echo $nombre; ?>
                  </td>
                  <td>
                    $
                    <?php echo number_format($precio, 2, '.', ','); ?>
                  </td>
                  <td>
                    <input type="number" min="1" max="10" step="1" value="<?php echo $cantidad; ?>" size="5"
                      id="cantidad_<?php echo $_id ?>" onchange="actualizaCantidad(this.value,<?php echo $_id; ?> )">
                  </td>
                  <td>

                    <div id="subtotal_<?php echo $_id; ?>" name="subtotal[]">
                      $
                      <?php echo number_format($subtotal, 2, '.', ','); ?>
                    </div>
                  </td>
                  <td>
                    <a href="#" id="eliminar" class="btn btn-warning btn-sm" data-bs-id="<?php echo $_id; ?>"
                      data-bs-toggle="modal" data-bs-target="#eliminaModal">Eliminar</a>
                  </td>
                </tr>
              <?php } ?>

              <tr>
                <td colspan="3"></td>
                <td colspan="2">
                  <p class="h3" id="total">$
                    <?php echo number_format($total, 2, '.', ','); ?>
                  </p>
                </td>
              </tr>


            </tbody>
          <?php } ?>
        </table>
      </div>

      <?php if ($lista_carrito != null) { ?>
        <div class="row">
          <div class="col-md-5 offset-md-7 d-grid gap-2">
            <?php if (isset($_SESSION["idUsuario"])) { ?>
              <a href="/BDM/php/pago.php" class="btn btn-primary btn-lg"> Ir a pagar</a>
            <?php } else { ?>
              <a href="/BDM/vista/login.php?pago" class="btn btn-primary btn-lg"> Ir a pagar</a>            
            <?php } ?>
          </div>
        </div>
      <?php } ?>

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

  <!-- Modal Eliminar-->
  <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="eliminaModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="eliminaModalLabel" style="color: black;">Eliminar Producto</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" style="color: black;">
          ¿Deseas eliminar este producto del carrito?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button type="button" id="btn-elimina" class="btn btn-danger" onclick="eliminar()">Eliminar</button>
        </div>
      </div>
    </div>
  </div>



  <script src="/BDM/public/js/bootstrap.bundle.min.js"></script>

  <script>

    let eliminaModal = document.getElementById('eliminaModal');
    eliminaModal.addEventListener('show.bs.modal', function (event) {
      let button = event.relatedTarget
      let id = button.getAttribute('data-bs-id')
      let buttonElimina = eliminaModal.querySelector('.modal-footer #btn-elimina')
      buttonElimina.value = id;
    })

    function actualizaCantidad(cantidad, id) {
      let url = '/BDM/php/actualizarCarrito.php';
      let formData = new FormData();
      formData.append('action', 'agregar');
      formData.append('ProductoID', id);
      formData.append('cantidad', cantidad);

      fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors'
      }).then(response => response.json())
        .then(data => {
          if (data.ok) {

            let divSubtotal = document.getElementById("subtotal_" + id);
            divSubtotal.innerHTML = data.sub;

            let total = 0.00;
            let list = document.getElementsByName('subtotal[]');

            for (let i = 0; i < list.length; i++) {
              total += parseFloat(list[i].innerHTML.replace(/[$,]/g, ''));
            }

            total = new Intl.NumberFormat('en-US', {
              minimumFractionDigits: 2
            }).format(total)

            document.getElementById('total').innerHTML = '<?php echo "$ "; ?>' + total;

          }
        })


    }


    function eliminar() {

      let botonElimina = document.getElementById('btn-elimina');
      let id = botonElimina.value;

      let url = '/BDM/php/actualizarCarrito.php';
      let formData = new FormData();
      formData.append('action', 'eliminar');
      formData.append('ProductoID', id);


      fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors'
      }).then(response => response.json())
        .then(data => {
          if (data.ok) {
            location.reload();
          }
        })


    }

  </script>


</body>

</html>