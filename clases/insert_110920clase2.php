 <?php

require_once "../configuracion/configuracion.php";

$a = $_POST['id2'];
$b = $_POST['fullname'];
$c = $_POST['phone'];

// Create connection
$conn = mysqli_connect(IPSEVER, USERDB, PDWB, DB,PORT);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO 110920clase1 (id2, fullname, phone)
VALUES ('$a', '$b', '$c')";

if (mysqli_query($conn, $sql)) {
    echo "Datos grabados satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 



<div class="container">
  <a href="../inicio.php" align class="btn btn-info" role="button">Iniciar sesión</a>
 </div>