<?php
require '../../php/Config.php';
require '../../php/Conexion.php';
// require '/BDM/php/Conexion.php';
$db = new Database();
$con = $db->conectar();

$sql = "SELECT CategoriaID, NombreCategoria FROM Categorias";
$resultado = $con->query($sql);
$Categorias = $resultado->fetchAll(PDO::FETCH_ASSOC);

session_start();

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
  <link rel="stylesheet" href="/BDM/public/css/modal_style.css">
  <!-- STYLE START -->
  <style>
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

    .row {
      margin-right: 0 !important;
    }

    .title {
      font-family: 'Fugaz One';
      color: rgb(178, 112, 146) !important;
    }
  </style>
  <!-- STYLE END -->

</head>




<!-- HEAD END -->
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
        <li class="nav-item ">
          <a class="nav-link text" href="/BDM/vista/login.php">Inicio sesión</a>
        </li>

      </ul>
    </div>
  </div>
</nav>
<!-- BODY START -->

<body>
  <br><br><br><br><br>

  <!-- MAIN START -->
  <main>

    <div class="card text-center" style="margin-left:5%; margin-right:5%; border-color:transparent">
      <!-- PERFIL HEAD START -->
      <div class="card-header" style="background-color:rgb(70, 100, 158)">
        Perfil
      </div>
      <!-- PERFIL HEAD END -->
      <!-- PERFIL BODY START -->
      <div class="card-body text-center" style="background-color:rgb(102, 136, 176); ">
        <div class="row align-items-center">
          <div class="col align-self-center">
            <div class="" style="background-color:transparent; border-color:transparent !important;">
              <form action="/BDM/php/editarPerfil.php" method="POST" id="formEditar" name="formEditar"
                enctype="multipart/form-data">
                <img src="data:image/jpeg;base64,<?php echo $_SESSION['imagenUsuario']; ?>" alt="Imagen de perfil"
                  style="border-radius: 50%; width: 20%;">
                <div class="container text-center">
                  <div class="row justify-content-center mt-3">
                    <div class="col-sm-5 align-self-center">
                      <input class="form-control" type="file" id="formImagen" name="imagen">
                    </div>
                  </div>
                </div>
                <!-- PERFIL TITLE -->
                <div class=" text"
                  style=" background-color:transparent !important; border-color:transparent !important">
                  <div class="card-body">
                    <h5 class="card-title mb-3">Datos del usuario</h5>
                    <input type="hidden" name="id" value="<?php echo $_SESSION['idUsuario']; ?>">
                    <!-- NAME -->
                    <div class="row ">
                      <div class="col-sm-7">
                        <p class="mb-0">Nombre(s)</p>
                      </div>
                      <div class="col-sm-3 ">
                        <input type="text" class="form-control mt-2 mb-2" id="nombre" name="nombre"
                          value="<?php echo $_SESSION['nombreUsuario']; ?>">

                      </div>
                    </div>

                    <hr>
                    <!-- LAST NAME -->
                    <div class="row">
                      <div class="col-sm-7">
                        <p class="mb-0">Apellidos</p>
                      </div>
                      <div class="col-sm-3 ">
                        <input type="text" class="form-control mt-2 mb-2" id="apellido" name="apellido"
                          value="<?php echo $_SESSION['apellidosUsuario']; ?>">
                      </div>
                    </div>



                    <hr>

                    <!-- CORREO  -->
                    <div class="row">
                      <div class="col-sm-7">
                        <p class="mb-0">Correo</p>
                      </div>
                      <div class="col-sm-3">
                        <input type="text" class="form-control mt-2 mb-2" id="email" name="email"
                          value="<?php echo $_SESSION['emailUsuario']; ?>">
                      </div>
                    </div>

                    <hr>
                    <!-- DATE -->
                    <div class="row">
                      <div class="col-sm-7">
                        <p class="mb-0">Fecha de nacimiento</p>
                      </div>
                      <div class="col-sm-3">
                        <input type="date" class="form-control mt-2 mb-2" id="fechaNacimiento" name="fechaNacimiento"
                          value="<?php echo $_SESSION['fechaNacimientoUsuario']; ?>">
                      </div>
                    </div>

                    <hr>
                    <!-- GENDER -->
                    <div class="row">
                      <div class="col-sm-7">
                        <p class="mb-0">Genero</p>
                      </div>
                      <div class="col-sm-3">
                        <div class="radio-buttons-container">
                          <div class="form-check mb-3">
                            <input name="genero" id="radioFemenino" class="form-check-input ms-2" type="radio"
                              value="Femenino" <?php if ($_SESSION['generoUsuario'] == 'Femenino')
                                echo 'checked'; ?>>
                            <label for="radioFemenino" class="radio-button__label">
                              <span class="radio-button__custom"></span>
                              Femenino
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input name="genero" id="radioMasculino" class="form-check-input ms-2" type="radio"
                              value="Masculino" <?php if ($_SESSION['generoUsuario'] == 'Masculino')
                                echo 'checked'; ?>>
                            <label for "radioMasculino" class="radio-button__label">
                              <span class="radio-button__custom"></span>
                              Masculino
                            </label>
                          </div>
                          <div class="form-check mb-3">
                            <input name="genero" id="radioIndefinido" class="form-check-input ms-2" type="radio"
                              value="Indefinido" <?php if ($_SESSION['generoUsuario'] == 'Indefinido')
                                echo 'checked'; ?>>
                            <label for="radioIndefinido" class="radio-button__label">
                              <span class="radio-button__custom"></span>
                              Indefinido
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>

                    <hr>
                    <!-- ROLE -->
                    <div class="row align-items-center">
                      <div class="col-sm-7">
                        <p class="mb-0">Rol</p>
                      </div>
                      <div class="col-sm-3">

                        <div>
                          <div class="form-check mb-3">
                            <input name="tipo" id="radioComprador" class="form-check-input ms-2" type="radio"
                              value="Comprador" <?php if ($_SESSION['tipoUsuario'] == 'Comprador')
                                echo 'checked'; ?>>
                            <label for="radioComprador" class="form-check-label">
                              <span class="radio-button__custom"></span>Comprador
                            </label>
                          </div>
                          <div class="form-check">
                            <input name="tipo" id="radioVendedor" class="form-check-input ms-2" type="radio"
                              value="Vendedor" <?php if ($_SESSION['tipoUsuario'] == 'Vendedor')
                                echo 'checked'; ?>>
                            <label for="radioVendedor" class="radio-button__label">
                              <span class="radio-button__custom"></span>
                              Vendedor
                            </label>
                          </div>
                        </div>
                      </div>

                    </div>

                    <hr>
                    <!-- EDIT -->
                    <button class="btn btn-sumit" type="submit">Editar</button>
              </form>



            </div>

          </div>

          <!-- AQUI -->
          <button class="btn btn-sumit" id="openModalBtn">Agregar producto</button>

        </div>
      </div>
    </div>
    </div>
    </div>
    <div id="myModal" class="modal">
      <div class="modal-content w-50">
        <span class="close">&times;</span>
        <form action="/BDM/php/productos.php" method="POST" enctype="multipart/form-data">

          <h2>Agregar Nuevo Producto</h2>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Nombre</label>
            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="nombre">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Description</label>
            <textarea class="form-control" placeholder="Ingrese la descricion del producto" id="floatingTextarea"
              name="descripcion"></textarea>
          </div>


          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Precio individual</label>
            <input type="text" class="form-control w-50" id="exampleInputEmail1" name="precio" placeholder="$0.00">
          </div>

          <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Cantidad</label>
            <div class="number">
              <span class="minus">-</span>
              <input type="text" id="cantidad" name="cantidad" value="1" />
              <span class="plus">+</span>
            </div>
          </div>

          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Categoria</label>
            <select class="form-select w-50" name="categoria" aria-label="Default select example">
              <option selected>Seleccionar</option>
              <?php foreach ($Categorias as $categoria) { ?>
                <option value="<?php echo $categoria["CategoriaID"]; ?>">
                  <?php echo $categoria["NombreCategoria"]; ?>
                </option>
              <?php } ?>
            </select>
          </div>


          <!-- <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Imagenes (1 o más)</label>
            <input class="form-control" name="imagen" type="file" id="formFileMultiple" accept="image/*" multiple>
          </div>
          <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel">
            <div class="carousel-inner"> -->
          <!-- Las imágenes seleccionadas se mostrarán aquí -->
          <!-- </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
              data-bs-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
          </div> -->

          <div class="mb-3">
            <label for="imagen_principal" class="form-label">Imagen</label>
            <input type="file" class="form-control" name="imagen1" accept="image/jpeg/jpg" required>
          </div>

          <div class="mb-3">
            <label for="imagen_varias" class="form-label">Otras Imagenes (Opcional)</label>
            <input type="file" class="form-control" name="imagen2[]" accept="image/jpeg" multiple>
          </div>


          <div class="mb-3">
            <label for="formFileMultiple" class="form-label">Video</label>
            <input class="form-control" name="video" id="file" type="file"
              accept="video/mp4,video/mkv, video/x-m4v,video/*">
          </div>

          <div class="mb-3 w-75">
            <video class="mb-3 w-100 h-100" id="video" controls></video>
          </div>

          <button class="btn btn-primary submit">Guardar Producto</button>
        </form>


      </div>
    </div>
  </main>

  <br><br><br><br><br>
  <script src="/BDM/public/js/modal.js"></script>
  <script src="/BDM/public/js/bootstrap.bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
    crossorigin="anonymous"></script>
</body>

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

</html>