<?php
include("conexion.php");

$Nombre=$_POST['Nombre'];
$Apellido_Paterno=$_POST['Apellido_Paterno'];
$Apellido_Materno=$_POST['Apellido_Materno'];
$Correo=$_POST['Correo'];
$Password=$_POST['Password'];
$Rep_password=$_POST['Rep_password'];

$query="INSERT INTO Usuarios(Nombre, Apellido_Paterno, Apellido_Materno, Correo, Password, Rep_password) VALUES('$Nombre','$Apellido_Paterno','$Apellido_Materno','$Correo','$Password','$Rep_password')";
$resultado=$conexion->query($query);

if ($resultado) {
    echo "Registro realizado";
}else{
    echo "Registro fallido";
}
?>