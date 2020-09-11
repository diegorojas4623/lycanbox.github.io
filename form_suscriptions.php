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
  ?><!DOCTYPE html>
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
<h1>Suscripciones</h1>
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	<button type="button" onclick="ventananuevo();" class="btn btn-success btn-lg" > 
          <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Agregar
    </button>
    
<!--//////////////////////////////////////////////////////////////////////////////////////////////////-->
	</div>

    <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
              <h4 class="modal-title">Nueva suscripción</h4>
            </div>
            <form class="form-horizontal" action="insert_suscription.php" role="form" method="POST">
            <div class="col-lg-12">

                <div class="input">
                  <label>Nombres</label>
                  <input type="text" class="form-control"  name="nombres" placeholder="Nombres">
                </div>

                <div class="input">
                  <label>Apellidos:</label>
                  <input type="text" class="form-control"  name="apellidos" placeholder="Apellidos">
                </div>

                <div class="input">
                  <label>Correo:</label>
                  <input type="text" class="form-control" name="correo" placeholder="Correo">
                </div>

                <div class="input">
                  <label>Tipo de documento:</label>
                  <select class="form-control" name="tid" id="tipo">
                                              <option>Cédula de ciudadnía</option>
                                              <option>Tarjeta de identidad</option>
                                              <option>Pasaporte</option>
                                          </select>
                </div>

                <div class="input">
                  <label>Nro de documento:</label>
                  <input type="text" class="form-control" name="id" placeholder="Nro de documento">
                </div>

                <div class="input">
                  <label>Grupo sanguineo:</label>
                  <select class="form-control" name="rh" id="tipo">
                                              <option>O+</option>
                                              <option>O-</option>
                                              <option>A+</option>
                                              <option>A-</option>
                                              <option>B+</option>
                                              <option>B-</option>
                                              <option>AB+</option>
                                              <option>AB-</option>
                                          </select>
                </div>
                
                <div class="input">
                  <label>Fecha de nacimieto:</label>
                  <input type="date" class="form-control" name="fn" placeholder="I">
                </div>
                
                <div class="input">
                  <label>Dirección:</label>
                  <input type="text" class="form-control" name="direccion" placeholder="Dirección">
                </div>
                
                <div class="input">
                  <label>Teléfono:</label>
                  <input type="text" class="form-control" name="telefono" placeholder="Teléfono">
                </div>
                
                <div class="input">
                  <label>Vencimiento plan:</label>
                  <input type="date" class="form-control" name="vencimiento" placeholder="">
                </div>
                <br>
                <button type="submit" name="submit" class="btn btn-success btn-lg">Registrar</button>
            </div>  
            </form>
            <div class="modal-footer">
            </div>
          </div>
        </div>
      </div>
      
	
<!--//////////////////////////////////////////////////-->

<br>
          <div class="container">
          <div class="panel panel-default">
              <div class="panel-heading"> <strong>LISTA DE SUSCRIPCIONES</strong> </div>
            <div class="table-responsive">
              <table class="table table-striped table-hover">
                <thead>
                  <tr>
                    <th>Identificación</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Correo</th>
                    <th>Telefono</th>
                    <th>RH</th>
                    <th>F/nacimiento</th>
                    <th>Dirección</th>
                    <th>Ven/plan</th>
                    
                  </tr>
                </thead>
                <tbody>
				<?php 
          $sql="SELECT * from suscriptions ORDER BY vencimiento" ;
          $result=mysqli_query($conexion,$sql);

          while($mostrar=mysqli_fetch_array($result)){
          ?>
        
        <tr>
          <td class='cam_editable'><?php echo $mostrar['id'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['name'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['lastname'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['email'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['phone'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['rh'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['fn'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['adress'] ?></td>
          <td class='cam_editable'><?php echo $mostrar['vencimiento'] ?></td>
          
            
        </tr>
        <?php 
          }
          ?>
            </tbody>
          </table>
          </div>  
          </div>  
          </div>
        </div>
        <p></p>
      </div>
      <p></p>
<div>

  <div class="container">

	<form class="form-horizontal" action="actualizar_suscripcion.php" role="form" method="POST">
    <div class="col-lg-12">
    <div class="input">
    <label>Nro de documento:</label>
    <input type="text" class="form-control" name="id" placeholder="Nro de documento">
    </div>

    <div class="input">
    <label>Vencimiento plan:</label>
    <input type="date" class="form-control" name="vencimiento" placeholder="">
    </div>
    <br>
    <button type="submit" name="submit" class="btn btn-info">Actualizar</button>
    </div>  
    </form>
    </div>
  
    <br>
    <div class="container">

    <form class="form-horizontal" action="eliminar_suscripcion.php" role="form" method="POST">
      <div class="col-lg-12">
      <div class="input">
      <label>Nro de documento:</label>
      <input type="text" class="form-control" name="id" placeholder="Nro de documento">
      </div>

      
      <br>
      <button type="submit" name="submit" class="btn btn-danger">Eliminar</button>
          <p></p>
      <br>
      <a href="inicio_admin.php" align class="btn btn-info" role="button">Atrás</a>
      </div>  
      
      </form>
      
      
      </div>
  
          




<p></p>
<p></p>
<script src="js/jquery-2.2.3.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>
<script src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/change.js"></script>
<script type="text/javascript">
	function cambiar(){
          $('#modal2').modal('show');

        }
	
        function ventananuevo(){
          $('#modal').modal('show');

        }
    </script>






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
