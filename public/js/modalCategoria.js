var modalCategoria = document.getElementById("categoriasModal");
var btnCategoria = document.getElementById("OpenCategoriasBtn");
var categoriaCloseBtn = document.getElementsByClassName("closeCategoria")[0];



// Función para cerrar el modal y no afectar el scroll del body
function closeModalCategoria() {
    modalCategoria.style.display = "none";
    currentStep = 0;
    showStep(currentStep);
}

btnCategoria.onclick = function() {
    modalCategoria.style.display = "block";
    showStep(currentStep);


}

categoriaCloseBtn.onclick = closeModalCategoria;







 