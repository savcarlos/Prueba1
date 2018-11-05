<!DOCTYPE HTML>
<html>
<head>
 <meta charset="utf-8">
 <title>TechJunkGigs</title>
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 <script type="text/javascript">
 google.load("visualization", "1", {packages:["corechart"]});
 google.setOnLoadCallback(drawChart);
 function drawChart() {
 var data = google.visualization.arrayToDataTable([
  ['Nombre', 'Cantidad nombres'],

 <?php 
			include("conexion.php");
      $query = "SELECT count(Nombre) from Alumnos";

			 $result=$conexion->query($query);
       $row = mysqli_fetch_array($result);
       echo "['Nombre',".$row['count(Nombre)']."],";
        //while($row = mysqli_fetch_array($result)){


          
			 //echo "['".$row ['count(Nombre)']."',".$row ['count(Apellido_Paterno)']."],";
			 //}
			 ?> 
 
 ]);

 var options = {
 title: 'Numero de estudiantes',
  pieHole: 0.5,
          pieSliceTextStyle: {
            color: 'black',
          },
          legend: 'none'
 };
 var chart = new google.visualization.PieChart(document.getElementById("columnchart12"));
 chart.draw(data,options);
 }
	
    </script>

</head>
<body>
 <div class="container-fluid">
 <div id="columnchart12" style="width: 100%; height: 500px;"></div>
 </div>

 <a href="tabla_1.php"</a>Regresar</a>
</body>
</html>
