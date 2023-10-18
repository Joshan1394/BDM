$(document).ready(function() {
 
    $("#formRegistro").validate({
        rules: {
            nombre: {
                required: true,
                letterswithspaces: true
            },
            apellido: {
                required: true,
                letterswithspaces: true
            },
            apodo: {
                required: true,
                letterswithspaces: true
            },
            imagen: {
                required: true
            },
            email: {
                required: true,
                email: true
            },
            password: {
                required: true,
                minlength: 8
            },
            inputContra2: {
                required: true,
                equalTo: "#password"
            },
            fechaNacimiento: {
                required: true
            },
           
        },
        messages: {
            password: {
                minlength: "Necesitamos al menos 8 caracteres"
            },
            nombre: {
                letterswithspaces: "Solo ingresa letras"
            },
            email: {
                email: "Ingresa un correo válido"
            }
        },
        errorPlacement: function(error, element) {
            if (element.is(":radio")) {
                error.appendTo(element.parents('div'));
            } else {
                error.insertAfter(element);
            }
        },
        submitHandler: function(form) {
    
            $.ajax({
                type: "POST",
                async: true,
                dataType: "json",
                data: new FormData(form),
                url: "/BDM/php/registerPHP.php", 
                cache: false,
                contentType: false,
                processData: false
            }).done(function(response) {
             
                clearErrorMessages();

            
                displayErrorMessages(response.data);

                if (response.success) {
                    alert("Registro exitoso. Serás redirigido a la página de inicio de sesión.");
                    window.location.href = "login.php"; 
                }
            }).fail(function(response) {
                console.error("Error en la solicitud AJAX");
            });
        }
    });

    $.validator.addMethod("letterswithspaces", function(value, element) {
        return /^[a-zA-Z ]+$/.test(value);
    }, "Solo ingresa letras");
});

function clearErrorMessages() {
    const errorSpans = document.querySelectorAll('span.text-danger');
    errorSpans.forEach(span => {
        span.textContent = "";
    });
}

function displayErrorMessages(errors) {
    const fieldMapping = {
        nombre: '#nombre',
        apellido: '#apellido',
        apodo: '#apodo',
        imagen: '#imagen',
        email: '#email',
        password: '#password',
        fechaNacimiento: '#date',
        radioGroup1: 'input[name="radioGroup1"]',
        radioGroup: 'input[name="radioGroup"]'
    };

    for (const key in errors) {
        if (errors.hasOwnProperty(key) && fieldMapping[key]) {
            const errorMessage = errors[key];
            const errorSpan = $(fieldMapping[key]).next('span.text-danger');
            errorSpan.text(errorMessage);
        }
    }
}