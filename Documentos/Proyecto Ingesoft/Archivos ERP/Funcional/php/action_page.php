<meta http-equiv="refresh" content="2;url=../reservas.html">

<?php
$dbServer="localhost";
$dbUser="root";
$dbPass="admin"; //Enter MySQL password here.
$dbName="reservas";
$link = mysqli_connect("$dbServer", "$dbUser", "$dbPass","$dbName") or die("Could not connect to MySQL");
print "<h1>Se ha realizado de forma satisfactoria la reserva</h1>";
print "<h1></h1>";
print "<h1>Será redireccionado en 2 segundos al menú inicial</h1>";

$nombre = "Mateo";
$fecha = $_POST['fdreserva'];
$zona = $_POST['fname'];
$hora = $_POST['ftime'];

$sql = "INSERT INTO demo (fusuario,fdreserva,fname,ftime) VALUES ('$nombre','$fecha','$zona','$hora')";

mysqli_query($link,$sql);

mysqli_close($link);
?>