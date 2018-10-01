!DOCTYPE html>
<html>
<head>
    <title>Eliminar</title>
</head>
<body>
    <?php
    include("conexion.php");
      $idUsuarios=$_REQUEST['idUsuarios'];
      $query = "DELETE FROM Usuarios WHERE idUsuarios ='$idUsuarios'";
      $result=$conexion->query($query);
?>

<script language="javascript">alert("Usuario eliminado");</script>';
  <script> location.href='tabla_u.php' </script>
</body>
</html>