<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seccion de alimentos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
</head>

<body>
    <!-- Cabecera de la página -->
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
                        <li>
                            <a class="nav-link" href="galeria.php">Galeria</a>
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
                        <img src="img/balance-adulto.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="titulo">Balance Adulto</h5>
                            <p class="card-text">Nutrición premium para perros adultos. Cerdo y pollo con Omega 3 & 6.</p>
                            <a href="carrito.php" class="btn btn-primary">Agregar a carrito 🛒</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="img/choice-adulto.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="titulo">Choice Adulto</h5>
                            <p class="card-text">Alimento balanceado para perros adultos con las vitaminas y los minerales que necesita.</p>
                            <a href="carrito.php" class="btn btn-primary">Agregar a carrito 🛒</a>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card h-100" style="width: 18rem;">
                        <img src="img/choice-cachorro.png" class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="titulo">Choice Cachorro</h5>
                            <p class="card-text">Alimento balanceado para gatos cachorros las con vitaminas y los minerales que necesita.</p>
                            <a href="carrito.php" class="btn btn-primary">Agregar a carrito 🛒</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>

    </main>


    <!-- Seccion de mi main -->
    <?php include "shared/footer.php"; ?>