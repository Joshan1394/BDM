$(document).ready(function () {
    $('#formRegistro').validate({
        rules: {
            nombre: {
                required: true,
                minlength: 2, 
                maxlength: 255 
            },
            apellido: {
                required: true,
                minlength: 2, 
                maxlength: 255 
            },
            apodo: {
                required: true,
                minlength: 2, 
                maxlength: 50 
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 6 
            },
            fechaNacimiento: {
                required: true,
                date: true
            },
            tipo: {
                required: true
            },
            genero: {
                required: true
            },
            imagen: {
                required: true,
                accept: "image/*" 
            }
        },
        messages: {
            nombre: {
                required: "Por favor, ingresa tu nombre",
                minlength: "El nombre debe tener al menos 2 caracteres",
                maxlength: "El nombre no debe tener más de 255 caracteres"
            },
            apellido: {
                required: "Por favor, ingresa tu apellido",
                minlength: "El apellido debe tener al menos 2 caracteres",
                maxlength: "El apellido no debe tener más de 255 caracteres"
            },
            apodo: {
                required: "Por favor, ingresa tu apodo",
                minlength: "El apodo debe tener al menos 2 caracteres",
                maxlength: "El apodo no debe tener más de 50 caracteres"
            },
            email: {
                required: "Por favor, ingresa tu correo electrónico",
                email: "Ingresa una dirección de correo electrónico válida"
            },
            password: {
                required: "Por favor, ingresa una contraseña",
                minlength: "La contraseña debe tener al menos 6 caracteres"
            },
            fechaNacimiento: {
                required: "Por favor, ingresa tu fecha de nacimiento",
                date: "Ingresa una fecha de nacimiento válida"
            },
            tipo: {
                required: "Selecciona un tipo (Comprador o Vendedor)"
            },
            genero: {
                required: "Selecciona un género"
            },
            imagen: {
                required: "Por favor, adjunta una imagen",
                accept: "El archivo debe ser una imagen"
            }
        },
        submitHandler: function (form) {
            var formData = new FormData(form);

            $.ajax({
                type: 'POST',
                url: '/BDM/php/APIRegistro.php',
                data: formData,
                contentType: false,
                processData: false,
                success: function (response) {
                    var data = JSON.parse(response);
                    if (data.message) {
                     
                        window.location.href = "/BDM/vista/front/login.php";
                    } else if (data.error) {
                        
                        alert("Error en el registro: " + data.error);
                    }
                }
            });
        }
    });
});

