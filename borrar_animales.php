<body background="PANAL.jpg">
<?php
$servername= "localhost";
$username="root";
$password="";
$dbname= "zoologico_2067278";

//create conection
$conn = new mysqli($servername, $username, $password, $dbname);
//check conection 
if ($conn -> connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM animales WHERE NUMERO_ANIMAL='$_POST[CLAVE]'";

if ($conn->query($sql) === TRUE ) {
	echo "<h1 align=center>REGISTRO BORRADO EXITOSAMENTE</h1><br><br>";
} else {
	echo "ERROR AL BORRAR EL REGISTRO " . $conn->error;
}
echo "<center><a href='iniciodesesion.html'>MENU PRINCIPAL</a><br><br></center>";
$conn->close();
?>
</body>