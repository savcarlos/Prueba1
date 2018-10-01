<?php 
	include("conexion.php");

	$idAlumnos=$_POST['idAlumnos'];
	$Nombre=$_POST['Nombre'];
	$Apellido_Paterno=$_POST['Apellido_Paterno'];
	$Apellido_Materno=$_POST['Apellido_Materno'];
	$query="INSERT INTO Alumnos(idAlumnos, Nombre, Apellido_Paterno, Apellido_Materno) VALUES('$idAlumnos', '$Nombre', '$Apellido_Paterno', '$Apellido_Materno')";
	$resultado=$conexion->query($query);
	if($resultado){
		echo "Registro realizado";
	}else{
		echo "Registro fallido";
	}


 ?>