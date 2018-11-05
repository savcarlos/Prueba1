<?php
    Include("conexion.php");

?>


<!DOCTYPE html>
<html>
<head>
	<title>mostrar datos</title>
</head>
<body>
	
<br>

	<table border="1" >
		<tr>
			<td>idUsuarios</td>
			<td>Nombre</td>
			<td>Apellido_Paterno</td>
			<td>Apellido_Materno</td>
			<td>Correo</td>
			<td>Opciones</td>
			

				
		</tr>

		<?php 
		$sql="SELECT * from Usuarios";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idUsuarios'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Apellido_Paterno'] ?></td>
			<td><?php echo $mostrar['Apellido_Materno'] ?></td>
			<td><?php echo $mostrar['Correo'] ?></td>
			<td><a href="modificar.php?idUsuarios=<?php echo $mostrar["idUsuarios"]; ?>">Editar</a></td>
			<td><a href="eliminar.php?idUsuarios=<?php echo $mostrar["idUsuarios"]; ?>">Eliminar</a></td>
			
		</tr>

	<?php 
	}
	 ?>
	</table>
	<form method="get" action="exp.php"> 
    <input type="submit" value="Exportar csv"/>
	</form>

    <form method="get" action="importar_CSV.php"> 
    <input type="submit" value="Impotar csv"/>
	</form>

	<a href="registro_usuarios.php"</a>Regresar</a>

</body>
</html>