<?php

require_once("../modelo/modeloPeliculas.php");
$nombre = htmlspecialchars(trim($_POST['Nombre']));
$id = htmlspecialchars(trim($_POST['Id']));

$cont = new modeloPeliculas();

$datos = $cont->modificar_director($nombre,$id);

$nombre = json_encode($datos);
print $nombre;
?>


