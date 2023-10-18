document.addEventListener("DOMContentLoaded", function() {
    var formRegistro = document.getElementById("formulario_is");
    var usuarioVal = document.getElementById("usuario");
    var passVal = document.getElementById("password");

    formRegistro.addEventListener("submit", function(event) {
        event.preventDefault();
        validarIngreso();
    });

    function validarIngreso() {
        var usuario = usuarioVal.value.trim();
        var contrasena = passVal.value.trim();

        if (usuario === "") {
            mostrarError(usuarioVal);
        } else {
            ocultarError(usuarioVal);
        }

        if (contrasena === "") {
            mostrarError(passVal);
        } else {
            ocultarError(passVal);
        }

       
    }

    function mostrarError(elemento) {
        elemento.classList.add("error");
    }

    function ocultarError(elemento) {
        elemento.classList.remove("error");
    }
});