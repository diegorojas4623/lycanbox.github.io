 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";

// Create connection
$conn = mysqli_connect($servername, $username, $password);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Create database
$sql = "CREATE DATABASE dblycan";
if (mysqli_query($conn, $sql)) {
    echo "Base de datos creada satisfactoriamente";
} else {
    echo "Error creando base de datos: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<div class="container">
  <a href="index.html" align class="btn btn-info" role="button">Volver a ingresos</a>
 </div>