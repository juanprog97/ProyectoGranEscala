<?php
$servername = "19.18.18.4:3306";
$username = "test";
$password = "test";
$dbname = "test";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT nombreMaterial FROM Materiales";

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
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-bar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <div class="w3-bar w3-green w3-card w3-left-align w3-large">
    <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    <a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white" onclick="window.location.href='index1.php'">Inicio</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-white" onclick="window.location.href='reservas.php'">Solicitar Reciclaje</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white" onclick="window.location.href='acerca1.php'">Acerca de Nostros</a>
    <a href="#" class="w3-bar-item w3-button w3-padding-large w3-hover-white" onclick="window.location.href='index.php'">LogOut</a>
    <!--<a href="#" class="w3-bar-item w3-button w3-hide-small w3-padding-large w3-hover-white"
    onclick="window.location.href='logins.php'" >Ingreso/Registro</a>-->
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
      <h1>Programar recogida de materiales</h1>
      <h5 class="w3-padding-32">A continuacion programe la fecha y hora para la recogida del material reciclable</h5>
		<form action="/action_page.php" method="post" onsubmit= "alertaReserva()">

    <p> Nombre de usuario:&nbsp; <input type="text" name="nUsuario" required><p>
    <p> Descripcion:&nbsp; <input type="text" name="descrip"><p>

    <p> Material 1:&nbsp; <?php
    $result = $conn->query($sql);
echo "<select name='m1'>";
echo "<option value='Vacio'>Vacio</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['nombreMaterial'] . "'>" . $row['nombreMaterial'] . "</option>";
}
echo "</select>";
?>&nbsp; Cantidad:&nbsp;  <input type="number" min="0" name="can1" required><p>


<p> Material 2:&nbsp; <?php
$result = $conn->query($sql);
echo "<select name='m2'>";
echo "<option value='Vacio'>Vacio</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['nombreMaterial'] . "'>" . $row['nombreMaterial'] . "</option>";
}
echo "</select>";
?>&nbsp; Cantidad:&nbsp;  <input type="number" min="0" name="can2" required><p>

    <p> Material 3:&nbsp; <?php
    $result = $conn->query($sql);
echo "<select name='m3'>";
echo "<option value='Vacio'>Vacio</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['nombreMaterial'] . "'>" . $row['nombreMaterial'] . "</option>";
}
echo "</select>";
?>&nbsp; Cantidad:&nbsp;  <input type="number" min="0" name="can3" required><p>

    <p> Material 4:&nbsp; <?php
    $result = $conn->query($sql);
echo "<select name='m4'>";
echo "<option value='Vacio'>Vacio</option>";
while ($row = mysqli_fetch_array($result)) {
    echo "<option value='" . $row['nombreMaterial'] . "'>" . $row['nombreMaterial'] . "</option>";
}
echo "</select>";
?>>&nbsp; Cantidad:&nbsp;  <input type="number" min="0" name="can4" required><p>


    <p id="fechareservada">Fecha Reserva: &nbsp; <input type="date" name="date" id="date" min="<?=date('Y-m-d',strtotime('+1 days')) ?>" required></p>
    <p> Hora de reserva:&nbsp; <input type="time" name="ftime" required><p>



    <button type="button" class="w3-button w3-green" onclick="document.getElementById('inforeserva').style.display='block'">Info Reserva</button>
 			 <input type="submit" class="w3-button w3-green" value="Reservar" >


    </form>
     <!--Funcion para mostrar alerta en caso de que la reserva se pueda hacer, se debería porder guardar las cosas aquí en los documentos-->
    <script>
    function alertaReserva(){
    alert("La Reserva ha sido registrada exitosamente");

    }
    </script>
    <!--LA IDEA ERA MOSTRAR LA INFORMACION DEL FORM EN ESTA SECCION, ESTADO IMPOSIBLE-->
    <!-- <p id="inforeserva" style="display:none" document.getElementById('inforeserva').style.display='block'> Lollipop <script> document.getElementById('fechareservada').innerHTML = fdreserva;</script></p>
     <script>
      document.getElementById('fecha1').innerHTML = fechareservada;
    </script> </p>


    <p id="inforeserva" style="display:none" >Puto </p>



    -->
      <p class="w3-text-grey">Al intentar reservar se debe tener en cuenta que solo se puede hacer reservas con minimo un dia de anticipacion.</p>
    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-calendar w3-padding-64 w3-text-green" style="font-size:200px"></i>
    </div>
  </div>
</div>


<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">GREEN WONDER</h1>
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