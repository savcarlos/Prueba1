!DOCTYPE html>
<html>
  <head>
    <title>Primaria Benito Juárez</title>
  </head>
  <body>
    
    <?php 
     $idAlumnos=$_REQUEST['idAlumnos'];
  include("conexion.php");
  $query="SELECT * FROM Alumnos WHERE idAlumnos='$idAlumnos'";
  $result=$conexion->query($query);
  $mostrar = mysqli_fetch_array($result);
 ?>
      <form action="guardar_moda.php?idAlumnos=<?php echo $mostrar['idAlumnos']; ?>" method="POST" class="form-regis">
        <h2 class="titulo">Modificación de Alumno</h2>

    <div class="contenedor-input">
      
        <input type="text" name="Nombre" placeholder="Nombre(s)" class="input-100" value="<?php echo $mostrar['Nombre']; ?>" required>
        <input type="text" name="Apellido_Paterno" placeholder="Apellido Paterno" class="input-48" value="<?php echo $mostrar['Apellido_Paterno'];?>" required>
        <input type="text" name="Apellido_Materno" placeholder="Apellido Materno" class="input-48" value="<?php echo $mostrar['Apellido_Materno'];?>" required>
        
        
        <br>
        <br>
        <input type="submit" value="Enviar" class="boton">
      </form>
    </div>
  </body>
</html>