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
$sql3 = "UPDATE Publicacion SET estado = 'FINA' WHERE idPublicacion = $M1";
$conn->query($sql3);

$sql5 = "SELECT idUsuario,totalPuntos FROM Publicacion WHERE idPublicacion = $M1";
$res = $conn->query($sql5);
$row = mysqli_fetch_array($res);
$idUsuario = $row['idUsuario'];
$nuevos = $row['totalPuntos'];
$nuevos = intval($nuevos);

$sql4 = "UPDATE Usuarios SET puntos = puntos + $nuevos WHERE idUsuario = '$idUsuario'";
if(!$conn->query($sql4)){echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;};

header('Location: /finreco.php');

?>