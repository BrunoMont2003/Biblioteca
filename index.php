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
                    <a href="registro.html" class="nav-link p-2 m-3 text-white">Registrar Libro</a>
                </li>
            </ul>
        </nav>
        <section class="row d-flex justify-content-center">
            <div class="col-12 p-5 pt-0 col-lg-11 table-responsive">
                <table class="table table-hover table-dark">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Título</th>
                            <th scope="col">Autor</th>
                            <th scope="col">Editorial</th>
                            <th scope="col">Fecha</th>
                            <th scope="col">Detalles</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        include('./con_db.php');


                        $res = $cn->query("select * from libros");
                        while ($row = mysqli_fetch_array($res)) {
                            echo '<tr>';
                            echo '<td scope = "row">' . $row['id'] . '</td>';
                            echo '<td>' . $row['titulo'] . '</td>';
                            echo '<td>' . $row['autor'] . '</td>';
                            echo '<td>' . $row['editorial'] . '</td>';
                            echo '<td>' . $row['fecha'] . '</td>';
                            echo '<td class="text-center"><a href="detalle.php?l=' . $row['id'] . '" class="btn btn-light"><i class="far fa-plus-square"></i></a></td>';
                            echo '</tr>';
                        }

                        ?>
                    </tbody>
                </table>
            </div>
        </section>
    </div>
    <script src="https://kit.fontawesome.com/faff7685bf.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>