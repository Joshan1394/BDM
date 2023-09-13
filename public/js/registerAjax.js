const formulario  =  document.getElementById('formRegistro');

formulario.addEventListener('submit', function(event) {

    event.preventDefault();

    $.ajax({
        type: "POST",
        async: true,
        dataType: "json",
        data:new FormData(formulario),
        url: "php/registerApi.php",
        cache: false,
            contentType: false,
            processData: false
    }).done(function(response) {

        const name  =  $('#inputName').next('span.text-danger');
        const lastname  =  $('#inputLastName').next('span.text-danger');
        const date  =  $('#inputBirthDate').next('span.text-danger');
        const email  =  $('#textCE').next('span.text-danger');
        const password  =  $('txtPassword').next('span.text-danger');
        const gender  =  $('#flexRadioDefault').next('span.text-danger');
        const rol  =  $('#Rol').next('span.text-danger');

        name.text("");
        lastname.text("");
        date.text("");
        email.text("");
        password.text("");
        gender.text("");
        rol.text("");

        if(response.data.name){
            name.text(response.data.name)
        }

        if(response.data.lastname){
            lastname.text(response.data.lastname)
        }

        if(response.data.date){
            date.text(response.data.date)
        }

        if(response.data.email){
            email.text(response.data.email)
        }

        if(response.data.password){
            password.text(response.data.password)
        }

        if(response.data.gender){
            gender.text(response.data.gender)
        }

        if(response.data.rol){
            rol.text(response.data.rol)
        }

    }).fail(function(response) {

    });

});