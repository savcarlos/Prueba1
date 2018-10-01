<?php
//include database configuration file
include 'conexion.php';
$query = "SELECT * FROM Alumnos ORDER BY nombre DESC";
$result = mysqli_query($conexion, $query);
header('Content-Type: text/csv; charset=utf-8');
header('Content-Disposition: attachment; filename=Users.csv');
$output = fopen('php://output', 'w');
fputcsv($output, array('Nombre', 'Apellido_Paterno', 'Apellido_Materno'));
while($row=mysqli_fetch_assoc($result))
{
    fputcsv($output,$row);
}
fclose($output);
?>
