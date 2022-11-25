<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost", "root","","zoologico_2067278");	

$clave = $_POST['clave'];
$resultado = mysqli_query($con,"select * from empleados where ID_EMPLEADO = $clave");

if($resultado === FALSE) {
	echo "fallo ";
	die(mysqli_error());
}
echo"<center>";
echo "<form action=actualizar_empleados3.php method=POST>";
echo "<h1> ACTUALIZAR CONSULTA DE EMPLEADOS </h1>";
echo "<table border='0'";
while($row=mysqli_fetch_array($resultado))

{
	echo "<tr>";
	echo "<td>ID ID EMPLEADO:</td>";
	echo "<td><input type='text' name='ID' value=" .$row['ID_EMPLEADO']. "></td></tr>";
	echo "<tr>";
	echo "<td>NOMBRE EMPLEADO:</td>";
	echo "<td><input type='text' name='NOMBRE' value=" .$row['NOMBRE_EMPLEADO']. "></td></tr>";
	echo "<tr>";
	echo "<td>ANIMAL ASIGNADO:</td>";
	echo "<td><input type='text' name='ANIMAL' value=" .$row['ANIMAL_ASIGNADO']. "></td></tr>";
	echo "<tr>";
	echo "<td>HORARIO:</td>";
	echo "<td><input type='text' name='HORARIO' value=" .$row['HORARIO']. "></td></tr>";
	echo "<tr>";
	echo "<td>TURNO:</td>";
	echo "<td><input type='text' name='TURNO' value=" .$row['TURNO']. "></td></tr>";
	echo "<tr>";
}
echo "</table>";
mysqli_close($con);
echo "<input type=submit value=actualizar datos/>";
echo "</form>";
?>
</body>
