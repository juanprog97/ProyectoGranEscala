<?php
session_start();
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$Nombre = $_SESSION["usr"];
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$M1 = $M1 = mysqli_real_escape_string($conn,$_POST['m1']);
$sql3 = "UPDATE Publicacion SET estado = 'SELE' WHERE idPublicacion = $M1";
$conn->query($sql3);


$sql2 = "SELECT idTrabajador FROM Trabajadores WHERE nombreTrabU = '$Nombre'";
$res2 = $conn->query($sql2);
$row1 = mysqli_fetch_array($res2);
$idTrabajador = $row1['idTrabajador'];

$sql4 = "UPDATE Publicacion SET idTrabajador = '$idTrabajador' WHERE idPublicacion = $M1";
$conn->query($sql4);
header('Location: /finreco.php');

?>