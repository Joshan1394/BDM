

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
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.3/jquery.validate.min.js"></script>


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="/BDM/public/css/bootstrap.min.css">

    <!-- Style -->
    <link rel="stylesheet" href="/BDM/public/css/login.css">

    <title>Inicio de sesión</title>

    <script src="https://cdn.jsdelivr.net/npm/feather-icons/dist/feather.min.js"></script>

    <style>
       input.error {
            border: 1px dashed rgb(255, 51, 0);
        }

        label.error {
            float: none;
            color: red;
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
                        <form method="POST" id="formulario_is" name="formulario_is" action="/BDM/php/loginPHP.php" class="signin-form">
                            <div class="text-center">
                                <div class="row">
                                    <div class="col">
                                        <input type="text" class="form-control " placeholder="Nombre usuario" id="usuario" name="Usuario">
                                        
                                    </div>
                                    <div class="col">
                                        <input type="password" class="form-control " id="password" name="Contra1" placeholder="Contraseña">
                                        
                                    </div>
                                </div>
                                <hr class="mt-5" size="2px" color="skyblue">
                                <div style="text-align:center">
                                    <a href="register.php">¿Aún no tienes cuenta? <span style="color:rgb(178, 112, 146);">Regístrate </span></a>
                                </div>
                                <button type="submit" class="mt-3 btn btn-primary" value="Enviar">Ingresar</button>
                            </div>
                        </form>
                        <?php
                        // Después del formulario, puedes mostrar el error si existe
                        if (isset($error)) {
                            echo '<script>alert("' . $error . '");</script>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>


    </div>

    <script>
        feather.replace()
    </script>


    
    <!-- <script src="/public/js/login.js'"></script> -->
    <!-- <script src="/public/js/validacionLogin.js"></script> -->
    <script src="/BDM/public/js/validacionesLoginJQ.js"></script>
</body>

</html>