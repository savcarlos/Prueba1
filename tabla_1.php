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
			<td>idAlumnos</td>
			<td>Nombre</td>
			<td>Apellido_Paterno</td>
			<td>Apellido_Materno</td>
			<td>Opciones</td>
				
		</tr>

		<?php 
		$sql="SELECT * from Alumnos";
		$result=mysqli_query($conexion,$sql);

		while($mostrar=mysqli_fetch_array($result)){
		 ?>

		<tr>
			<td><?php echo $mostrar['idAlumnos'] ?></td>
			<td><?php echo $mostrar['Nombre'] ?></td>
			<td><?php echo $mostrar['Apellido_Paterno'] ?></td>
			<td><?php echo $mostrar['Apellido_Materno'] ?></td>
			<td><a href="mod_a.php?idAlumnos=<?php echo $mostrar["idAlumnos"]; ?>">Editar</a></td>
			<td><a href="eliminar_a.php?idAlumnos=<?php echo $mostrar["idAlumnos"]; ?>">Eliminar</a></td>
			
		</tr>

	<?php 
	}
	 ?>
	</table>
	<form method="get" action="exp_u.php"> 
    <input type="submit" value="csv"/>


	<a href="registro_alumnos.php"</a>Regresar</a>

</body>
</html>