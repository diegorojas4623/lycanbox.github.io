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
		<div class="panel panel-default">
  			<div class="panel-heading" align= "center" style="background : #FFFFFF;">
  			<h1><?php echo "Por favor valide su ingreso";; ?> </h1></div>

  			<div class="panel-body">

				 <form class="form-horizontal" action="checklogin.php" method="post">
				 
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="usuario">Usuario:</label>
				    <div class="col-sm-10">
				      <input type="text" class="form-control" id="usuario" name="usuario" placeholder="Ingrese su usuario" required />
				    </div>
				  </div>
				  <p></p>
				  <div class="form-group">
				    <label class="control-label col-sm-2" for="Contraseña">Contraseña:</label>
				    <div class="col-sm-10">
				      <input type="password" class="form-control" id="contraseña" name="contraseña" placeholder="Ingrese su contraseña" required />
				    </div>
				  </div>

				  <div class="form-group">
				    <div class="col-sm-offset-2 col-sm-10">
				      <button type="submit" class="btn btn-default">Iniciar sesión	</button>
					  	<p></p>
						  <div class="boton_registro">
				  		<a href="registro.php"  class="btn btn-info" role="button">Registrarme</a>
						  </div>
						  <br>
						  <a href="form_actualizar.php">Olvidé mi contraseña</a>
					</div>
				  </div>

				  
				</form>
				<hr />
				<div><h3> <?php echo $error1; ?></h3> </div>

				
			</div>
  		</div>
	  </div>
	  <p>
		  <p></p>
	  </p>
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
</html>