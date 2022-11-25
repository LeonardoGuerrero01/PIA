<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost","root","","zoologico_2067278") or die ("falla al conectar");
$query = $con -> query (" SELECT * FROM animales");

echo "<body background=prove.jpg >";
echo "<h1 align=center>CONSULTA ANIMALES</h1><br>";
echo "<center><table border='1'>
<tr>
<th>NUMERO</th>
<th>ESPECIE</th>
<th>NOMBRE</th>
<th>EDAD</th>
<th>CANTIDAD</th>
<th>SEXO</th>

</tr>";
$cont = 0;
while($row = mysqli_fetch_array($query))
{
echo"<tr>";
echo"<td>" . $row['NUMERO_ANIMAL'] . "</td>";
echo"<td>" . $row['ESPECIE'] . "</td>";
echo"<td>" . $row['NOMBRE'] . "</td>";
echo"<td>" . $row['EDAD'] . "</td>";
echo"<td>" . $row['CANTIDAD'] . "</td>";
echo"<td>" . $row['SEXO'] . "</td>";
echo "</tr>";
$cont =$cont +1;
}
echo "</table><br><br>";
echo "El numero de registros son:<b>"  .$cont.  "<br><br>";
echo"<a href=iniciodesesion.html>Regresar</a></center>";
mysqli_close($con);
?>

</body>
