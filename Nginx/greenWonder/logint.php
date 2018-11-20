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
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
     onclick="window.location.href='index.php'">
    	Inicio
    </a>
    <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
    onclick="window.location.href='reservas.php'">
    	Solicitar Reciclaje
    </a>-->
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='acerca.php'">
    	Acerca de Nosotros
    </a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white" onclick="window.location.href='logins.php'" >Ingreso/Registro Usuarios</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white" onclick="window.location.href='logint.php'" >Ingreso Trabajadores </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='loginsa.php'" >Admin</a>
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
<!-- Header -->

<header class="w3-container w3-green w3-center" style="padding:128px 16px">
  <h3 class="w3-margin w3-jumbo">Login Trabajador</h3>
  	<form action="/logt.php" method="post" onsubmit= "alertaReserva()">

    <p id="user">
    	Usuario: </br>
   	<input type="text" name="user" required>
   	</p>

    <p id="password">
    	Contrasena: </br>
    	<input type="password" name="contrasena" id="contrasena" required></br>
    	<input type="checkbox" onclick="mostrarContrasenia()">mostrar contraseña
	</p>

    <input type="submit" class="w3-button w3-white" value="Ingresar" onclick="window.location.href='logt.php'">
    </form>
</header>



<div class="w3-container w3-white w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge w3-white">GREEN WONDER</h1>
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

function mostrarContrasenia() {
    var x = document.getElementById("contrasena");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

</body>
</html>
