<?php

require_once("../modelo/modeloPeliculas.php");
$nombre = htmlspecialchars(trim($_POST['Nombre']));

$cont = new modeloPeliculas();

$datos = $cont->insertar_director($nombre);

$nombre = json_encode($datos);
print $nombre;
?>


