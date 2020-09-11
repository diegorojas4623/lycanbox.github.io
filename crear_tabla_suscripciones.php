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
$sql = "CREATE TABLE suscriptions (
name VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
email VARCHAR(50),
tid VARCHAR (15),
id VARCHAR (15) PRIMARY KEY,
rh VARCHAR (10),
fn DATE,
adress VARCHAR (30),
phone VARCHAR (15),
vencimiento DATE 
)";


if (mysqli_query($conn, $sql)) {
    echo "Tabla de suscrpciones creada satisfactoriamente";
} else {
    echo "Error creando tabla: " . mysqli_error($conn);
}

mysqli_close($conn);
?> 
<div class="container">
  <a href="form_suscriptions.html" align class="btn btn-info" role="button">Iniciar sesión</a>
 </div>