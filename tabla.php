

<?php 
	require_once "php/conexion.php";
	$conexion=conexion();

	$sql="CALL sp_mostrar_datos";
	$result=mysqli_query($conexion,$sql);
 ?>

<span class="btn btn-raised btn-primary btn-lg" data-toggle="modal" data-target="#addmodal">
			<span class="fa fa-plus-circle"></span> agrega nuevo
		</span>

<table id="example" class="table table-sm table-inverse table-bordered">
		<tr style="font-weight: bold" >
			<td>Id juego</td>
			<td>Nombre</td>
			<td>Año</td>
			<td>Juego</td>
			<td style="text-align: center;">Editar</td>
			<td style="text-align: center;">Eliminar</td>
		</tr>
	<?php 

		while ($ver=mysqli_fetch_row($result)):
	 ?>
		<tr>
			<td><?php echo $ver[0]; ?></td>
			<td><?php echo $ver[1]; ?></td>
			<td><?php echo $ver[2]; ?></td>
			<td><?php echo $ver[3]; ?></td>
			<td style="text-align: center;">
				<span class="btn btn-raised btn-warning btn-xs" 
				onclick="obtenDatos('<?php echo $ver[0]; ?>')" data-toggle="modal" data-target="#updatemodal">
					<span class="fa fa-pencil-square-o"></span> Editar
				</span>
			</td>
			<td style="text-align: center;">
				<span class="btn btn-raised btn-danger btn-xs" 
					onclick="elimina('<?php echo $ver[0]; ?>')">
					<span class="fa fa-trash"></span> Eliminar
				</span>
			</td>
		</tr>

		<?php 
			endwhile;
		 ?>
</table>

