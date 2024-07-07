<?php
	require_once("../modelos/usuarios.model.php");
	$usermodel = new Usuario();

	if (isset($_POST['btningresar'])){
					
		
			//variables auxiliares para hcer validaciones antes de insertar en la base de datos
			$usuario = $_POST['usuario'];
			$clave = $_POST['contraseña'];


			//aqui se pasan la variables auxiliares al modelo una vez que se validaron
			$usermodel->setContraseña($clave);
			@$usermodel->setNom_user($usuario);
			
			$data = $usermodel->Login();
			
			if (!$data) {
			
				echo "usuarios o contraseña invalidos";
			} else{
				echo "login exitoso";
				header("location:../vistas/sing-up.php");

			}
  	}
	  if (isset($_POST['btnRegistrar'])){
		
			//variables auxiliares para hcer validaciones antes de insertar en la base de datos
			$nomuser = $_POST['usuario'];
			$nombre = $_POST['nombre'];
			$apellido = $_POST['apellido'];
			$cedula = $_POST['cedula'];
			$clave = $_POST['contraseña'];



			//aqui se pasan la variables auxiliares al modelo una vez que se validaron
			$usermodel->setNom_user($nomuser);
			$usermodel->setNombre($nombre);
			$usermodel->setApellido($apellido);
			$usermodel->setCedula($cedula);
			$usermodel->setContraseña($clave);

			$usermodel->Registrarse();

			header("location:../vistas/sing-up.php");
			
		
  	}
	
?>