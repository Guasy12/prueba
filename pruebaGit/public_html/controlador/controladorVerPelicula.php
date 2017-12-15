<?php


require_once '../modelo/modeloPeliculas.php';
$idPelicula = htmlspecialchars(trim($_POST['idPelicula']));

$cont = new modeloPeliculas();

$datos = $cont->ver_pelicula($idPelicula);

$peliculas = json_encode($datos);
print $peliculas;
?>


