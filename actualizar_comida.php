<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost", "root", "","zoologico_2067278");

$resultado = mysqli_query($con,"select * from comida");

if($resultado === FALSE) {
	echo "fallo ";
	die(mysqli_error());
}
echo "<center>";
echo "<h1>ACTUALIZAR ARTICULOS</h1>";
echo "<table border='1'>
<tr>
<th>TIPO</th>
<th>CANTIDAD</th>
<th>NOMBRE</th>
<th>PRECIO</th>
</tr>" ;
while($row=mysqli_fetch_array($resultado))

{
	echo "<tr>";
	echo "<td>" . $row['TIPO_COMIDA'] . "</td>";
	echo "<td>" . $row['CANTIDAD'] . "</td>";
	echo "<td>" . $row['NOMBRE_COMIDA'] . "</td>";
	echo "<td>" . $row['PRECIO COMIDA'] . "</td>";
	echo "<tr>";
}
echo "</table>";
$registros=mysqli_num_rows($resultado);
echo "<br>El numero de registros son:" .$registros;

mysqli_close($con);
?>
<h3>Escribe la clave a editar</h3>
<form action="actualizar_comida2.php" method="post">
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