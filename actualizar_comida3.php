<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost", "root","","zoologico_2067278");



if(!$con) {
    echo "fallo ";
    die(mysqli_error($con));
}



$tipo=$_POST['tipo'];
$cantidad=$_POST['cantidad'];
$nombre=$_POST['nombre'];
$precio=$_POST['precio'];
mysqli_query($con,"UPDATE comida
    SET TIPO_COMIDA='$tipo', CANTIDAD='$cantidad', NOMBRE_COMIDA='$nombre', PRECIO COMIDA='$precio'
    WHERE TIPO_COMIDA='$tipo'");



header("Location:actualizar_comida.php");



mysqli_cloes($con);



echo "Realizado por: LEONARDO RAFAEL GUERRERO PEREZ</center>";
echo "<a href=iniciodesesion.html>MENU PRINCIPAL</a></center>";
?>
</body>