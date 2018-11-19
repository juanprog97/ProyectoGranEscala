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
  nombreUsuario varchar(15)  NOT NULL,
  contrasena varchar(15)  NOT NULL,
  cedula varchar(11)  NOT NULL,
  direccion char(40)  NOT NULL,
  celular varchar(11)  NOT NULL,
  email char(30)  NOT NULL,
  fechaNac date  NOT NULL,
  puntos int  NOT NULL DEFAULT 0,
  idCiudad int  NOT NULL,
  administrador boolean  NOT NULL DEFAULT 0,
  FOREIGN KEY(idCiudad) REFERENCES Ciudad(idCiudad) ON DELETE CASCADE
  )";

$createTable4 = "CREATE TABLE IF NOT EXISTS PremiosUsuario (
  idPU INT AUTO_INCREMENT PRIMARY KEY,
  nombrePremio char(15)  NULL,
  fechaPu date  NULL,
  idPremio int  NOT NULL,
  idUsuario int  NOT NULL,
  FOREIGN KEY(idPremio) REFERENCES Premios(idPremio) ON DELETE CASCADE,
  FOREIGN KEY(idUsuario) REFERENCES Usuarios(idUsuario) ON DELETE CASCADE
  )";

$createTable5 = "CREATE TABLE IF NOT EXISTS Materiales (
  idMaterial INT AUTO_INCREMENT PRIMARY KEY,
  nombreMaterial char(15)  NULL,
   puntosMaterial int  NULL
  )";

$createTable6 = "CREATE TABLE IF NOT EXISTS Publicacion (
  idPublicacion INT AUTO_INCREMENT PRIMARY KEY,
  fechaPub date  NULL,
  mensaje varchar(150)  NOT NULL,
  totalPuntos int  NOT NULL,
  idUsuario int  NOT NULL,
  FOREIGN KEY(idUsuario) REFERENCES Usuarios(idUsuario) ON DELETE CASCADE
  )";

$createTable7 = "CREATE TABLE IF NOT EXISTS MaterialesPublicacion (
  idMP INT AUTO_INCREMENT PRIMARY KEY,
  idPub int  NOT NULL,
   idMaterial int  NOT NULL,
   peso int  NOT NULL,
   puntosM int  NOT NULL,
  FOREIGN KEY(idPub) REFERENCES Publicacion(idPublicacion) ON DELETE CASCADE,
  FOREIGN KEY(idMaterial) REFERENCES Materiales(idMaterial) ON DELETE CASCADE
  )";

$createTable8 = "CREATE TABLE IF NOT EXISTS Trabajadores (
  idTrabajador INT AUTO_INCREMENT PRIMARY KEY,
  nombreTrab char(30)  NULL,
  nombreTrabU varchar(15)  NOT NULL,
  contrasena varchar(15)  NOT NULL,
   cedula varchar(12)  NULL,
   email char(30)  NOT NULL,
   celular varchar(11)  NOT NULL,
   rut varchar(15)  NOT NULL,
   fechaNac date  NOT NULL,
   idCiudad int  NOT NULL,
   FOREIGN KEY(idCiudad) REFERENCES Ciudad(idCiudad) ON DELETE CASCADE
  )";

$createTable9 = "CREATE TABLE IF NOT EXISTS Recoleccion (
  idReco INT AUTO_INCREMENT PRIMARY KEY,
  fechaReco date  NOT NULL,
   idPub int  NOT NULL,
   estado char(10)  NOT NULL,
   idTrabajador int  NOT NULL,
   FOREIGN KEY(idPub) REFERENCES Publicacion(idPublicacion) ON DELETE CASCADE,
   FOREIGN KEY(idTrabajador) REFERENCES Trabajadores(idTrabajador) ON DELETE CASCADE
  )";

if ($conn->query($createTable) === TRUE)
if ($conn->query($createTable1) === TRUE)
if ($conn->query($createTable2) === TRUE)
if ($conn->query($createTable3) === TRUE)
if ($conn->query($createTable4) === TRUE)
if ($conn->query($createTable5) === TRUE)
if ($conn->query($createTable6) === TRUE)
if (!$conn->query($createTable7) === TRUE) {
  echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;}
if (!$conn->query($createTable8) === TRUE) {
  echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;}
if (!$conn->query($createTable9) === TRUE) {
  echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;}
?>
<!DOCTYPE html>
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
     onclick="window.location.href='index1.php'">
    	Inicio
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
    onclick="window.location.href='reservas.php'">
    	Solicitar Reciclaje
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='acerca1.php'">
    	Acerca de Nosotros
    </a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white" onclick="window.location.href='solbono.php'">Redencion Bonos</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white" onclick="window.location.href='index.php'">LogOut</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white" onclick="window.location.href='index.php'"><?php echo $_SESSION["usr"]?></a>
    <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='logins.php'" >Ingreso/Registro</a>-->
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
