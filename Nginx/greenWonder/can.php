<?php
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$M1 = $M1 = mysqli_real_escape_string($conn,$_POST['m1']);
$sql3 = "UPDATE Publicacion SET estado = 'CANC' WHERE idPublicacion = $M1";
$conn->query($sql3);
header('Location: /cancelar.php');

?>