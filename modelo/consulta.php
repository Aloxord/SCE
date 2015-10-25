<?php 
	header('Content-Type: application/json');
	include 'conexionbd.php';

	if (isset($_POST['cedula'])) {

		$query = "select * from estudiante where cod_est = ".$_POST['cedula'].";";

		$resultado = mysqli_query($conexion,$query);

		$row = mysqli_fetch_assoc($resultado);
			
		echo json_encode($row);
			
	}
	elseif(isset($_POST['apellido'])){

		$_POST['apellido'];

		$query = "select * from estudiante where apellido1 = '".$_POST['apellido']."';";

		$resultado = mysqli_query($conexion,$query);
		$it = 0;
		while($row = mysqli_fetch_assoc($resultado)){
			$res[$it] = $row;
			$it++;
		}
		echo json_encode($res);
	}
 ?>