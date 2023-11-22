<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
<script>
  feather.replace();
</script>


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

  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">

  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

  <link href="/BDM/public/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Fugaz One" rel="stylesheet">

  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
  <!-- Style -->
  <link rel="stylesheet" href="/BDM/public/css/pagina.css">
  <link rel="stylesheet" href="/BDM/public/css/historial_style.css">

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
          <a class="nav-link text" href="">Carrito</a>
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
<!-- BODY START -->

<body>
  <br><br><br><br><br>

  <main>
    <br><br><br><br><br>
    <div class=" card text-center" style="margin-left:10%; margin-right:10%">
      <div class="row">
        <div class="col">
          <div class="card" style="margin-left:5%; margin-top:2%">
            <div class="row g-0">
              <div class="col-md-4">
                <img src="https://m.media-amazon.com/images/I/81h0WFRhjiL._AC_UF894,1000_QL80_.jpg"
                  class="img-fluid rounded-start" alt="curso" style="margin-top:10%; margin-left:5%;">
              </div>
              <div class="col-md-8">
                <div class="card-body">
                  <h5 class="card-title">Juguetes para gato</h5>
                  <p class="card-text">Lorem ipsum dolor sit amet consectetur adipisicing elit. A
                    doloribus accusantium itaque dignissimos corporis, pernatur!</p>
                  <p class="card-text"><small class="text-muted">Precio: $200 MX</small></p>
                </div>
              </div>
            </div>

          </div>
          <br>
          <div class="card-footer text-muted"
            style="background-color:rgb(118, 131, 136); margin-left:5%; margin-top:2%">
            <h5 class="card-title" style="color:rgb(255,255,255);">Total $200 MX</h5>
          </div>
        </div>
        <div class="col" style="padding-right:0 !important;">
          <div class="accordion" id="accordionPanelsStayOpenExample">
            <div class="accordion-item">
              <h2 class="accordion-header" id="panelsStayOpen-headingOne">
                <button class="accordion-button" type="button" data-bs-toggle="collapse"
                  data-bs-target="#panelsStayOpen-collapseOne" aria-expanded="true"
                  aria-controls="panelsStayOpen-collapseOne">
                  Paypal
                </button>
              </h2>
              <div id="panelsStayOpen-collapseOne" class="accordion-collapse collapse show"
                aria-labelledby="panelsStayOpen-headingOne">
                <div class="accordion-body">
                  <div class="col">

                    <form role="form" id="payment-form">
                      <div class="row">
                        <div class="col-xs-6 col-md-6 mb-3">
                          <div class="form-group">
                            <label>Nombres</label>
                            <input type="text" class="form-control" name="name" placeholder="Ingrese su nombre"
                              required="">
                          </div>
                        </div>
                        <div class="col-xs-6 col-md-6 pull-right">
                          <div class="form-group">
                            <label>Apellidos</label>
                            <input type="text" class="form-control" name="last name" placeholder="Ingrese su apellido"
                              required="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 mb-3">
                          <div class="form-group">
                            <label>Número de tarjeta</label>
                            <div class="input-group">
                              <input type="text" class="form-control" name="Number" placeholder="0000 0000 0000"
                                required="">
                              <span class="input-group-addon" style="margin-top:1%; margin-left:1%"><i
                                  data-feather="credit-card"></i></span>
                            </div>
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-7 col-md-7 mb-3">
                          <div class="form-group">
                            <label>Fecha de vencimiento</label>
                            <input type="text" class="form-control" name="Expiry" placeholder="MM / YY" required="">
                          </div>
                        </div>
                        <div class="col-xs-5 col-md-5 pull-right">
                          <div class="form-group">
                            <label>CVV CODE</label>
                            <input type="text" class="form-control" name="CVV" placeholder="CVV" required="">
                          </div>
                        </div>
                      </div>
                      <div class="row">
                        <div class="col-xs-12 mb-3">
                          <button class="btn btn-primary" type="submit">Pagar</button>
                        </div>
                      </div>
                    </form>

                  </div>
                </div>
              </div>
            </div>

          </div>

        </div>
      </div>
    </div>
    <br><br><br><br><br>

    <main>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>

      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN"
        crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>
      <script>
        feather.replace();
      </script>


      <script src="/BDM/public/js/bootstrap.bundle.min.js"></script>
</body>

<!-- ======= Footer ======= -->
<footer id="footer" class="footer mt-5">


  <div class="container mt-4 text-center">
    <div class="text">
      &copy; Copyright <strong></strong>. All Rights Reserved
    </div>
    <div class="text">

      <!-- Designed by perla, gera y mike</a> -->
    </div>
  </div>

</footer><!-- End Footer -->

</html>