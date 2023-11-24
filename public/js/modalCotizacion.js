var modalCotizacion = document.getElementById("modalCotizacion");
var btnCotizacion = document.getElementById("openCotizacionBtn");
var closeBtnCotizacion = document.getElementsByClassName("closeCotizacion")[0];

// Obtener todos los pasos del formulario
var formSteps = document.querySelectorAll(".form-step");
var currentStep = 0;

// Función para mostrar el paso actual
function showStep(step) {
    formSteps.forEach(function(stepElement) {
        stepElement.style.display = "none";
    });
    formSteps[step].style.display = "block";
}

// Función para avanzar al siguiente paso
function nextStep() {
    if (currentStep < formSteps.length - 1) {
        currentStep++;
        showStep(currentStep);
    }
}

// Función para retroceder al paso anterior
function prevStep() {
    if (currentStep > 0) {
        currentStep--;
        showStep(currentStep);
    }
}

// Función para cerrar el modal y no afectar el scroll del body
function closeModal() {
    modalCotizacion.style.display = "none";
    currentStep = 0;
    showStep(currentStep);
}

btnCotizacion.onclick = function() {
    modalCotizacion.style.display = "block";
    showStep(currentStep);


}

closeBtnCotizacion.onclick = closeModal;




// Manejar eventos de los botones de navegación entre pasos
var nextButtonsCotizacion = document.querySelectorAll(".next");
var prevButtonsCotizacion = document.querySelectorAll(".prev");
var submitButtonCotizacion = document.querySelector(".submit");

nextButtonsCotizacion.forEach(function(button) {
    button.addEventListener("click", nextStep);
   
});

prevButtonsCotizacion.forEach(function(button) {
    button.addEventListener("click", prevStep);
   
});

// Enviar el formulario cuando se hace clic en "Enviar"
submitButtonCotizacion.addEventListener("click", function() {
    
    closeModal();
});

// Obtén el elemento de entrada (input) y los botones de más y menos
const inputCantidadCat = document.getElementById('cantidadCotizacion');
const botonMasCat = document.querySelector('.pluscategorias');
const botonMenosCat = document.querySelector('.minucategorias');

// Agrega un evento al botón de más para aumentar la cantidad
botonMasCat.addEventListener('click', function () {
    inputCantidadCat.value = parseInt(inputCantidadCat.value) + 1;
});

// Agrega un evento al botón de menos para disminuir la cantidad
botonMenosCat.addEventListener('click', function () {
    const valorActualCat = parseInt(inputCantidadCat.value);
    if (valorActualCat > 1) {
        inputCantidadCat.value = valorActualCat - 1;
    }
});
const inputFileCotizacion = document.getElementById("file");
const videoCotizacion = document.getElementById("video");

    inputFileCotizacion.addEventListener("change", function() {
        const fileCotizacion = inputFile.files[0];
        const videourlCotizacion = URL.createObjectURL(fileCotizacion);
        videoCotizacion.setAttribute("src", videourlCotizacion);

        // No reproduzcas automáticamente el video
        videoCotizacion.autoplay = false;
    });
 