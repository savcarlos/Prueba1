!DOCTYPE html>
<html>
<head>
    <title>Eliminar</title>
</head>
<body>
    <?php
    include("conexion.php");
      $idAlumnos=$_REQUEST['idAlumnos'];
      $query = "DELETE FROM Alumnos WHERE idAlumnos ='$idAlumnos'";
      $result=$conexion->query($query);
?>

<script language="javascript">alert("Alumno eliminado");</script>';
  <script> location.href='tabla_1.php' </script>
</body>
</html>