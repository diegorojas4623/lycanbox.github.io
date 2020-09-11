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
    <!--div class="container"><h1>Disponibilidad de Clases</h1></div>
    
<div class="container_clases">

<div class="container_clase">

<h4>11 de septiembre de 2020 - <strong>Clase 06:00AM - 07:00AM</strong> </h4>
          <form class="form-horizontal" action="clases/insert_110920clase1.php" role="form" method="POST">
            
                            <div class="input">
                              <label>Identificación</label>
                              <input type="text" class="form-control"  name="id2" placeholder="Identificación">
                            </div>

                            <div class="input">
                              <label>Nombres:</label>
                              <input type="text" class="form-control"  name="fullname" placeholder="Nombres">
                            </div>

                            <div class="input">
                              <label>telefono:</label>
                              <input type="text" class="form-control" name="phone" placeholder="Apellidos">
                            </div>

                            <br>
                            <button type="submit" name="submit" class="btn btn-default">Agendar Clase</button>
                            <br>
                            
            </form>

            <?php

            $link = mysqli_connect("localhost", "root", "12345678", "dblycan");
            $res = mysqli_query($link, "SELECT * FROM 110920clase1 ");

            $fila = mysqli_num_rows($res);

            

            if($fila <= 1){
              echo '<span style="color:white; font-size:30px; background:green;">Cupos disponibles: '.(2-$fila).'</span>';
              
            }
            else{
              echo '<span style="color:white; font-size:30px; background:red;">Cupos disponibles: '.(2-$fila).'</span>';
            }
            ?>
            </div>
<div class="container_clase">
<h4>11 de septiembre de 2020 - <strong>Clase 07:30AM - 08:30AM</strong> </h4>
          <form class="form-horizontal" action="insertar_cita_admin.php" role="form" method="POST">
            
                            <div class="input">
                              <label>Identificación</label>
                              <input type="text" class="form-control"  name="id2" placeholder="Identificación">
                            </div>

                            <div class="input">
                              <label>Nombres:</label>
                              <input type="text" class="form-control"  name="fullname" placeholder="Nombres">
                            </div>

                            <div class="input">
                              <label>telefono:</label>
                              <input type="text" class="form-control" name="phone" placeholder="Apellidos">
                            </div>

                            <br>
                            <button type="submit" name="submit" class="btn btn-default">Agendar Clase</button>
                            <br>
            </form>
            <?php

            $link = mysqli_connect("localhost", "root", "12345678", "dblycan");
            $res = mysqli_query($link, "SELECT * FROM 110920clase1 ");

            $fila = mysqli_num_rows($res);

            

            if($fila <= 4){
              echo '<span style="color:white; font-size:20px; background:green;">Disponible '.$nickUsuarioL.'</span>';
              
            }
            else{
              echo '<span style="color:white; font-size:20px; background:red;">Clase no Disponible '.$nickUsuarioL.'</span>';
            }
            ?>
            </div>
<div class="container_clase">
<h4>11 de septiembre de 2020 - <strong>Clase 09:00AM - 10:00AM</strong> </h4>
          <form class="form-horizontal" action="insertar_cita_admin.php" role="form" method="POST">
            
                            <div class="input">
                              <label>Identificación</label>
                              <input type="text" class="form-control"  name="id2" placeholder="Identificación">
                            </div>

                            <div class="input">
                              <label>Nombres:</label>
                              <input type="text" class="form-control"  name="fullname" placeholder="Nombres">
                            </div>

                            <div class="input">
                              <label>telefono:</label>
                              <input type="text" class="form-control" name="phone" placeholder="Apellidos">
                            </div>

                            <br>
                            <button type="submit" name="submit" class="btn btn-default">Agendar Clase</button>
                            <br>
            </form>
            <?php

            $link = mysqli_connect("localhost", "root", "12345678", "dblycan");
            $res = mysqli_query($link, "SELECT * FROM 110920clase1 ");

            $fila = mysqli_num_rows($res);

            

            if($fila <= 4){
              echo '<span style="color:white; font-size:20px; background:green;">Disponible '.$nickUsuarioL.'</span>';
              
            }
            else{
              echo '<span style="color:white; font-size:20px; background:red;">Clase no Disponible '.$nickUsuarioL.'</span>';
            }
            ?>
            </div>
<div class="container_clase">
<h4>11 de septiembre de 2020 - <strong>Clase 04:30PM - 05:30PM</strong> </h4>
          <form class="form-horizontal" action="insertar_cita_admin.php" role="form" method="POST">
            
                            <div class="input">
                              <label>Identificación</label>
                              <input type="text" class="form-control"  name="id2" placeholder="Identificación">
                            </div>

                            <div class="input">
                              <label>Nombres:</label>
                              <input type="text" class="form-control"  name="fullname" placeholder="Nombres">
                            </div>

                            <div class="input">
                              <label>telefono:</label>
                              <input type="text" class="form-control" name="phone" placeholder="Apellidos">
                            </div>

                            <br>
                            <button type="submit" name="submit" class="btn btn-default">Agendar Clase</button>
                            <br>
            </form>
            <?php

            $link = mysqli_connect("localhost", "root", "12345678", "dblycan");
            $res = mysqli_query($link, "SELECT * FROM 110920clase1 ");

            $fila = mysqli_num_rows($res);

            

            if($fila <= 4){
              echo '<span style="color:white; font-size:20px; background:green;">Disponible '.$nickUsuarioL.'</span>';
              
            }
            else{
              echo '<span style="color:white; font-size:20px; background:red;">Clase no Disponible '.$nickUsuarioL.'</span>';
            }
            ?>
            </div>
<div class="container_clase">
<h4>11 de septiembre de 2020 - <strong>Clase 06:00PM - 07:00PM</strong> </h4>
          <form class="form-horizontal" action="insertar_cita_admin.php" role="form" method="POST">
            
                            <div class="input">
                              <label>Identificación</label>
                              <input type="text" class="form-control"  name="id2" placeholder="Identificación">
                            </div>

                            <div class="input">
                              <label>Nombres:</label>
                              <input type="text" class="form-control"  name="fullname" placeholder="Nombres">
                            </div>

                            <div class="input">
                              <label>telefono:</label>
                              <input type="text" class="form-control" name="phone" placeholder="Apellidos">
                            </div>

                            <br>
                            <button type="submit" name="submit" class="btn btn-default">Agendar Clase</button>
                            <br>
            </form>
            <?php

            $link = mysqli_connect("localhost", "root", "12345678", "dblycan");
            $res = mysqli_query($link, "SELECT * FROM 110920clase1 ");

            $fila = mysqli_num_rows($res);

            

            if($fila <= 4){
              echo '<span style="color:white; font-size:20px; background:green;">Disponible '.$nickUsuarioL.'</span>';
              
            }
            else{
              echo '<span style="color:white; font-size:20px; background:red;">Clase no Disponible '.$nickUsuarioL.'</span>';
            }
            ?>
            </div>
<div class="container_clase">
<h4>11 de septiembre de 2020 - <strong>Clase 07:30PM - 08:30PM</strong> </h4>
          <form class="form-horizontal" action="insertar_cita_admin.php" role="form" method="POST">
            
                            <div class="input">
                              <label>Identificación</label>
                              <input type="text" class="form-control"  name="id2" placeholder="Identificación">
                            </div>

                            <div class="input">
                              <label>Nombres:</label>
                              <input type="text" class="form-control"  name="fullname" placeholder="Nombres">
                            </div>

                            <div class="input">
                              <label>telefono:</label>
                              <input type="text" class="form-control" name="phone" placeholder="Telefono">
                            </div>

                            <br>
                            <button type="submit" name="submit" class="btn btn-default">Agendar Clase</button>
                            <br>
            </form>
            <?php

            $link = mysqli_connect("localhost", "root", "12345678", "dblycan");
            $res = mysqli_query($link, "SELECT * FROM 110920clase1 ");

            $fila = mysqli_num_rows($res);

            

            if($fila <= 4){
              echo '<span style="color:white; font-size:20px; background:green;">Disponible '.$nickUsuarioL.'</span>';
              
            }
            else{
              echo '<span style="color:white; font-size:20px; background:red;">Clase no Disponible '.$nickUsuarioL.'</span>';
            }
            ?>
            </div>
            </div-->
            
            

        
        
        
        <div class="container" > 
                  
        <h1>Clases agendadas</h1>  
        <div class="panel panel-default">
              <div class="panel-heading"> <strong>11 septiembre de 2020 Clase 06:00AM - 07:00AM</strong> </div>
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Nro</th>
                    <th>Identificación</th>
                    <th>Nombres</th>
                    <th>telefono</th>
                    
                  </tr>
                </thead>
                <tbody>
				<?php 
          $sql="SELECT * from 110920clase1" ;
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){
          ?>
        
        <tr>
          <td class='cam_editable'><?php echo $mostrar['id'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['id2'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['fullname'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['phone'] ?></td>
          </tr>
        <?php 
          }
          ?>
            </tbody>
          </table>
          
          </div> 
           
          </div>  
          
          <p></p>
          <div class="panel panel-default">
              <div class="panel-heading"> <strong>11 septiembre de 2020 Clase 07:30AM - 08:30AM</strong> </div>
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Nro</th>
                    <th>Identificación</th>
                    <th>Nombres</th>
                    <th>telefono</th>
                    
                  </tr>
                </thead>
                <tbody>
				<?php 
          $sql="SELECT * from 110920clase2" ;
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){
          ?>
        
        <tr>
          <td class='cam_editable'><?php echo $mostrar['id'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['id2'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['fullname'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['phone'] ?></td>
          </tr>
        <?php 
          }
          ?>
            </tbody>
          </table>
          
          </div> 
           
          </div>  
          <a href="inicio_admin.php" align class="btn btn-info" role="button">Atrás</a>
          <p></p>
        </div>
            
            
        
    
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