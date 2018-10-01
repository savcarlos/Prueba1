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
            <form action="guardar_usuarios.php" method="POST" class="form-regis">
    </div>
    <div id="envoltura">
        <div id="contenedor">
 
            <div id="cabecera">
                
            </div>
 
            <div id="cuerpo">
 
                <form id="form-login" action="#" method="post" >
                    <p><label for="nombre">Nombre(s):</label></p>
                        <input name="Nombre" type="text" placeholder="" autofocus=""/ ></p>
 
                    
                    <p><label for="apellido_pat">Apellido Paterno:</label></p>
                       <input name="Apellido_Paterno" type="text" id="apellido_pat" class="apellido_pat" placeholder="" /></p>


                   <p><label for="apellido_mat">Apellido Materno:</label></p>
                        <input name="Apellido_Materno" type="text" id="apellido_mat" class="apellido_mat" placeholder="" /></p>
 
                    <p><label for="correo">Correo:</label></p>
                        <input name="Correo" type="text"  id="correo" class="correo" placeholder="ejemplo@ejemplo.com" /></p>
 
                    <p><label for="pass">Contraseña:</label></p>
                        <input name="Password" type="password"  id="pass" class="correo" placeholder="******"/ ></p>
 
                    <p><label for="repass">Repetir Cotraseña:</label></p>
                        <input name="Rep_password" type="password" id="repass" class="repass" placeholder="******" /></p>
 
                    
                    <p id="bot"><input name="submit" type="submit" id="boton" value="Registrar" class="boton"/></p>

                </form>
            </div>
 

        </div>
 
    </div>
    <form method="get" action="tabla_u.php"> 
    <input type="submit" value="Mostrar tabla de usuarios"/>
 
</body>
 
</html>