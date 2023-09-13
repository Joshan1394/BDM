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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="d-flex justify-content-start">
            <form class="d-flex searchbar" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-sumit" type="submit">Search</button>
            </form>
        </div>

        <div id="menuToggle" class="me-1">

            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>

            <ul id="menu">
                <li class="nav-item">
                    <a class="nav-link text" href="/BDM/vista/front/perfil.php">Perfil</a>
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
                Perfile
            </div>
            <!-- PERFIL HEAD END -->
            <!-- PERFIL BODY START -->
            <div class="card-body text-center" style="background-color:rgb(102, 136, 176); ">
                <div class="row align-items-center">
                    <div class="col align-self-center">
                        <div class="" style="background-color:transparent; border-color:transparent !important;">
                            <img src="https://static.vecteezy.com/system/resources/previews/008/442/086/non_2x/illustration-of-human-icon-user-symbol-icon-modern-design-on-blank-background-free-vector.jpg" class="card-img-top mt-2" alt="..." style="border-radius:50%; width:20%;">
                            <!-- PERFIL TITLE -->
                            <div class=" text" style=" background-color:transparent !important; border-color:transparent !important">
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
                                    <button class="btn btn-sumit" type="submit">Editar</button>
                                    <button class="btn btn-sumit" id="openModalBtn">Agregar producto</button>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="myModal" class="modal ">
            <div class="modal-content w-50">
                <span class="close">&times;</span>
                <div class="form-step" data-step="1">
                    <h2>Paso 1: Informacion general</h2>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Nombre</label>
                            <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Description</label>
                            <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea"></textarea>
                        </div>

                        <button class="btn btn-primary next">Siguiente</button>
                    </form>

                </div>
                <div class="form-step" data-step="2">
                    <h2>Paso 2:Producto</h2>
                    <form>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Precio individual</label>
                            <input type="text" class="form-control w-50" id="exampleInputEmail1" placeholder="$0.00">
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputPassword1" class="form-label">Cantidad</label>
                            <div class="number">
                                <span class="minus">-</span>
                                <input type="text" id="cantidad" value="1" />
                                <span class="plus">+</span>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Cotización/vender</label>
                            <select class="form-select w-50" aria-label="Default select example">
                                <option selected>Opciones</option>
                                <option value="1">Cotización</option>
                                <option value="2">Vender</option>
                            </select>
                        </div>
                        <button class="btn btn-primary prev">Anterior</button>
                        <button class="btn btn-primary next">Siguiente</button>
                    </form>

                </div>
                <div class="form-step" data-step="3">
                    <h2>Paso 3: Imágenes</h2>
                    <form>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Imagenes (1 o más)</label>
                            <input class="form-control" type="file" id="formFileMultiple" accept="image/*" multiple>
                        </div>
                        <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel">
                            <div class="carousel-inner">
                                <!-- Las imágenes seleccionadas se mostrarán aquí -->
                            </div>
                            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="prev">
                                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Previous</span>
                            </button>
                            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying" data-bs-slide="next">
                                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                <span class="visually-hidden">Next</span>
                            </button>
                        </div>
                        <button class="btn btn-primary prev mt-5">Anterior</button>
                        <button class="btn btn-primary next mt-5">Siguiente</button>
                    </form>
                </div>
                <div class="form-step" data-step="3">
                    <h2>Paso 3: Video</h2>
                    <form>
                        <div class="mb-3">
                            <label for="formFileMultiple" class="form-label">Video</label>
                            <input class="form-control" id="file" type="file" accept="video/mp4,video/mkv, video/x-m4v,video/*">
                        </div>
                        <div class="mb-3 w-75">
                            <video class="mb-3 w-100 h-100" id="video" controls></video>
                        </div>
                        <button class="btn btn-primary prev">Anterior</button>
                        <button class="btn btn-primary submit">Enviar</button>
                    </form>
                </div>
            </div>
        </div>
    </main>

    <br><br><br><br><br>
    <script src="/BDM/public/js/modal.js"></script>
    <script src="/BDM/public/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
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