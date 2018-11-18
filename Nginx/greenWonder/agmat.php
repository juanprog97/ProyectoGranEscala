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
     onclick="window.location.href='admin.php'">
    	Inicio
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='agmat.php'">
    	Agregar Materiales
    </a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='logins.php'" >Agregar Premios</a>
    <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='loginsa.php'" >Admin</a>-->
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
<h3 class="w3-margin w3-jumbo">Nuevo Material</h3>
<form action="/amat.php" method="post" onsubmit= "alertaReserva()">
<p> Nombre de Material:&nbsp; <input type="text" name="nMat" required><p>
<p> Puntos por Material:&nbsp; <input type="number" min="0" name="pMat" required><p>
<input type="submit" class="w3-button w3-white" value="Agregar" onclick="window.location.href='amat.php'">
</form>
</header>
</body>
</html>
