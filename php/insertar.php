<?php 

	require_once "conexion.php";

	$conexion=conexion();

	$nombre=$_POST['nombrej'];
	$anio=$_POST['anioj'];
	$empresa=$_POST['empresaj'];

	$sql="CALL sp_insertar_datos('$nombre','$anio','$empresa')";

	echo mysqli_query($conexion,$sql);

 ?>