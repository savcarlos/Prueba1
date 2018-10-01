<?php
session_start();
$correo=$_POST['correo'];
$password=$_POST['password'];
include("conexion.php");
$proceso = $conexion->query("SELECT  * FROM adm WHERE correo='$correo' AND password='$password'");
if($result = mysqli_fetch_array($proceso)){
  $_SESSION['u_usuario']=$correo;
  header("Location: registro_usuarios.php");
}
else{
header("Location: index.php");
}
?>