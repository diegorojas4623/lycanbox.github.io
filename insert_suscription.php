 <?php

require_once "configuracion/configuracion.php";

$a = $_POST['nombres'];
$b = $_POST['apellidos'];
$c = $_POST['correo'];
$d = $_POST['tid'];
$e = $_POST['id'];
$f = $_POST['rh'];
$g = $_POST['fn'];
$h = $_POST['direccion'];
$i = $_POST['telefono'];
$j = $_POST['vencimiento'];


// Create connection
$conn = mysqli_connect(IPSEVER, USERDB, PDWB, DB,PORT);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO suscriptions (name, lastname, email, tid, id, rh, fn, adress, phone, vencimiento)
VALUES ('$a', '$b', '$c', '$d', '$e', '$f', '$g', '$h', '$i', '$j')";

if (mysqli_query($conn, $sql)) {
    echo "Datos grabados satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

<div class="container">
  <a href="form_suscriptions.php" align class="btn btn-info" role="button">volver</a>
 </div>