<!DOCTYPE html>
<html>
  <head>
    <title>Primaria Benito Juárez</title>
  </head>
  <body>
    
    <?php 
     $idUsuarios=$_REQUEST['idUsuarios'];
  include("conexion.php");
  $query="SELECT * FROM Usuarios WHERE idUsuarios='$idUsuarios'";
  $result=$conexion->query($query);
  $mostrar = mysqli_fetch_array($result);
 ?>
      <form action="guardar_mod.php?idUsuarios=<?php echo $mostrar['idUsuarios']; ?>" method="POST" class="form-regis">
        <h2 class="titulo">Modificación de Usuario</h2>

    <div class="contenedor-input">
      
        <input type="text" name="Nombre" placeholder="Nombre(s)" class="input-100" value="<?php echo $mostrar['Nombre']; ?>" required>
        <input type="text" name="Apellido_Paterno" placeholder="Apellido Paterno" class="input-48" value="<?php echo $mostrar['Apellido_Paterno'];?>" required>
        <input type="text" name="Apellido_Materno" placeholder="Apellido Materno" class="input-48" value="<?php echo $mostrar['Apellido_Materno'];?>" required>
        <input type="text" name="Correo" class="input-48" placeholder="Correo" value="<?php echo $mostrar['Correo'];?>" required>
        
        
        <br>
        <br>
        <input type="submit" value="Enviar" class="boton">
      </form>
    </div>
  </body>
</html>