<?php
session_start();
?>
<!DOCTYPE html>
<html>
<title>GREEN WONDER</title>
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
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='index1.php'">
    	Inicio
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='reservas.php'">
    	Solicitar Reciclaje
    </a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white" onclick="window.location.href='acerca1.php'">
    	Acerca de Nosotros
    </a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white" onclick="window.location.href='solbono.php'">Redencion Bonos</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white" onclick="window.location.href='index.php'">LogOut</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white" onclick="window.location.href='perfil.php'"><?php echo $_SESSION["usr"]?></a>
    <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='logins.php'">Ingreso/Registro</a>-->
  </div>

    <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium w3-large">
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 1</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 2</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 3</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large">Link 4</a>
  </div>
</div>
<img src="logo.png" width="150px" height="200px" alt="logo" style="padding-top:50px" background-attachment: fixed;/*style="background-color:rgb(227, 238, 248);"*/ >
<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Acerca de GREEN WONDER</h1>
      <h5 class="w3-padding-32">Somos una empresa dedicada a la entrega de bonos redimibles para las personas que reciclan en
      la ciudad de Cali. Nuestro objetivo es que ofrecerle un reconocimiento a todo aquel que apoye esta actividad para la
    mejora del medio ambiente</h5>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-address-book w3-padding-64 w3-text-green" style="font-size:200px"></i>
    </div>
  </div>
</div>





<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <img src="logo.png" width="50px" height="100px" alt="logo" style="padding-top:50px" background-attachment: fixed;/*style="background-color:rgb(227, 238, 248);"*/ >
    <h1 class="w3-margin w3-xlarge"><u>GREEN WONDER</u></h1>
     <font  style="cursor: pointer;" href="#"  onclick="window.location.href='acerca.php'" size="3" id = "botonA">Acerca </font> 
</div>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
