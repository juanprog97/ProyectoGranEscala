<?php
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT nombrePremio,precio FROM Premios";

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
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large  w3-hover-white"
     onclick="window.location.href='admin.php'">
    	Inicio
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='agmat.php'">
    	Agregar Materiales
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='agbono.php'" >Agregar Premios</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-white" onclick="window.location.href='mbonos.php'" >Mostrar Bonos Actuales</a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='index.php'" >LogOut</a>
  </div>
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
<header class="w3-container w3-green w3-center" style="padding:128px 16px">
<h3 class="w3-margin w3-jumbo">Mostrar Bonos Actuales</h3>
<form action="/abono.php" method="post" onsubmit= "alertaReserva()">
<p> Lista de Premios Disponibles:&nbsp; <?php
    $result = $conn->query($sql);
echo "<select name='m1'>";
echo "<option value='Vacio'>Vacio</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['nombrePremio'] . "'>" . "Nombre Premio: " . $row['nombrePremio'] . ". Puntos Requeridos: " . $row['precio'] . "</option>";
}
echo "</select>";
?>

</form>
</header>
</body>
</html>
