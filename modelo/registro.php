<?php 

include 'conexionbd.php';

$nombre = $_POST['nombre'];
$apellido1 = $_POST['apellido1'];
$apellido2 = $_POST['apellido2'];
$ci = $_POST['cedula'];
$fecha_nac = $_POST['fecha'];
$lugar_nac = $_POST['lugar'];


/*$query = "select * from estudiante;";*/


$query = "insert into estudiante(cod_est,nombres,apellido1,apellido2,fecha_nac,lugar_nac) values ('".$ci."','".$nombre."','".$apellido1."','".$apellido2."','".$fecha_nac."','".$lugar_nac."');";

if(mysqli_query($conexion,$query)){
	echo "1";
}else{
	echo "0";
}

 ?>