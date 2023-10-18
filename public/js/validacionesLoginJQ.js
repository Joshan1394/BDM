jQuery(function() {
    jQuery("#formulario_is").validate({
        rules: {
            Usuario: {
                required: true,
                // soloLetrasYEspacios: true
            },
            Contra1: {
                required: true,
                // soloLetrasYEspacios: true
            },
        },
        messages: {
            Usuario: {
                required: "El campo Nombre usuario es requerido."
            },
            Contra1: {
                required: "El campo Contraseña es requerido."
            }
        }
    });

    // Regla personalizada para permitir solo letras y espacios
    jQuery.validator.addMethod("soloLetrasYEspacios", function(value, element) {
        return this.optional(element) || /^[a-zA-Z\s]+$/.test(value);
    }, "Ingrese solo letras y espacios.");
});