<?php
include("conexion.php");
$idUsuarios=$_REQUEST['idUsuarios'];
$Nombre=$_POST['Nombre'];
$Apellido_Paterno=$_POST['Apellido_Paterno'];
$Apellido_Materno=$_POST['Apellido_Materno'];
$Correo=$_POST['Correo'];
$Password=$_POST['Password'];
$Rep_password=$_POST['Rep_password'];

$query="UPDATE Usuarios SET Nombre='$Nombre',Apellido_Paterno='$Apellido_Paterno', Apellido_Materno='$Apellido_Materno',Correo='$Correo' WHERE idUsuarios='$idUsuarios'";
$resultado=$conexion->query($query);		

if ($resultado) {
	print '<script language="JavaScript">'; 
print 'alert("Registro realizado");'; 
print '</script>'; 
header('Location:tabla_u.php');

}else{
	echo "Registro fallido";
}
?>