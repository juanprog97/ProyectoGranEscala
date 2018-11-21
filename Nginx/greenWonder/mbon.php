<?php
session_start();
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$Nombre = $_SESSION["usr"];
$M1 = $_POST['m1'];
$CDate= date('Y-m-d');
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}



$idU = "SELECT idUsuario,puntos FROM Usuarios WHERE nombreUsuario = '$Nombre'";
$res = $conn->query($idU);
$row1 = mysqli_fetch_array($res);
$idUsuario = $row1['idUsuario'];
$Puntos = $row1['puntos'];

$sql = "SELECT precio FROM Premios WHERE idPremio = '$M1'";
$res1 = $conn->query($sql);
$row2 = mysqli_fetch_array($res1);
$Precio = $row2['precio'];
$new1 = intval($Puntos) - intval($Precio);

if($Puntos >= $Precio){
    $sql1 = "INSERT INTO PremiosUsuario(fechaPu,idPremio,idUsuario) VALUES ('$CDate','$M1','$idUsuario')";
    $conn->query($sql1);
    $sql2 = "UPDATE Usuarios SET puntos = '$new1' WHERE idUsuario = '$idUsuario'";
    $conn->query($sql2);
    header('Location: /bonosU.php');

}
else{
    header('Location: /solbono.php');

}

?>