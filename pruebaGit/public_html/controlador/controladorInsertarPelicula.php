<?php

require_once("../modelo/modeloPeliculas.php");
$cartel = htmlspecialchars(trim($_POST['Cartel']));
$nombre = htmlspecialchars(trim($_POST['Nombre']));
$anio = htmlspecialchars(trim($_POST['Anio']));
$director = htmlspecialchars(trim($_POST['Director']));

$cont = new modeloPeliculas();

$datos = $cont->insertar_pelicula($nombre,$anio,$director,$cartel);

print $nombre;
?>


