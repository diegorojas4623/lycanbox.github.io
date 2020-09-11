 <?php

require_once "configuracion/configuracion.php";

$a = $_POST['id2'];
$b = $_POST['name'];
$c = $_POST['lastname'];
$d = $_POST['phone'];
$e = $_POST['class'];


// Create connection
$conn = mysqli_connect(IPSEVER, USERDB, PDWB, DB,PORT);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "UPDATE clases SET cupos=cupos-1 WHERE name='$e'";
$sql = "INSERT INTO citas (id2, name, lastname, phone, class)
VALUES ('$a', '$b', '$c', '$d', '$e')";

if (mysqli_query($conn, $sql)) {
    echo "Datos grabados satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}



if (mysqli_query($conn, $sql)) {
    echo "Información actualizada satisfactoriamente";
} else {
    echo "Error actualizando la información: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<div class="container">
  <a href="form_class.php" align class="btn btn-info" role="button">volver</a>
 </div>
