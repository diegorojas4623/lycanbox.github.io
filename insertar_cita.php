 <?php

require_once "configuracion/configuracion.php";

$a = $_POST['id'];
$b = $_POST['name'];
$c = $_POST['lastname'];
$d = $_POST['phone'];
$e = $_POST['date'];
$f = $_POST['class'];



// Create connection
$conn = mysqli_connect(IPSEVER, USERDB, PDWB, DB,PORT);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO citas (id, name, lastname, phone, date, class)
VALUES ('$a', '$b', '$c', '$d', '$e', '$f')";

if (mysqli_query($conn, $sql)) {
    echo "Datos grabados satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

<div class="container">
  <a href="inicio.php" align class="btn btn-info" role="button">volver</a>
 </div>