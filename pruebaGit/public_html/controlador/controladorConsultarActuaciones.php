<?php

require_once("../modelo/modeloPeliculas.php");
$cont = new modeloPeliculas();
$datos = $cont->get_actuacion();

$actuacion = json_encode($datos);
print $actuacion;
?>


