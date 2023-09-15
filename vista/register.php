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
                        <form action="#" class="signin-form" id="formRegistro" name="formRegistro" method="POST">
                            <div class="text-center">
                                <div class="row">
                                    <!-- Nombre -->
                                    <div class="col">
                                        <input type="text" class="form-control mt-2 mb-2" placeholder="Nombre" id="nombre" name="nombre">
                                        <!-- <span class="text-danger error-message"></span> -->
                                    </div>
                                    <!-- Apellido -->
                                    <div class="col">
                                        <input type="text" class="form-control mt-2 mb-2" id="apellido" name="apellido" placeholder="Apellidos">
                                        <!-- <span class="text-danger error-message"></span> -->
                                    </div>

                                </div>
                                <div class="row">
                                    <!-- Apodo -->
                                    <div class="col">
                                        <input type="text" class="form-control mt-2 mb-2" placeholder="Nombre de usuario" id="apodo" name="apodo">
                                        <!-- <span class="text-danger error-message"></span> -->
                                    </div>
                                    <!-- Imagen -->
                                    <div class="col">
                                        <input class="file-input mt-2 mb-2" type="file" id="images" name="image" accept="image/*">
                                    </div>

                                </div>
                                <div class="row">
                                    <!-- Email -->
                                    <div class="col">
                                        <input type="text" class="form-control mt-2 mb-2" placeholder="Correo eléctronico" id="email" name="email">
                                        <!-- <span class="text-danger error-message"></span> -->
                                    </div>
                                    <!-- Contraseña -->
                                    <div class="col">
                                        <input type="password" class="form-control mt-2 mb-2" id="password" name="password" placeholder="Contraseña">
                                        <!-- <span class="text-danger error-message"></span> -->
                                    </div>

                                </div>

                                <div class="row">
                                    <!-- Fecha de nacimiento -->
                                    <div class="col">
                                        <input type="date" class="form-control mt-2 mb-2" id="date" name="fechaNacimiento" placeholder="Fecha de nacimiento">
                                        <!-- <span class="text-danger error-message"></span> -->
                                    </div>
                                    <!-- Tipo -->
                                    <div class="col align-self-start ">
                                        <div class="d-flex align-items-start">
                                            <label for="formFile" class="form-label">Tipo:</label>
                                        </div>
                                        <div class="radio-buttons-container ">
                                            <div class="radio-button">
                                                <input name="radioGroup1" id="radioComprador" class="radio-button__input" type="radio">
                                                <label for="radioComprador" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>

                                                    Comprador
                                                </label>
                                            </div>
                                            <div class="radio-button">
                                                <input name="radioGroup1" id="radioVendedor" class="radio-button__input" type="radio">
                                                <label for="radioVendedor" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>

                                                    Vendedor
                                                </label>
                                            </div>

                                        </div>

                                    </div>

                                </div>

                                <div class="row">
                                    <!-- Genero -->
                                    <div class="col">
                                        <div class="d-flex align-items-start">
                                            <label for="formFile" class="form-label">Genero</label>
                                        </div>
                                        <div class="radio-buttons-container">
                                            <div class="radio-button">
                                                <input name="radioGroup" id="radioFemenino" class="radio-button__input" type="radio">
                                                <label for="radioFemenino" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>

                                                    Femenino
                                                </label>
                                            </div>
                                            <div class="radio-button">
                                                <input name="radioGroup" id="radioMasculino" class="radio-button__input" type="radio">
                                                <label for="radioMasculino" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>

                                                    Masculino
                                                </label>
                                            </div>
                                            <div class="radio-button">
                                                <input name="radioGroup" id="radioIndefinido" class="radio-button__input" type="radio">
                                                <label for="radioIndefinido" class="radio-button__label">
                                                    <span class="radio-button__custom"></span>

                                                    Indefinido
                                                </label>
                                            </div>
                                        </div>


                                    </div>

                                </div>


                                <hr class="mt-3" size="2px" color="skyblue">
                                <div style="text-align:center">
                                    <a href="login.php">¿Ya tienes cuenta? <span style="color:rgb(178, 112, 146);">Ingresa </span></a>
                                </div>
                                <div id="errores" class="text-danger"></div>


                                <button type="submit" class="mt-3 btn btn-primary" value="Enviar" form="formRegistro">Ingresar </button>
                        </form>



                    </div>
                </div>
            </div>
        </div>


    </div>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>
    <script language="javascript" type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/jquery.validate.min.js"></script>
    <script type="text/javascript" src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.10.0/localization/messages_es.js"></script>
    <script src="/BDM/public/js/register.js"></script>
</body>

</html>