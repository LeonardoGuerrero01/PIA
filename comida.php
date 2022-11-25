<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost","root","","zoologico_2067278") or die ("falla al conectar");
$query = $con -> query (" SELECT * FROM comida");

echo "<body background=prove.jpg >";
echo "<h1 align=center>CONSULTA COMIDA</h1><br>";
echo "<center><table border='1'>
<tr>
<th>TIPO</th>
<th>CANTIDAD</th>
<th>NOMBRE_COM</th>
<th>PRECIO</th>

</tr>";
$cont = 0;
while($row = mysqli_fetch_array($query))
{
echo"<tr>";
echo"<td>" . $row['TIPO_COMIDA'] . "</td>";
echo"<td>" . $row['CANTIDAD'] . "</td>";
echo"<td>" . $row['NOMBRE_COMIDA'] . "</td>";
echo"<td>" . $row['PRECIO COMIDA'] . "</td>";
echo "</tr>";
$cont =$cont +1;
}
echo "</table><br><br>";
echo "El numero de registros son:<b>"  .$cont.  "<br><br>";
echo"<a href=iniciodesesion.html>Regresar</a></center>";
mysqli_close($con);
?>

</body>
