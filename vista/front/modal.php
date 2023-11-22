<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" type="text/css" href="/BDM/public/css/modal_style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">

</head>

<body>



    <button id="openModalBtn">Agregar producto</button>

    <div id="myModal" class="modal ">
        <div class="modal-content w-50">
            <span class="close">&times;</span>
            <div class="form-step" data-step="1">
                <h2>Paso 1: Informacion general</h2>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Description</label>
                        <textarea class="form-control" placeholder="Leave a comment here"
                            id="floatingTextarea"></textarea>
                    </div>

                    <button class="btn btn-primary next">Siguiente</button>
                </form>

            </div>
            <div class="form-step" data-step="2">
                <h2>Paso 2:Producto</h2>
                <form>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Precio individual</label>
                        <input type="text" class="form-control w-50" id="exampleInputEmail1" placeholder="$0.00">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Cantidad</label>
                        <div class="number">
                            <span class="minus">-</span>
                            <input type="text" id="cantidad" value="1" />
                            <span class="plus">+</span>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Cotización/vender</label>
                        <select class="form-select w-50" aria-label="Default select example">
                            <option selected>Opciones</option>
                            <option value="1">Cotización</option>
                            <option value="2">Vender</option>
                        </select>
                    </div>

                </form>
                <button class="btn btn-primary prev">Anterior</button> 
                <button class="btn btn-primary next">Siguiente</button>

            </div>
            <div class="form-step" data-step="3">
                <h2>Paso 3: Imágenes</h2>
                <form>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Imagenes (1 o más)</label>
                        <input class="form-control" type="file" id="formFileMultiple" accept="image/*" multiple>
                    </div>
                    <div id="carouselExampleAutoplaying" class="carousel slide mt-5" data-bs-ride="carousel">
                        <div class="carousel-inner">
                            <!-- Las imágenes seleccionadas se mostrarán aquí -->
                        </div>
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleAutoplaying"
                            data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                    <button class="btn btn-primary prev mt-5">Anterior</button>
                    <button class="btn btn-primary next mt-5">Siguiente</button>
                </form>
            </div>
            <div class="form-step" data-step="3">
                <h2>Paso 3: Video</h2>
                <form>
                    <div class="mb-3">
                        <label for="formFileMultiple" class="form-label">Video</label>
                        <input class="form-control" id="file" type="file"
                            accept="video/mp4,video/mkv, video/x-m4v,video/*">
                    </div>
                    <div class="mb-3 w-75">
                        <video class="mb-3 w-100 h-100" id="video" controls></video>
                    </div>
                    <button class="btn btn-primary prev">Anterior</button>
                    <button class="btn btn-primary submit">Enviar</button>
                </form>
            </div>
        </div>
    </div>

    <script src="/BDM/public/js/modal.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm"
        crossorigin="anonymous"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const carouselInner = document.querySelector(".carousel-inner");
            const inputFoto = document.getElementById("formFileMultiple");

            inputFoto.addEventListener("change", function () {
                // Borra las imágenes anteriores del carrusel
                carouselInner.innerHTML = "";

                // Obtiene la lista de archivos seleccionados
                const files = inputFoto.files;

                // Verifica que al menos haya una imagen seleccionada
                if (files.length > 0) {
                    for (let i = 0; i < files.length; i++) {
                        const file = files[i];

                        // Verifica si el archivo es una imagen
                        if (file.type.startsWith("image/")) {
                            const carouselItem = document.createElement("div");
                            carouselItem.classList.add("carousel-item");

                            const img = document.createElement("img");
                            img.classList.add("d-block", "w-100");
                            img.src = URL.createObjectURL(file);

                            // La primera imagen se marca como activa
                            if (i === 0) {
                                carouselItem.classList.add("active");
                            }

                            carouselItem.appendChild(img);
                            carouselInner.appendChild(carouselItem);
                        }
                    }

                    // Inicializa el carrusel de Bootstrap
                    const carousel = new bootstrap.Carousel(document.getElementById("carouselExampleAutoplaying"));
                } else {
                    alert("Por favor, seleccione al menos una imagen.");
                }
            });
        });
    </script>

</body>

</html>