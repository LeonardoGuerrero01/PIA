<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost", "root","","zoologico_2067278");	

$clave = $_POST['clave'];
$resultado = mysqli_query($con,"select * from animales where NUMERO_ANIMAL = $clave");

if($resultado === FALSE) {
	echo "fallo ";
	die(mysqli_error());
}
echo"<center>";
echo "<form action=actualizar_animales3.php method=POST>";
echo "<h1> ACTUALIZAR CONSULTA DE ANIMALES </h1>";
echo "<table border='0'";
while($row=mysqli_fetch_array($resultado))

{
	echo "<tr>";
	echo "<td>NUMERO ANIMAL:</td>";
	echo "<td><input type='text' name='NUMERO' value=" .$row['NUMERO_ANIMAL']. "></td></tr>";
	echo "<tr>";
	echo "<td>ESPECIE:</td>";
	echo "<td><input type='text' name='ESPECIE' value=" .$row['ESPECIE']. "></td></tr>";
	echo "<tr>";
	echo "<td>NOMBRE:</td>";
	echo "<td><input type='text' name='NOMBRE' value=" .$row['NOMBRE']. "></td></tr>";
	echo "<tr>";
	echo "<td>EDAD:</td>";
	echo "<td><input type='text' name='EDAD' value=" .$row['EDAD']. "></td></tr>";
	echo "<tr>";
	echo "<td>CANTIDAD:</td>";
	echo "<td><input type='text' name='CANTIDAD' value=" .$row['CANTIDAD']. "></td></tr>";
	echo "<tr>";
	echo "<td>SEXO:</td>";
	echo "<td><input type='text' name='SEXO' value=" .$row['SEXO']. "></td></tr>";
	echo "<tr>";
}
echo "</table>";
mysqli_close($con);
echo "<input type=submit value=actualizar datos/>";
echo "</form>";
?>
</body>
