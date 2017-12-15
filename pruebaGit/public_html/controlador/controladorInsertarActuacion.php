<?php

require_once("../modelo/modeloPeliculas.php");
$actor = htmlspecialchars(trim($_POST['Actor']));
$pelicula = htmlspecialchars(trim($_POST['Pelicula']));
$protagonista = htmlspecialchars(trim($_POST['Protagonista']));

$cont = new modeloPeliculas();

$datos = $cont->insertar_actuacion($actor,$pelicula,$protagonista);

print $nombre;
?>


