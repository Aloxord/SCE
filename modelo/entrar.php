<?php 

include 'conexionbd.php';

$usuario = $_POST['id_usu'];
$pass = $_POST['pass'];

$query = "select * from admin;";

$resultado = mysqli_query($conexion,$query) or die(mysql_error());

while ($row = mysqli_fetch_assoc($resultado)) {
	if ($row['id_usu'] == $usuario and $row['pass'] == $pass) {
			session_start();
			$_SESSION['nombres'] = $row['nombres'];
			$_SESSION['apellidos'] = $row['apellidos'];
			header("location:../index.php");
		
	}else{
		header("location:../index.php");
	}
}

 ?>