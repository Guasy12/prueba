<?php

require_once("../modelo/modeloPeliculas.php");
$cont = new modeloPeliculas();
$datos = $cont->get_Cartel();

$peliculas = json_encode($datos);
print $peliculas;
?>


