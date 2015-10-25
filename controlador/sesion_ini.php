<?php 

session_start();

include '../modelo/entrar.php';

$_SESSION['nombres'] = $nombres;

$_SESSION['apellidos'] = $apellidos;

echo "Bienvenidox".$nombres." ".$apellidos;

?>