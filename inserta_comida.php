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

$sql ="INSERT INTO comida (TIPO_COMIDA, CANTIDAD, NOMBRE_COMIDA, PRECIO COMIDA)
VALUES ('$_POST[tipo]', '$_POST[cantidad]', '$_POST[nombre]', '$_POST[precio]')";

if ($conn->query($sql) === TRUE) {
echo "1 REGISTRO AGREGADO<br><br>";
} else {
echo "error:" .$sql . "<br>" . $conn->error;
}
echo "<a href=iniciodesesion.html>MENU PRINCIPAL</a></center>";
$conn->close();
?>

</body>