<?php
include('./con_db.php');
$titulo = $_POST['titulo'];
$autor = $_POST['autor'];
$editorial = $_POST['editorial'];
$fecha = $_POST['fecha'];
$cn->query("
insert into libros values (null, '{$titulo}','{$autor}', '{$editorial}','{$fecha}');

");
$cn->close();
header("Location:/biblioteca/registro.html");