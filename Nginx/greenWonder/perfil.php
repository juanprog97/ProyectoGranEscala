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
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"  onclick="window.location.href='index.php'">
    	Inicio
    </a>
    <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='reservas.php'">
    	Solicitar Reciclaje
    </a>-->
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='acerca.php'">
    	Acerca de Nosotros
    </a>
    <a  href="#" class="w3-bar-item w3-button w3-padding-large w3-white" onclick="window.location.href='logins.php'">Ingreso/Registro</a>
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
      <h1>Perfil Usuario</h1>
      <div class="container">
   <form action="reg.php" method="post">
  <table>
    <tr>
      <td align="right">NOMBRE:</td>
      <td align="left"><input type="text" name="first" /></td>
    </tr>
    <tr>
      <td align="right">NOMBRE DE USUARIO:</td>
      <td align="left"><input type="text" name="nombreu" /></td>
    </tr>
    <tr>
      <td align="right">CONTRASEÑA:</td>
      <td align="left"><input type="password" name="contra" /></td>
    </tr>
    <tr>
      <td align="right">CORREO:</td>
      <td align="left"><input type="text" name="email" /></td>
    </tr>
    <tr>
      <td align="right">DIRECCION:</td>
      <td align="left"><input type="text" name="dir" /></td>
    </tr>
    <tr>
      <td align="right">CELULAR:</td>
      <td align="left"><input type="text" name="cel" /></td>
    </tr>
    <tr>
      <td align="right">CEDULA:</td>
      <td align="left"><input type="text" name="ced" /></td>
    </tr>
    <tr>
      <td align="right">FECHA NACIMIENTO:</td>
      <td align="left"><input type="date" name="fecha" /></td>
    </tr>
    <tr>
      <td align="right"></td>
      <td align="left"><input type="submit" value="Submit" onclick="window.location.href='reg.php'"></td>
    </tr>
  </table>
</form>
  </div>



    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-address-book w3-padding-64 w3-text-green" style="font-size:200px"></i>
    </div>
  </div>
</div>




<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">GREEN WONDER</h1>
</div>

</body>
</html>
