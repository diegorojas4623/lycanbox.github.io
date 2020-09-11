 <?php
$servername = "localhost";
$username = "root";
$password = "12345678";
$dbname = "dblycan";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// sql to create table
$sql = "CREATE TABLE admin (
name VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
nombre_usuario VARCHAR (15) PRIMARY KEY,
contraseña_usuario VARCHAR (10),
estado_usuario CHAR (1)
)";


if (mysqli_query($conn, $sql)) {
    echo "Tabla de usuarios creada satisfactoriamente";
} else {
    echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<div class="container">
  <a href="index.html" align class="btn btn-info" role="button">Iniciar sesión</a>
 </div>