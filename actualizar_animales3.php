<body background="PANAL.jpg">
<?php
$con = mysqli_connect("localhost", "root","","zoologico_2067278");



if(!$con) {
    echo "fallo ";
    die(mysqli_error($con));
}



$numero=$_POST['NUMERO'];
$especie=$_POST['ESPECIE'];
$nombre=$_POST['NOMBRE'];
$edad=$_POST['EDAD'];
$cantidad=$_POST['CANTIDAD'];
$sexo=$_POST['SEXO'];
mysqli_query($con,"UPDATE animales
    SET NUMERO_ANIMAL='$numero', ESPECIE='$especie', NOMBRE='$nombre', EDAD='$edad', CANTIDAD='$cantidad', SEXO='$sexo'
    WHERE NUMERO_ANIMAL='$numero'");



header("Location:actualizar_animales.php");



mysqli_cloes($con);



echo "Realizado por: LEONARDO RAFAEL GUERRERO PEREZ</center>";
echo "<a href=iniciodesesion.html>MENU PRINCIPAL</a></center>";
?>
</body>
