<?php
//Conexion
$conexion=mysqli_connect("localhost","root","","Escuela");
//verificacion
if($conexion){
   //echo "Conexion exitosa";
}else{
 echo "Conexion fallida";
}

?>
