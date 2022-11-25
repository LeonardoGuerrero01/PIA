<?php
echo "<center><br><br><font face='Arial'>";
$nom=$_POST['nombre2'];
$pass=$_POST['password2'];
echo"<body background=PANAL.jpg>";

if($nom=="LEONARDO" and $pass=="caro"){//usuario y contraseña puede cambiar
$con = mysqli_connect("localhost", "root","", "zoologico_2067278");// se crea la conexion al servidor
echo "BIENVENIDO $nom TE HAS CONECTADO AL SERVIDOR¡¡<br><br><br>";

echo "<center>";
echo "<table border='1'>
<tr>
<th>ANIMALES</th><tr>
<th><a href='animales.php'>TABLA ANIMALES</a><br></th><tr>
<th><a href='actualizar_animales.php'> ACTUALIZAR CONSULTA DE ANIMALES </a><br></th><tr>
<th><a href='borrar_animales.html'>BORRAR ANIMALES</a><br></th><tr>
<th><a href='inserta_animales.html'>INSERTAR ANIMALES</a><br></th>

<tr>
<th>EMPLEADOS</th><tr>
<th><a href='empleados.php'>TABLA EMPLEADOS</a><br></th><tr>
<th><a href='actualizar_empleados.php'>ACTUALIZAR_EMPLEADOS</a><br></th><tr>
<th><a href='inserta_empleados.html'>INSERTA EMPLEADOs</a><br></th><tr>
<th><a href='borrar_empleados.html'> BORRAR EMPLEADOS  </a><br></th><tr>

<tr>
<th>COMIDA</th><tr>
<th><a href='comida.php'>TABLA ALIMENTO</a><br></th><tr>
<th><a href='actualizar_comida.php'> ACTUALIZAR ALIMENTO</a><br></th><tr>
<th><a href='inserta_alimento.html'> INSERTAR ALIMENTO </a><br></th><tr>
<th><a href='borrar_alimento.html'> BORRAR ALIMENTO </a><br></th><tr>

</tr>" ;

}
else
{
echo"<h2>Fallo, usuario o contraseña incorrecta</h2>";
echo "<a href='iniciodesesion.html'>Regresar</a>";

}
?>