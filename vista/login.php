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




    <title>Inicio de sesión</title>

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

        <div class="bg order-1 order-md-2 transboxLogin" style="background-image:url('/BDM/public/img/login.jpg')"></div>
        <div class="contents order-2 order-md-1">

            <div class="container ">
                <div class="row align-items-center justify-content-center ">
                    <div class="col-md-12">
                        <div class="mb-4  text-align">
                            <h3 class="title">Iniciar Sesión</h3>
                            <p class="mb-4"></p>
                        </div>
                        <form method="POST" action="#" class="signin-form">
                            <div class="text-center">
                               
                                
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
                                <div class="row justify-content-center">

                                
                                    <div class="col align-self-center ">
                                        <div class="">
                                            <label for="formFile" class="form-label">Tipo:</label>
                                        </div>
                                        <div class=" radio-button radio-buttons-container ">
                                            <div class="me-3 radio-button">
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
                            
                                <hr class="mt-5" size="2px" color="skyblue">
                                <div style="text-align:center" >
                                    <a href="register.php">¿Aun no tienes cuenta? <span style="color:rgb(178, 112, 146);">Registrate </span></a>
                                </div>

                                <button type="submit" class="mt-3 btn btn-primary">Ingresar </button>
                        </form>



                    </div>
                </div>
            </div>
        </div>


    </div>

    <script>
        feather.replace()
    </script>

    <script src="/public/js/jquery-3.3.1.min.js"></script>
    <script src="/public/js/popper.min.js'"></script>
    <script src="/public/js/bootstrap.min.js"></script>
    <script src="/public/js/login.js'"></script>
</body>

</html>