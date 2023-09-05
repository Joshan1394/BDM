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

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@docsearch/css@3">

    <link href="/BDM/public/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Fugaz One" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <!-- Style -->
    <link rel="stylesheet" href="/BDM/public/css/pagina.css">

    <!-- STYLE START -->
    <style>
        body{

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
<nav class="navbar navbar-expand-md  fixed-top nav-background">
    <div class="container-fluid">
        <a class="navbar-brand title" href="/BDM/vista/front/paginaPrincipal.php">Blissful</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <ul class="navbar-nav me-auto mb-2 mb-md-0">
                <li class="nav-item">
                    <a class="nav-link text" href="/BDM/vista/front/perfil.php">Perfil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text" href="/BDM/vista/front/historial.php">Historial</a>
                </li>

            </ul>
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sumit" type="submit">Search</button>
            </form>
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
                Perfile
            </div>
            <!-- PERFIL HEAD END -->
            <!-- PERFIL BODY START -->
            <div class="card-body text-center" style="background-color:rgb(102, 136, 176); ">
                <div class="row align-items-center">
                    <div class="col align-self-center">
                        <div class="card" style="background-color:transparent; border-color:transparent !important;">
                            <img src="assets/user.png" class="card-img-top" alt="..." style="border-radius:50%; width:50%; margin-left:25%; margin-top:5%">
                            <!-- PERFIL TITLE -->
                            <div class="card text" style=" background-color:transparent !important; border-color:transparent !important">
                                <div class="card-body">
                                    <h5 class="card-title">Datos del usuario</h5>
                                    <!-- NAME -->
                                    <div class="row">
                                        <div class="col-sm-6 lign-self-center">
                                            <p class="mb-0">Nombre(s)</p>
                                        </div>
                                        <div class="col-sm-6 lign-self-center">
                                            <p class=" mb-0">Leonardo Salvador</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- LAST NAME -->
                                    <div class="row">
                                        <div class="col-sm-6 lign-self-center">
                                            <p class="mb-0">Apellidos</p>
                                        </div>
                                        <div class="col-sm-6 lign-self-center">
                                            <p class=" mb-0">Hernández Pérez</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- CORREO  -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Correo</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class=" mb-0">example@gmail.com</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- DATE -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Fecha de nacimiento</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class=" mb-0">13/04/2000</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- GENDER -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Genero</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class=" mb-0">Masculino</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- ROLE -->
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <p class="mb-0">Rol</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <p class=" mb-0">Estudiante</p>
                                        </div>
                                    </div>

                                    <hr>
                                    <!-- EDIT -->
                                    <button class="btn btn-sumit" type="submit">Search</button>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    
                </div>
            </div>
        </div>
    </main>

    <br><br><br><br><br>

    <script src="/BDM/public/js/bootstrap.bundle.min.js"></script>
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