<?php
include("conexion.php");
$idAlumnos=$_REQUEST['idAlumnos'];
$Nombre=$_POST['Nombre'];
$Apellido_Paterno=$_POST['Apellido_Paterno'];
$Apellido_Materno=$_POST['Apellido_Materno'];


$query="UPDATE Alumnos SET Nombre='$Nombre',Apellido_Paterno='$Apellido_Paterno', Apellido_Materno='$Apellido_Materno' WHERE idAlumnos='$idAlumnos'";
$resultado=$conexion->query($query);		

if ($resultado) {
	print '<script language="JavaScript">'; 
print 'alert("Registro realizado");'; 
print '</script>'; 
header('Location:tabla_1.php');

}else{
	echo "Registro fallido";
}
?>