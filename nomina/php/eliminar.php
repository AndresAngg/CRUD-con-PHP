<<?php 

$ide = $_POST['id'];


$conexion = mysqli_connect("localhost:3306","root","","db_escuela");

if ($conexion) {
	$eliminar = "DELETE FROM tb_estudiante WHERE identi = '{$ide}'";
	$resultado = mysqli_query($conexion,$eliminar);
	header("Location: http://localhost/nomina/php/account.php");
}
 ?>	