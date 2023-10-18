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

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>
    <script src="/BDM/public/js/registerAjax.js"></script>


    <title>Registro</title>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <style>
        label.error {
            float: none;
            color: red;
        }

        input.error {
            border: 1px dashed rgb(255, 51, 0);

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
                        <form action="/BDM/php/APIRegistro.php" method="POST" id="formRegistro" name="formRegistro" enctype="multipart/form-data">
                            <div class="text-center">
                                <div class="row">
                                    <!-- Nombre -->
                                    <div class="col">
                                        <label for="nombre">Nombre:</label>
                                        <input type="text" class="form-control mt-2 mb-2" id="nombre" name="nombre">
                                        <span class="text-danger error-message"></span>
                                    </div>
                                    <!-- Apellido -->
                                    <div class="col">
                                        <label for="apellido">Apellido:</label>
                                        <input type="text" class="form-control mt-2 mb-2" id="apellido" name="apellido">
                                        <span class="text-danger error-message"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Apodo -->
                                    <div class="col">
                                        <label for="apodo">Nombre de usuario:</label>
                                        <input type="text" class="form-control mt-2 mb-2" id="apodo" name="apodo">
                                        <span class="text-danger error-message"></span>
                                    </div>
                                    <!-- Imagen -->
                                    <div class="col">
                                        <label for="imagen">Imagen de perfil:</label>
                                        <input class="file-input mt-2 mb-2" type="file" id="imagen" name="imagen" accept="image/*">
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Email -->
                                    <div class="col">
                                        <label for="email">Correo electrónico:</label>
                                        <input type="text" class="form-control mt-2 mb-2" id="email" name="email">
                                        <span class="text-danger error-message"></span>
                                    </div>
                                    <!-- Contraseña -->
                                    <div class="col">
                                        <label for="password">Contraseña:</label>
                                        <input type="password" class="form-control mt-2 mb-2" id="password" name="password">
                                        <span class="text-danger error-message"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Fecha de nacimiento -->
                                    <div class="col">
                                        <label for="fechaNacimiento">Fecha de nacimiento:</label>
                                        <input type="date" class="form-control mt-2 mb-2" id="fechaNacimiento" name="fechaNacimiento">
                                        <span class="text-danger error-message"></span>
                                    </div>
                                    <!-- Tipo -->
                                    <div class="col align-self-start">
                                        <label for="tipo">Tipo:</label>
                                        <div class="radio-buttons-container">
                                            <div class="radio-button">
                                                <input name="tipo" id="radioComprador" class="radio-button__input" type="radio" value="Comprador">
                                                <label for="radioComprador" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>
                                                    Comprador
                                                </label>
                                            </div>
                                            <div class="radio-button">
                                                <input name="tipo" id="radioVendedor" class="radio-button__input" type="radio" value="Vendedor">
                                                <label for="radioVendedor" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>
                                                    Vendedor
                                                </label>
                                            </div>
                                        </div>
                                        <span class="text-danger error-message"></span>
                                    </div>
                                </div>
                                <div class="row">
                                    <!-- Género -->
                                    <div class="col">
                                        <label for="genero">Género:</label>
                                        <div class="radio-buttons-container">
                                            <div class="radio-button">
                                                <input name="genero" id="radioFemenino" class="radio-button__input" type="radio" value="Femenino">
                                                <label for="radioFemenino" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>
                                                    Femenino
                                                </label>
                                            </div>
                                            <div class="radio-button">
                                                <input name="genero" id="radioMasculino" class="radio-button__input" type="radio" value="Masculino">
                                                <label for="radioMasculino" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>
                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="radio-button">
                                                <input name="genero" id="radioIndefinido" class="radio-button__input" type="radio" value="Indefinido">
                                                <label for="radioIndefinido" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>
                                                    Indefinido
                                                </label>
                                            </div>
                                        </div>
                                        <span class="text-danger error-message"></span>
                                    </div>
                                </div>
                                <hr class="mt-3" size="2px" color="skyblue">
                                <div style="text-align:center">
                                    <a href="login.php">¿Ya tienes cuenta? <span style="color:rgb(178, 112, 146);">Ingresa </span></a>
                                </div>
                                <div id="errores" class="text-danger"></div>
                                <button type="submit" class="mt-3 btn btn-primary" value="Enviar">Registrarse</button>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

</body>

</html>