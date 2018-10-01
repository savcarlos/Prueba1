<?php
	Include("conexion.php");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Formulario</title>
    <meta charset="utf-8">
    <link type="text/css" href="./../css/style.css" rel="stylesheet" />
</head>
 
<body>
   <DIV ALIGN=CENTER>
   <h1>Bienvenido a Primaria Benito Juarez</h1>
 	</DIV>
   <form method="get" action="registro_usuarios.php"> 
   	<input type="submit" value="Registar usuarios"/>
   </form>

   <form method="get" action="registro_alumnos.php"> 
   	<input type="submit" value="Registar alumnos"/>
   </form>

   <form method="get" action="login.php"> 
   	<input type="submit" value="LogIn"/>
   </form>
 
</body>
 
</html>

