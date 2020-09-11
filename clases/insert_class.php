 <?php

require_once "configuracion/configuracion.php";

$a = $_POST['name'];
$b = $_POST['cupos'];

// Create connection
$conn = mysqli_connect(IPSEVER, USERDB, PDWB, DB,PORT);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO clases (name, cupos)
VALUES ('$a', '$b')";

if (mysqli_query($conn, $sql)) {
    echo "Datos grabados satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 



<div class="container">
  <a href="form_class.php" align class="btn btn-info" role="button">Iniciar sesión</a>
 </div>