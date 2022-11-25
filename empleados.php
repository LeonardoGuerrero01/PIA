<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost","root","","zoologico_2067278") or die ("falla al conectar");
$query = $con -> query (" SELECT * FROM empleados");

echo "<body background=prove.jpg >";
echo "<h1 align=center>CONSULTA EMPLEADOS</h1><br>";
echo "<center><table border='1'>
<tr>
<th>ID</th>
<th>NOMBRE_EMP</th>
<th>ANIMAL_ASIG</th>
<th>HORARIO</th>
<th>TURNO</th>

</tr>";
$cont = 0;
while($row = mysqli_fetch_array($query))
{
echo"<tr>";
echo"<td>" . $row['ID_EMPLEADO'] . "</td>";
echo"<td>" . $row['NOMBRE_EMPLEADO'] . "</td>";
echo"<td>" . $row['ANIMAL_ASIGNADO'] . "</td>";
echo"<td>" . $row['HORARIO'] . "</td>";
echo"<td>" . $row['TURNO'] . "</td>";
echo "</tr>";
$cont =$cont +1;
}
echo "</table><br><br>";
echo "El numero de registros son:<b>"  .$cont.  "<br><br>";
echo"<a href=iniciodesesion.html>Regresar</a></center>";
mysqli_close($con);
?>

</body>
