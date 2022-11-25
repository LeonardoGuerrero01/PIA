<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost", "root","","zoologico_2067278");	

$clave = $_POST['clave'];
$resultado = mysqli_query($con,"select * from comida where TIPO_COMIDA = $clave");

if($resultado === FALSE) {
	echo "fallo ";
	die(mysqli_error());
}
echo"<center>";
echo "<form action=actualizar_comida3.php method=POST>";
echo "<h1> ACTUALIZAR CONSULTA DE ALIMENTO </h1>";
echo "<table border='0'";
while($row=mysqli_fetch_array($resultado))

{
	echo "<tr>";
	echo "<td>ID TIPO DE ALIMENTO:</td>";
	echo "<td><input type='text' name='tipo' value=" .$row['TIPO_COMIDA']. "></td></tr>";
	echo "<tr>";
	echo "<td>CANTIDAD:</td>";
	echo "<td><input type='text' name='cantidad' value=" .$row['CANTIDAD']. "></td></tr>";
	echo "<tr>";
	echo "<td>NOMBRE DE ALIMENTO:</td>";
	echo "<td><input type='text' name='nombre' value=" .$row['NOMBRE_COMIDA']. "></td></tr>";
	echo "<tr>";
	echo "<td>PRECIO DE ALIMENTO:</td>";
	echo "<td><input type='text' name='precio' value=" .$row['PRECIO COMIDA']. "></td></tr>";
	echo "<tr>";
}
echo "</table>";
mysqli_close($con);
echo "<input type=submit value=actualizar datos/>";
echo "</form>";
?>
</body>
