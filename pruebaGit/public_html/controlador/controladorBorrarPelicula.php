<?php

require_once '../modelo/modeloPeliculas.php';
$id = $_POST['data'];

$cont = new modeloPeliculas();
$cont->borrar_pelicula($id);
print($id);
?>