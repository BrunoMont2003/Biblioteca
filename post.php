<?php
$cn = new mysqli("localhost", "root", "", "catalogo");
$cn->query("insert into libros values
(null,'" . $_POST['titulo'] . "','" . $_POST['autor'] . "', '" . $_POST['editorial'] . "', '" . $_POST['fecha'] . "' )
");
echo 'grabados';
$cn->close();