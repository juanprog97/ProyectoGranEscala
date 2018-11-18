<?php

$Nombre = $_POST['first'];
$NombreU = $_POST['nombreu'];
$Contraseña = $_POST['contra']; 
$Email = $_POST['email'];
$Dir = $_POST['dir'];
$Cel = $_POST['cel'];
$Ced = $_POST['ced'];
$Fecha = $_POST['fecha'];
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$insert = "INSERT INTO Usuarios(nombre,nombreUsuario,contraseña,cedula,direccion,celular,email,fechaNac,puntos,idCiudad,administrador)
VALUES ('$Nombre','$NombreU','$Contraseña','$Ced','$Dir','$Cel','$Email','$Fecha',0,2,0)";

if ($conn->query($insert) === TRUE)


?>