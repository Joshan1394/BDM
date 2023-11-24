<?php
// Incluir archivos de configuración y conexión
require '../../php/Config.php';
require '../../php/Conexion.php';

// Crear una instancia de la base de datos
$db = new Database();
$con = $db->conectar();

// Verificar si se ha enviado el formulario de búsqueda
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener el término de búsqueda del formulario
    $busqueda = $_POST['busqueda'];

    // Preparar la consulta SQL para buscar productos
    $sql = $con->prepare("SELECT ProductoID, NombreProducto, Precio FROM Productos WHERE NombreProducto LIKE :busqueda");
    $sql->bindValue(':busqueda', "%$busqueda%", PDO::PARAM_STR);
    $sql->execute();

    // Obtener resultados
    $resultado = $sql->fetchAll(PDO::FETCH_ASSOC);
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
    .mensajeNoEncontrado{
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

        </ul>
      </div>
    </div>
  </nav>

  <main>
    <div class="container text-center mt-4">
      <div class="row align-items-start">
      <?php
        // Mostrar los resultados
        if (isset($resultado) && $resultado) {
            foreach ($resultado as $row) {
                $id = $row['ProductoID'];
                $imagen = "/BDM/public/img/" . $id . "/imgPrincipal.jpg";

                if (!file_exists($_SERVER['DOCUMENT_ROOT'] . $imagen)) {
                    $imagen = "/BDM/public/img/no-photo.jpg";
                }
                ?>
                <div class="col-md-4 mb-4">
                    <div class="card" style="width: 18rem;">
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
                <?php
            }
        } else {
            echo "<p class='mensajeNoEncontrado'> No se encontraron productos.</p>";
        }
        ?>
      </div>
    </div>
    <div id="contenidoModal"></div>

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
 <script>
    // Función para abrir el modal
    function abrirModal() {
      // Carga el contenido del modal.html en el div con id 'contenidoModal'
      document.getElementById('contenidoModal').innerHTML = '<object type="text/html" data=BDM/vista/front/categorias.php"></object>';
    }

    // Función para cerrar el modal
    function cerrarModal() {
      document.getElementById('contenidoModal').innerHTML = ''; // Limpia el contenido del modal
    }

    // Agrega un evento de clic al enlace de Categorias
    document.getElementById('enlaceCategorias').addEventListener('click', function(event) {
      event.preventDefault(); // Evita que se siga el enlace por defecto
      console.log("esta haciendo click");
      abrirModal(); // Llama a la función para abrir el modal
    });
  </script>
</body>

</html>