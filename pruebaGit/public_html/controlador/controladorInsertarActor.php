<?php

require_once("../modelo/modeloPeliculas.php");
$nombre = htmlspecialchars(trim($_POST['Nombre']));

$cont = new modeloPeliculas();

$datos = $cont->insertar_actor($nombre);

$nombre = json_encode($datos);
print $nombre;
?>


