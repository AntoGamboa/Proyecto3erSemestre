<?php
	if (isset($_POST['btningresar'])){
		if (empty($_POST['usuario']) || empty($_POST['contraseña'])){
	  		echo "<div>LOS CAMPOS ESTAN VACIOS</div>";
		}else{
			$usuario = $_POST['usuario'];
			$clave = $_POST['contraseña'];
			$sql = $conexion->query(" select * from usuario where usuario='$usuario' and clave='$clave' ");
			if ($datos=$sql->fetch_object()) {
				header("location:prueba.php");
			} else {
				echo "<div>ACCESO DENEGADO</div>";
			}		
		}
  	}
?>