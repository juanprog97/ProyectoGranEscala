<meta http-equiv="refresh" content="8;url=../reservas.html">

<?php
$dbServer="localhost";
$dbUser="root";
$dbPass="admin123"; //Enter MySQL password here.
$dbName="reservas";
$link = mysqli_connect("$dbServer", "$dbUser", "$dbPass","$dbName") or die("Could not connect to MySQL");

$nombre = "Mateo";
$numero = $_POST['fnumero'];
$sql = "SELECT * FROM demo WHERE (fusuario) ='$nombre' AND (ID)= '$numero'";

$resultado = mysqli_query($link,$sql);

$row = mysqli_fetch_assoc($resultado);
$fecha = $row['fdreserva'];
$zona = $row['fname'];
$hora = $row['ftime'];
print "<h1>Se ha realizado de forma satisfactoria la Consulta</h1>";
print "<h1> </h1>";
print "<h1>Su reserva es :</h1>";
print "<h3><b>Nombre:</b>  $nombre</h3>";
print "<h3><b>Fecha:</b>  $fecha</h3>";
print "<h3><b>Zona:</b>  $zona</h3>";
print "<h3><b>Hora:</b>  $hora</h3>";

print "<h1>Será redireccionado en 8 segundos al menú inicial</h1>";

mysqli_close($link);
?>