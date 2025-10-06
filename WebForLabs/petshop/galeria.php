<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

    <link rel="stylesheet" href="css/galeria.css">
</head>

<body>


    <header>
        <!-- Menú principal -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo-mascotas.png" alt="Logo de mascotas" width="100" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                    data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                    aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="acerca.php">Acerca</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="accesorios.php">Accesorios</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="alimentos.php">Alimentos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="medicinas.php">Medicinas</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="carrito.php">Carrito</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="contacto.php">Contactanos</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="preguntasfrecuentes.php">Preguntas frecuentes</a>
                        </li>
                        <li>
                            <a class="nav-link" href="galeria.php">Galeria</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <section id="galeria" class="container">

            <div class="text-center pt-5">
                <h1>Galeria</h1>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="img/galeria1.png" class="img-fluid rounded" alt="Galeria Imagenes">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="img/galeria2.png" class="img-fluid rounded" alt="Galeria Imagenes">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="img/galeria3.png" class="img-fluid rounded" alt="Galeria Imagenes">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="img/galeria4.png" class="img-fluid rounded" alt="Galeria Imagenes">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="img/galeria5.png" class="img-fluid rounded" alt="Galeria Imagenes">
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <img src="img/galeria6.png" class="img-fluid rounded" alt="Galeria Imagenes">
                </div>

            </div>
    </main>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    </script>
</body>

</html>