<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost", "root", "","zoologico_2067278");

$resultado = mysqli_query($con,"select * from animales");

if($resultado === FALSE) {
	echo "fallo ";
	die(mysqli_error());
}
echo "<center>";
echo "<h1>ACTUALIZAR ARTICULOS</h1>";
echo "<table border='1'>
<tr>
<th>NUMERO</th>
<th>ESPECIE</th>
<th>NOMBRE</th>
<th>EDAD</th>
<th>CANTIDAD</th>
<th>SEXO</th>
</tr>" ;
while($row=mysqli_fetch_array($resultado))

{
	echo "<tr>";
	echo "<td>" . $row['NUMERO_ANIMAL'] . "</td>";
	echo "<td>" . $row['ESPECIE'] . "</td>";
	echo "<td>" . $row['NOMBRE'] . "</td>";
	echo "<td>" . $row['EDAD'] . "</td>";
	echo "<td>" . $row['CANTIDAD'] . "</td>";
	echo "<td>" . $row['SEXO'] . "</td>";
	echo "<tr>";
}
echo "</table>";
$registros=mysqli_num_rows($resultado);
echo "<br>El numero de registros son:" .$registros;

mysqli_close($con);
?>
<h3>Escribe la clave a editar</h3>
<form action="actualizar_animales2.php" method="post">
	Clave de articulo: <input type="text" name="clave" />
	<input type="submit" value="Editar" />
</form>
<br>
<br>
<br><br><br>
<h3> Realizado por: LEONARDO RAFAEL GUERRERO PEREZ</h3>
<h3> <a href=iniciodesesion.html>MENU PRINCIPAL</a></h3>
</body>
</html>