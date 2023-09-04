<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Fugaz One" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <!-- <link rel="stylesheet" href="/BDM/public/css/owl.carousel.min.css"> -->

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/BDM/public/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/BDM/public/css/login.css">




    <title>Registro</title>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <style>
        .error-message {
            color: rgb(161, 159, 247) !important;
            margin-left: 6px !important;
        }

        .title {
            font-family: 'Fugaz One';
        }
    </style>

</head>

<body>


    <div class="d-lg-flex half">

        <div class="bg order-1 order-md-2 transboxRegister" style="background-image:url('/BDM/public/img/register.jpg')"></div>
        <div class="contents order-2 order-md-1">

            <div class="container">
                <div class="row align-items-center justify-content-center ">
                    <div class="col-md-12">
                        <div class="mb-4  text-align">
                            <h3 class="title">Registro</h3>
                            <p class="mb-4"></p>
                        </div>
                        <form method="POST" action="#" class="signin-form">
                            <div class="text-center">
                                <div class="row">
                                    <div class="col">

                                        <input type="text" class="form-control" placeholder="Nombre" id="nombre" name="nombre">

                                        <span class="text-danger error-message"></span>


                                    </div>
                                    <div class="col">

                                        <input type="password" class="form-control" id="apellido" name="apellido" placeholder="Apellidos">

                                        <span class="text-danger error-message"></span>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">

                                        <input type="text" class="form-control" placeholder="Nombre de usuario" id="apodo" name="apodo">

                                        <span class="text-danger error-message"></span>


                                    </div>
                                    <div class="col">

                                        <input class="file-input" type="file" id="images" accept="image/*" required>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">

                                        <input type="text" class="form-control" placeholder="Correo eléctronico" id="email" name="email">

                                        <span class="text-danger error-message"></span>


                                    </div>
                                    <div class="col">

                                        <input type="password" class="form-control" id="password" name="password" placeholder="Contraseña">

                                        <span class="text-danger error-message"></span>

                                    </div>

                                </div>
                                <div class="row">

                                    <div class="col">
                                        <input type="date" class="form-control" id="date" name="date" placeholder="Contraseña">

                                        <span class="text-danger error-message"></span>

                                    </div>
                                    <div class="col align-self-start ">
                                        <div class="d-flex align-items-start">
                                            <label for="formFile" class="form-label">Tipo:</label>
                                        </div>
                                        <div class="radio-buttons-container ">
                                            <div class="radio-button">
                                                <input name="radio-group" id="radio2" class="radio-button__input" type="radio">
                                                <label for="radio2" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>

                                                    Comprador
                                                </label>
                                            </div>
                                            <div class="radio-button">
                                                <input name="radio-group" id="radio1" class="radio-button__input" type="radio">
                                                <label for="radio1" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>

                                                    Vendedor
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col">
                                        <div class="d-flex align-items-start">
                                            <label for="formFile" class="form-label">Genero</label>
                                        </div>
                                        <div class="radio-buttons-container">
                                            <div class="radio-button">
                                                <input name="radio-group" id="radio2" class="radio-button__input" type="radio">
                                                <label for="radio2" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>

                                                    Femenino
                                                </label>
                                            </div>
                                            <div class="radio-button">
                                                <input name="radio-group" id="radio1" class="radio-button__input" type="radio">
                                                <label for="radio1" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>

                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="radio-button">
                                                <input name="radio-group" id="radio3" class="radio-button__input" type="radio">
                                                <label for="radio3" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>

                                                    Indefinido
                                                </label>
                                            </div>
                                        </div>


                                    </div>

                                </div>

                               
                                <hr class="mt-5" size="2px" color="skyblue">
                                <div style="text-align:center" >
                                    <a href="login.php">¿Ya tienes cuenta? <span style="color:rgb(178, 112, 146);">Ingresa </span></a>
                                </div>

                                <button type="submit" class="mt-3 btn btn-primary">Ingresar </button>
                        </form>



                    </div>
                </div>
            </div>
        </div>


    </div>