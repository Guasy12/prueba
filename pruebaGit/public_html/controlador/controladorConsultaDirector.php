<?php

require_once("../modelo/modeloPeliculas.php");
$cont = new modeloPeliculas();
$datos = $cont->get_director();

$directores = json_encode($datos);
print $directores;
?>


