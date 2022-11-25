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

$sql ="INSERT INTO animales (NUMERO_ANIMAL, ESPECIE, NOMBRE, EDAD, CANTIDAD, SEXO)
VALUES ('$_POST[numero]', '$_POST[especie]', '$_POST[nombre]', '$_POST[edad]', '$_POST[cantidad]', '$_POST[sexo]')";

if ($conn->query($sql) === TRUE) {
echo "1 registro agregado<br><br>";
} else {
echo "error:" .$sql . "<br>" . $conn->error;
}
echo "<a href=iniciodesesion.html>Menu Principal</a></center>";
$conn->close();
?>

</body>
