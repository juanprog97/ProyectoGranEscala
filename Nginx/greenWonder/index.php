<!DOCTYPE html>
<?php
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$createTable = "CREATE TABLE IF NOT EXISTS Departamento (
idDepartamento INT AUTO_INCREMENT PRIMARY KEY,
nombreDpto char(13)
)";
$createTable1 = "CREATE TABLE IF NOT EXISTS Ciudad (
  idCiudad INT AUTO_INCREMENT PRIMARY KEY,
  nombreCiudad char(13),
  idDepartamento INT,
  FOREIGN KEY(idDepartamento) REFERENCES Departamento(idDepartamento) ON DELETE CASCADE
  )";

$createTable2 = "CREATE TABLE IF NOT EXISTS Premios (
  idPremio INT AUTO_INCREMENT PRIMARY KEY,
  nombrePremio char(15)  NULL,
   descripcion varchar(40)  NOT NULL,
   precio int  NULL
  )";

$createTable3 = "CREATE TABLE IF NOT EXISTS Usuarios (
  idUsuario INT AUTO_INCREMENT PRIMARY KEY,
  nombre char(30)  NOT NULL,
   cedula int  NOT NULL,
   direccion char(40)  NOT NULL,
   celular numeric(11,0)  NOT NULL,
   email char(30)  NOT NULL,
   fechaNac date  NOT NULL,
   puntos int  NOT NULL DEFAULT 0,
   idCiudad int  NOT NULL,
   administrador boolean  NOT NULL DEFAULT 0,
   FOREIGN KEY(idCiudad) REFERENCES Ciudad(idCiudad) ON DELETE CASCADE

  )";

if ($conn->query($createTable) === TRUE)
if ($conn->query($createTable1) === TRUE)
if ($conn->query($createTable2) === TRUE)
if ($conn->query($createTable3) === TRUE)
?>
<html>
<title>ERP-GREEN WONDER</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6
{
	font-family: "Lato", sans-serif
}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>
<!--
	Second Grid

-->
<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right
    w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);"
     onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large  w3-white"
     onclick="window.location.href='index.php'">
    	Inicio
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
    onclick="window.location.href='reservas.php'">
    	Solicitar Reciclaje
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='acerca.php'">
    	Acerca de Nosotros
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='logins.php'" >Ingreso/Registro</a>
  </div>
  <img src="fondo.jpg" width="1200" height="610" align="right">

    <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>
<img src="logo.png" width="165px" height="200px" alt="logo" style="padding-top:50px" background-attachment: fixed;/*style="background-color:rgb(227, 238, 248);"*/ >
<!-- Header -->
</body>
</html>
