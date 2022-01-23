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
                    <a href="index.php" class="nav-link p-2 m-3 text-white nav-link-active">Catálogo</a>
                </li>
                <li class="nav-item">
                    <a href="registro.php" class="nav-link p-2 m-3 text-white">Registrar Libro</a>
                </li>
            </ul>
        </nav>
        <section class="row d-lg-flex p-5 justify-content-center">
            <div class="col-6 col-lg-4">
                <img src="img/<?php echo $_GET['l'] ?>.jpg" alt="<?php echo $_GET['l'] ?>" class="img-fluid">
            </div>
            <div class="col-6 text-white col-lg-4">
                <?php
                $cn = new mysqli("localhost", "root", "", "catalogo");
                $res = $cn->query("select * from libros where id=" . $_GET['l']);
                while ($row = mysqli_fetch_row($res)) {
                    echo '<h2 class=" mb-4">' . $row[1] . '</h2>';
                    echo '<p class=" mb-4">Escrito por ' . $row[2] . '</p>';
                    echo '<p class=" mb-4">Editorial ' . $row[3] . '</p>';
                    echo '<p class=" mb-4">Publicado el ' . $row[4] . '</p>';
                }
                ?>
                <a href="index.php" class="btn btn-outline-warning">Volver</a>
            </div>
        </section>
    </div>
    <script src="https://kit.fontawesome.com/faff7685bf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>