<?php

require_once '../modelo/modeloPeliculas.php';
$id = $_POST['data'];

$cont = new modeloPeliculas();
$cont->borrar_director($id);
print($id);
?>