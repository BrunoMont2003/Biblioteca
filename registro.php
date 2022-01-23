<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Catálogo de Libros</title>
</head>

<body>
    <div class="container-fluid bg-dark main">
        <nav class="row navbar p-5 pd-0">
            <a href="index.php" class="text-decoration-none col-2 d-flex flex-column align-items-center">
                <img src="img/logo.jpg" alt="logo" class="img-fluid logo" />
                <p class="mt-3 logo-title">libros.com</p>
            </a>
            <ul class="navbar-nav flex-row col-10 d-flex justify-content-end">
                <li class="nav-item ">
                    <a href="index.php" class="nav-link p-2 m-3 text-white">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a href="registro.php" class="nav-link nav-link-active p-2 m-3 text-white">Registrar Libro</a>
                </li>
            </ul>
        </nav>
        <section class="row d-lg-flex p-5 justify-content-center">
            <div class="col-10 col-lg-6">
                <h2 class="text-white mb-4">Registrar un libro</h2>
                <form class="row g-3 needs-validation text-white" id="formulario" novalidate>
                    <div class="col-md-6">
                        <label for="titulo" class="form-label">Titulo</label>
                        <input type="text" class="form-control" id="titulo" name="titulo" required>
                        <div class="invalid-feedback">
                            Please enter a valid title for the book!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="autor" class="form-label">Autor</label>
                        <input type="text" class="form-control" id="autor" name="autor" required>
                        <div class="invalid-feedback">
                            Please enter a valid name of the author!
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="editorial" class="form-label">Editorial</label>
                        <input type="text" class="form-control" id="editorial" name="editorial" required>
                        <div class="invalid-feedback">
                            Please provide a valid Editorial.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <label for="fecha" class="form-label">Fecha de Publicación</label>
                        <input type="date" class="form-control" id="fecha" name="fecha" required>
                        <div class="invalid-feedback">
                            Please select a valid date.
                        </div>
                    </div>
                    <div class="col-md-6">
                        <input class="btn btn-primary" type="submit" value="Registrar" />
                    </div>
                </form>
            </div>
        </section>
    </div>
    <script src="app.js"></script>
    <script src="https://kit.fontawesome.com/faff7685bf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>