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
$Nombre = $_SESSION["usr"];
$Des = $_POST['descrip'];
$M1 = mysqli_real_escape_string($conn,$_POST['m1']);
$C1 = $_POST['can1'];
$M2 = $_POST['m2'];
$C2 = $_POST['can2'];
$M3 = $_POST['m3'];
$C3 = $_POST['can3'];
$M4 = $_POST['m4'];
$C4 = $_POST['can4'];
$Date = $_POST['date'];
$Time = $_POST['ftime'];
$CDate= date('Y-m-d');
$tt=0;
$idU = "SELECT idUsuario FROM Usuarios WHERE nombreUsuario = '$Nombre'";
$res = $conn->query($idU);
$row1 = mysqli_fetch_array($res);
$idUsuario = $row1['idUsuario'];
$sql = "INSERT INTO Publicacion(fechaPub,mensaje,totalPuntos,idUsuario,estado,idTrabajador,fechaReco) 
        VALUES ('$CDate','$Des',0,CAST($idUsuario AS SIGNED),'INIC',NULL,'$Date')";
if(!$conn->query($sql));
$sql4 = "SELECT idPublicacion FROM Publicacion ORDER BY idPublicacion DESC LIMIT 1";
$res1 = $conn->query($sql4);
$row2 = mysqli_fetch_array($res1);
$idPub = $row2['idPublicacion'];

if($M1 != 'Vacio'){
    $sql2 = "SELECT idMaterial,puntosMaterial FROM Materiales WHERE nombreMaterial = '$M1'";
    $res = $conn->query($sql2);
    $row1 = mysqli_fetch_array($res);
    $puntos = $row1['puntosMaterial'];
    $idMat = $row1['idMaterial'];
    $tPuntos=intval($puntos)*intval($C1);
    $sql5 = "INSERT INTO MaterialesPublicacion(idPub,idMaterial,peso,puntosM) VALUES ('$idPub','$idMat','$C1','$tPuntos')";
    if(!$conn->query($sql5)){echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;};
    $tt=$tt+$tPuntos;
}

if($M2 != 'Vacio'){
    $sql2 = "SELECT idMaterial,puntosMaterial FROM Materiales WHERE nombreMaterial = '$M2'";
    $res = $conn->query($sql2);
    $row1 = mysqli_fetch_array($res);
    $puntos = $row1['puntosMaterial'];
    $idMat = $row1['idMaterial'];
    $tPuntos=intval($puntos)*intval($C2);
    $sql5 = "INSERT INTO MaterialesPublicacion(idPub,idMaterial,peso,puntosM) VALUES ('$idPub','$idMat','$C2','$tPuntos')";
    if(!$conn->query($sql5)){echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;};
    $tt=$tt+$tPuntos;
}

if($M3 != 'Vacio'){
    $sql2 = "SELECT idMaterial,puntosMaterial FROM Materiales WHERE nombreMaterial = '$M3'";
    $res = $conn->query($sql2);
    $row1 = mysqli_fetch_array($res);
    $puntos = $row1['puntosMaterial'];
    $idMat = $row1['idMaterial'];
    $tPuntos=intval($puntos)*intval($C3);
    $sql5 = "INSERT INTO MaterialesPublicacion(idPub,idMaterial,peso,puntosM) VALUES ('$idPub','$idMat','$C3','$tPuntos')";
    if(!$conn->query($sql5)){echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;};
    $tt=$tt+$tPuntos;
}

if($M4 != 'Vacio'){
    $sql2 = "SELECT idMaterial,puntosMaterial FROM Materiales WHERE nombreMaterial = '$M4'";
    $res = $conn->query($sql2);
    $row1 = mysqli_fetch_array($res);
    $puntos = $row1['puntosMaterial'];
    $idMat = $row1['idMaterial'];
    $tPuntos=intval($puntos)*intval($C4);
    $sql5 = "INSERT INTO MaterialesPublicacion(idPub,idMaterial,peso,puntosM) VALUES ('$idPub','$idMat','$C4','$tPuntos')";
    if(!$conn->query($sql5)){echo "Table creation failed: (" . $conn->errno . ") " . $conn->error;};
    $tt=$tt+$tPuntos;
}


$sql3 = "UPDATE Publicacion SET totalPuntos = $tt order by idPublicacion DESC LIMIT 1";
$conn->query($sql3);
header('Location: /index.php');
?>