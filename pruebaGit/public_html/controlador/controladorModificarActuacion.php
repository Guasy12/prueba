<?php

require_once("../modelo/modeloPeliculas.php");
$protagonista = htmlspecialchars(trim($_POST['Protagonista']));
$id = htmlspecialchars(trim($_POST['Id']));

$cont = new modeloPeliculas();

$datos = $cont->modificar_actuacion($protagonista,$id);

$nombre = json_encode($datos);
print $nombre;
?>


