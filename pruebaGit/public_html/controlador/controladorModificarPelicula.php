<?php

require_once("../modelo/modeloPeliculas.php");
$nombre = htmlspecialchars(trim($_POST['Nombre']));
$id = htmlspecialchars(trim($_POST['Id']));
$cartel = htmlspecialchars(trim($_POST['Cartel']));
$anio = htmlspecialchars(trim($_POST['Anio']));
$director = htmlspecialchars(trim($_POST['Director']));

$cont = new modeloPeliculas();

$datos = $cont->modificar_pelicula($id,$nombre,$anio,$cartel,$director);

$nombre = json_encode($datos);
print $nombre;
?>


