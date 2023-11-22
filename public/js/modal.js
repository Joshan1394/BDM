var modal = document.getElementById("myModal");
var btn = document.getElementById("openModalBtn");
var closeBtn = document.getElementsByClassName("close")[0];

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
    modal.style.display = "none";
    currentStep = 0;
    showStep(currentStep);
}

btn.onclick = function() {
    modal.style.display = "block";
    showStep(currentStep);


}

closeBtn.onclick = closeModal;




// Manejar eventos de los botones de navegación entre pasos
var nextButtons = document.querySelectorAll(".next");
var prevButtons = document.querySelectorAll(".prev");
var submitButton = document.querySelector(".submit");

nextButtons.forEach(function(button) {
    button.addEventListener("click", nextStep);
   
});

prevButtons.forEach(function(button) {
    button.addEventListener("click", prevStep);
   
});

// Enviar el formulario cuando se hace clic en "Enviar"
submitButton.addEventListener("click", function() {
    // Agregar aquí la lógica para enviar el formulario
    // Puedes recopilar los datos de los pasos anteriores y realizar la acción deseada
    // Luego, puedes cerrar el modal
    closeModal();
});

// Obtén el elemento de entrada (input) y los botones de más y menos
const inputCantidad = document.getElementById('cantidad');
const botonMas = document.querySelector('.plus');
const botonMenos = document.querySelector('.minus');

// Agrega un evento al botón de más para aumentar la cantidad
botonMas.addEventListener('click', function () {
    inputCantidad.value = parseInt(inputCantidad.value) + 1;
});

// Agrega un evento al botón de menos para disminuir la cantidad
botonMenos.addEventListener('click', function () {
    const valorActual = parseInt(inputCantidad.value);
    if (valorActual > 1) {
        inputCantidad.value = valorActual - 1;
    }
});
const inputFile = document.getElementById("file");
const video = document.getElementById("video");

    inputFile.addEventListener("change", function() {
        const file = inputFile.files[0];
        const videourl = URL.createObjectURL(file);
        video.setAttribute("src", videourl);

        // No reproduzcas automáticamente el video
        video.autoplay = false;
    });
 