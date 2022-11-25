<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost", "root","","zoologico_2067278");



if(!$con) {
    echo "fallo ";
    die(mysqli_error($con));
}



$id=$_POST['ID'];
$nombre=$_POST['NOMBRE'];
$animal=$_POST['ANIMAL'];
$horario=$_POST['HORARIO'];
$turno=$_POST['TURNO'];
mysqli_query($con,"UPDATE empleados
    SET ID_EMPLEADO='$id', NOMBRE_EMPLEADO='$nombre', ANIMAL_ASIGNADO='$animal', HORARIO='$horario', TURNO='$turno'
    WHERE ID_EMPLEADO='$id'");



header("Location:actualizar_empleados.php");



mysqli_cloes($con);



echo "Realizado por: LEONARDO RAFAEL GUERRERO PEREZ</center>";
echo "<a href=iniciodesesion.html>MENU PRINCIPAL</a></center>";
?>
</body>