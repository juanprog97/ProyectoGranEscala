<?php
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$insert = "INSERT INTO Departamento (nombreDpto) VALUES ('Valle')";
$insert1 = "INSERT INTO Ciudad (nombreCiudad,idDepartamento) VALUES ('Cali','1')";
if ($conn->query($insert) === TRUE) 
if ($conn->query($insert1) === TRUE)
?>