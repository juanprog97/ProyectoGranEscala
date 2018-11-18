<?php

$Nombre = $_POST['nBon'];
$Des = $_POST['dBon'];
$Pun = $_POST['pRe'];
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$insert = "INSERT INTO Premios(nombrePremio,descripcion,precio) VALUES ('$Nombre','$Des',CAST('$Pun' AS SIGNED))";

if ($conn->query($insert) === TRUE){
header('Location: /admin.php');}
else{
    echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;}
?>