
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>LycanBox</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="icon" type="image/jpg" href="images/icon.jpg">
        <link rel="stylesheet" href="css/style.css"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
    </head>
    <header>
       <nav class="navbar navbar-default">
            <div class="container-fluid">
              <div class="navbar-header">
                <figure>
                    <img src="images/lycan.png" width="170">
                </figure>
            </div>
              <ul class="nav navbar-nav">
                <li><a href="index.html">Home</a></li>
                <li><a href="#plans">Planes</a></li>
                <li><a href="#hours">Horarios</a></li>
                <li><a href="#trainers">Entrenadores</a></li>
                <li><a href="#galery">Galería</a></li>
                <li><a href="#about">Acerca de nosotros</a></li>
                <li><a href="sesion.php">Iniciar sesión</a></li>
              </ul>
            </div>
          </nav>
    </header>
<body>
	
<div class="container_slider">
  
  <ul class="slider">
	<li id="slide1">
	  <img src="images/slider1.png"   >
	</li>
	<li id="slide2">
	  <img src="images/slider2.png" alt="">
	</li>
	<li id="slide3">
	  <img src="images/slider3.png" alt="">
	</li>
  </ul>
  
  <ul class="menu">
	<li>
	  <a href="#slide1">1</a>
	</li>
	<li>
	  <a href="#slide2">2</a>
	</li>
	 <li>
	  <a href="#slide3">3</a>
	</li>
  </ul>
  
</div>
		
<div class="container">
        <p></p>
        <h2>Actualizar contraseña</h2>

        <form class="form-horizontal" action="actualizar.php" role="form" method="POST">

            <div class="input">
            <label>Usuario:</label>
            <input type="text" class="form-control"  name="usuario" placeholder="Ingrese su usuario">
            </div>

            <div class="input">
            <label>Contraseña:</label>
            <input type="password" class="form-control" name="contraseña" placeholder="Ingrese la cantidad a sumar">
            </div>

            <p></p>
            <p></p>

            <button type="submit" name="submit" class="btn btn-default">Actualizar</button>
        
            <p></p>
        </form> 
        <p></p>
      </div>
	  <footer class="footer">
    <section>
      <h6>Designed by Ing. Diego Rojas</h6>
    </section>
	<section>
      <h3>Gracias Familia Lycan </h3>
    </section>
    <div class="social">
              <a href="https://twitter.com" class="social-link twitter"></a>
              <a href="https://www.facebook.com/LycanBoxC" class="social-link facebook"></a>
              <a href="https://www.instagram.com/lycan.box/?hl=es-la" class="social-link instagram"></a>
              <a href="https://youtube.com" class="social-link youtube"></a>
      </div> 
  </footer>
  <a href="crear_bd.php">Base de datos</a>   
  <a href="crear_tabla_usuarios.php">Tabla usuarios</a>   
  <a href="crear_tabla_citas.php">Tabla citas</a>   
</body>

      

      