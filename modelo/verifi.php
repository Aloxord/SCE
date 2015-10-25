<?php 
include 'conexionbd.php';


$ci = $_POST['cedula'];

$query = "select * from estudiante;";

$resultado = mysqli_query($conexion,$query);

while ($row = mysqli_fetch_assoc($resultado)) {
	if ($row['cod_est']==$ci) {
		echo 1;
}
}

 ?>