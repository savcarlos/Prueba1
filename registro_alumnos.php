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
   
    
    <div id="registrar">
            <a href="index.php"</a>Regresar</a>
            <form action="guardar.php" method="POST" class="form-regis">
    </div>
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cabecera">
                
            </div>
 
            <div id="cuerpo">
 
                <form id="form-login" action="#" method="post" >
                    <p><label for="Nombre">Nombre(s):</label></p>
                        <input name="Nombre" type="text" id="Nombre" class="Nombre" placeholder="" autofocus=""/ ></p>
 
                    
                    <p><label for="apellido_pat">Apellido Paterno:</label></p>
                        <input name="Apellido_Paterno" type="text" id="apellido_pat" class="apellido_pat" placeholder="" /></p>


                   <p><label for="apellido_mat">Apellido Materno:</label></p>
                        <input name="Apellido_Materno" type="text" id="apellido_mat" class="apellido_mat" placeholder="" /></p>
 
                    <DIV ALIGN=RIGHT>
                    <p id="bot"><input name="submit" type="submit" id="boton" value="Registrar" class="boton"/></p>
                </DIV>
                </form>
            </div>
 

        </div>

 
    </div>
    <form method="get" action="tabla_1.php"> 
    <input type="submit" value="Mostrar tabla de alumnos"/>
    

 
</body>
 
</html>