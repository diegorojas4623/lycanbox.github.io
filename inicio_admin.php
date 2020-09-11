<?php

require_once "configuracion/configuracion.php";

  session_start();
   
  if (isset($_SESSION['login']) && $_SESSION['login'] == true) {
   
  } else {
     
      echo "Esta página es solo para usuarios registrados.<br>";
     echo "<br><a href='index.php'>Iniciar sesion</a>";
     echo "<br><br><a href='registro.php'>Registrarme</a>";
 
  exit;
  }
   
  $now = time();
   
  if($now > $_SESSION['expire']) {
  session_destroy();
   
  echo "Su sesion a terminado,
  <a href='index.php'>Necesitas iniciar sesion</a>";
  exit;
  }
  ?>
  <?php
  $conexion=mysqli_connect('localhost','root','12345678','dblycan');
  ?>
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
                <li><a href="index.html">Cerrar sesión</a></li>
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
<!--div class="space_admin">
        <h1>Clases agendadas</h1>
        <div class="container">
        <table class="table table-bordered">
        <tbody>
          <tr>
          <td>NOMBRE</td>
          <td>INICIO</td>
          <td>FIN</td>
          
          <?php 
          $sql="SELECT * from eventos";
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){
          ?>

        <tr>
          <td><?php echo $mostrar['title'] ?></td>
          <td><?php echo $mostrar['inicio_normal'] ?></td>
          <td><?php echo $mostrar['final_normal'] ?></td>
        </tr>
        <?php 
          }
          ?>
            </tbody>
          </table>
          <a href="inicio.php" align class="btn btn-info" role="button">Atrás</a>
        </div>
          
      
      
        <p></p>
      </div>
      <p></p>
<div-->

    
<div class="container">
<p></p>
  <h2>Administrador LycanBox</h2>
  <p>opciones:</p>            
  <table class="table table-bordered">
    <!--<thead>
      <!--<tr>
        <th><p align="center">CRUD</th>
      </tr>-->
    </thead>
    <tbody>
      <tr>
      <td><a class="options" href="form_suscriptions.php"> <img src="images/icon.jpg" width="200" name="venta"> Suscripciones </a></td>
      </tr>
      <tr>
      <td><a class="options" href="form_class.php"> <img src="images/icon.jpg"   width="200" name="crear"> Agendamiento de clases</a></td>
      </tr>
      </tbody>
  </table>
<p></p>
<a href="index.html" align class="btn btn-info" role="button">Cerrar sesión</a>
</div>
<br>
    
    <footer class="footer">
        <section>
        <h5>Designed by Ing. Diego Rojas</h5>
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
    </body>
</html>