<?php 

	require_once "conexion.php";

	$conexion=conexion();

	$id_juego=$_POST['id_juego'];
	$nombrejU=$_POST['nombrejU'];
	$aniojU=$_POST['aniojU'];
	$empresajU=$_POST['empresajU'];

	$sql="CALL sp_actualizar_datos('$nombrejU',
									'$aniojU',
									'$empresajU',
									'$id_juego')";
									
	echo mysqli_query($conexion,$sql);
 ?>