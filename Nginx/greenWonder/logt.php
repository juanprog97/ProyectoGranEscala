<?php
session_start();
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$Nombre = mysqli_real_escape_string($conn,$_POST['user']);
$Contra = mysqli_real_escape_string($conn,$_POST['contrasena']);
$q = "SELECT idTrabajador FROM Trabajadores WHERE nombreTrabU = '$Nombre' and contrasena = '$Contra'";
if (mysqli_num_rows($conn->query($q)) != 0){
    $_SESSION["usr"] = $Nombre;
    header('Location: index2.php');
}
else{ header('Location: logint.php');}

?>