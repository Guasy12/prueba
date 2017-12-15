<?php

require_once("../modelo/modeloPeliculas.php");
$cont = new modeloPeliculas();
$datos = $cont->get_actores();

$actores = json_encode($datos);
print $actores;
?>


