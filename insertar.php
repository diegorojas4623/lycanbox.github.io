 <?php

require_once "configuracion/configuracion.php";

$a = $_POST['nombres'];
$b = $_POST['apellidos'];
$c = $_POST['correo'];
$d = $_POST['usuario'];
$e = $_POST['contraseña'];
$f = $_POST['estado'];


// Create connection
$conn = mysqli_connect(IPSEVER, USERDB, PDWB, DB,PORT);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "INSERT INTO usuarios (name, lastname, email, nombre_usuario, contraseña_usuario, estado_usuario)
VALUES ('$a', '$b', '$c', '$d',('$e'), '$f')";

if (mysqli_query($conn, $sql)) {
    echo "Datos grabados satisfactoriamente";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?> 

<div class="container">
  <a href="sesion.php" align class="btn btn-info" role="button">Iniciar sesión</a>
 </div>