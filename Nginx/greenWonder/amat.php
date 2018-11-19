<?php

$Nombre = $_POST['nMat'];
$Pun = $_POST['pMat'];
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$insert = "INSERT INTO Materiales(nombreMaterial,puntosMaterial) VALUES ('$Nombre',CAST('$Pun' AS SIGNED))";

if ($conn->query($insert) === TRUE){
header('Location: /admin.php');}
else{
    echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;}
?>