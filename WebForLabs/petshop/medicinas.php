<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Medicinas para mascotas</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>

    <header>
        <!-- Menú principal -->
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
            <div class="container-fluid">
                <a class="navbar-brand" href="index.php">
                    <img src="img/logo-mascotas.png" alt="Logo de mascotas" width="100" height="100">
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
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
                    </ul>
                    <form class="d-flex" role="search">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success" type="submit">Search</button>
                    </form>
                </div>
            </div>
        </nav>
    </header>

    <main>
        <div class="container text-center">
            <div class="row align-items-start">
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="img/medicina2.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="titulo">MaxBiocide</h5>
                            <p class="card-text">Locion para animlaes para tratar garrapatas, pulgas y bacterias.</p>
                            <a href="carrito.php" class="btn btn-primary">Agregar a carrito 🛒</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="img/medicina1.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="titulo">Medicina Fiprotex</h5>
                            <p class="card-text">Locion para animlaes para tratar las pulgas.</p>
                            <a href="carrito.php" class="btn btn-primary">Agregar a carrito 🛒</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="img/urinarycare-adulto.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="titulo">Urinary Care</h5>
                            <p class="card-text">Formula activa de proteinas y minerales para mantener un sistema urinario estable.</p>
                            <a href="carrito.php" class="btn btn-primary">Agregar a carrito 🛒</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer></footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>