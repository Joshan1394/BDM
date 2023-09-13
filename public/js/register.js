$(document).ready(function() {

    // VALIDACION DE CONTRASEÑA
    $('input[id=password]').keyup(function() {
        // keyup code here

        var pswd = $(this).val();
        //validate the length
        if (pswd.length < 8) {
            $('#length').removeClass('valid').addClass('invalid');

        } else {
            $('#length').removeClass('invalid').addClass('valid');
        }
        //validate letter
        if (pswd.match(/[A-z]/)) {
            $('#letter').removeClass('invalid').addClass('valid');
        } else {
            $('#letter').removeClass('valid').addClass('invalid');

        }
        //validate letter
        if (pswd.match(/[/., $@()]/)) {
            $('#especial').removeClass('invalid').addClass('valid');
        } else {
            $('#especial').removeClass('valid').addClass('invalid');
        }
        //validate capital letter
        if (pswd.match(/[A-Z]/)) {
            $('#capital').removeClass('invalid').addClass('valid');
        } else {
            $('#capital').removeClass('valid').addClass('invalid');
        }
        //validate number
        if (pswd.match(/\d/)) {
            $('#number').removeClass('invalid').addClass('valid');
        } else {
            $('#number').removeClass('valid').addClass('invalid');
        }
    // }).focus(function() {
    //     $('#pswd_info').show();
    // }).blur(function() {
    //     $('#pswd_info').hide();
    });
   
});



function filterFloat(evt, input) {
    // Backspace = 8, Enter = 13, ‘0′ = 48, ‘9′ = 57, ‘.’ = 46, ‘-’ = 43
    var key = window.Event ? evt.which : evt.keyCode;
    var chark = String.fromCharCode(key);
    var tempValue = input.value + chark;
    if (key >= 48 && key <= 57) {
        if (filter(tempValue) === false) {
            return false;
        } else {
            return true;
        }
    } else {
        if (key == 8 || key == 13 || key == 0) {
            return true;
        } else if (key == 46) {
            if (filter(tempValue) === false) {
                return false;
            } else {
                return true;
            }
        } else {
            return false;
        }
    }
}

function filter(__val__) {
    var preg = /^([0-9]+\.?[0-9]{0,2})$/;
    if (preg.test(__val__) === true) {
        return true;
    } else {
        return false;
    }

}


jQuery.validator.addMethod("soloLetrasYEspacios",
    function(value, element) {
        return /^[a-zA-Z ]+$/.test(value);
    },
    "Nada de caracteres especiales, por favor"
);

jQuery.validator.addMethod("ValidarEmail",
    function(value, element) {
        return /^(([^<>()[\]\.,;:\s@\"]+(\.[^<>()[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/.test(value);
    },
    "Ingresa un correo valido"
);

jQuery.validator.addMethod("pwcheck", function(value) {
    return /^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*[@#$%&])(.{8,20}$)/.test(value) // consists of only these

});

jQuery(function() {
    jQuery("#formRegistro").validate({
        rules: {
            nombre: {
                required: true,
                soloLetrasYEspacios: true
            },
            apellido: {
                required: true,
                soloLetrasYEspacios: true
            },
            apodo: {
                required: true,
                soloLetrasYEspacios: true
            },
            image: {
                required: true
            },
            fechaNacimiento: {
                required: true
            },
            
            email: {
                required: true,
                ValidarEmail: true
            },
            password: {
                required: true,
                minlength: 8,
                // pwcheck: true
            },
            inputContra2: {
                required: true,
                equalTo: "#txtPassword"
            },
            InputImg: {
                required: true
            }
        },
        messages: {
            password: {
                minlength: $.format("Necesitamos por lo menos {8} caracteres"),
                
            },
            nombre: {
                soloLetrasYEspacios: $.format("Solo ingresa letras")
            },
            email: {
                ValidarEmail: $.format("Ingresa un correo valido")
            }
        },
        errorPlacement: function(error, element) {
            if (element.is(":radio")) {
                error.appendTo(element.parents('.mensaje1Error'));
            } else if (element.is("#txtPassword")) {
                error.appendTo(element.parents('.mensaje1Error'));
            } else if (element.is("#txtPassword2")) {
                error.appendTo(element.parents('.mensaje1Error'));
            } else { // This is the default behavior 
                error.insertAfter(element);
            }
        }

    });
});