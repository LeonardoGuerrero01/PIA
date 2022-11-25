<body background="PANAL.jpg">
	
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "zoologico_2067278";


$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
die("connection failed: " . $conn->connect_error);
}

$sql ="INSERT INTO empleados (ID_EMPLEADO, NOMBRE_EMPLEADO, ANIMAL_ASIGNADO, HORARIO, TURNO)
VALUES ('$_POST[id]', '$_POST[nombre]', '$_POST[animal]', '$_POST[horario]', '$_POST[turno]')";

if ($conn->query($sql) === TRUE) {
echo "1 registro agregado<br><br>";
} else {
echo "error:" .$sql . "<br>" . $conn->error;
}
echo "<a href=iniciodesesion.html>MENU PRINCIPAL</a></center>";
$conn->close();
?>

</body>
