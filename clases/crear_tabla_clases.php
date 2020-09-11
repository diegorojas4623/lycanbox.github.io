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
$sql = "CREATE TABLE 110920clase1 (
id INT (15) PRIMARY KEY,
name VARCHAR (40) NOT NULL,
phone INT (12) NOT NULL
)";

$sql = "CREATE TABLE 110920clase2 (
    id INT (15) PRIMARY KEY,
    name VARCHAR (40) NOT NULL,
    phone INT (12) NOT NULL
    )";

$sql = "CREATE TABLE 110920clase3 (
    id INT (15) PRIMARY KEY,
    name VARCHAR (40) NOT NULL,
    phone INT (12) NOT NULL
    )";

$sql = "CREATE TABLE 110920clase4 (
    id INT (15) PRIMARY KEY,
    name VARCHAR (40) NOT NULL,
    phone INT (12) NOT NULL
    )";

$sql = "CREATE TABLE 110920clase5 (
    id INT (15) PRIMARY KEY,
    name VARCHAR (40) NOT NULL,
    phone INT (12) NOT NULL
    )";

$sql = "CREATE TABLE 110920clase6 (
    id INT (15) PRIMARY KEY,
    name VARCHAR (40) NOT NULL,
    phone INT (12) NOT NULL
    )";

if (mysqli_query($conn, $sql)) {
    echo "Tabla de clases creada satisfactoriamente";
} else {
    echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<div class="container">
  <a href="index.html" align class="btn btn-info" role="button">Iniciar sesión</a>
 </div>