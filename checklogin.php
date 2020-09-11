<?php

require_once "configuracion/configuracion.php";


$contraseña1=$_POST["contraseña"];
$clavemd5=md5($contraseña1);

$error1= "Acepte para continuar";
if (isset ($_POST ["usuario"])&& isset($clavemd5)){
	#Autenticación del usuario 
	$bd = mysqli_connect(IPSEVER, USERDB, PDWB, DB,PORT); 
	if ($bd) {
		$sql = "SELECT name, lastname, email FROM usuarios WHERE nombre_usuario='". $_POST["usuario"]."' AND contraseña_usuario='".$_POST["contraseña"]. "' AND estado_usuario=1"; 
		if ($resultado=$bd -> query($sql)){ //ejecuta el Query
			if ($fila=mysqli_fetch_array($resultado, MYSQLI_ASSOC)) {
				//reclama los datos
				#usuario autenticado ok
				//print_r($fila);
				session_start(); // Activo el registro de variables en la sesión

				$_SESSION["datos"]=$fila;
				$_SESSION['login'] = true;
	    		$_SESSION['start'] = time();
	    		$_SESSION['expire'] = $_SESSION['start'] + (60 * 60);

				header ('location: http://localhost/lycanbox/inicio.php');
			} else {
				$error1="Error en la cuenta o la clave";
			}
		} else {$error1="Error en Query: $sql";

		}
	} else {
		$error1="Error en conexión a server B.D.";
	}

}

?>