<?php

	include_once 'conexion.php';
	session_start();
	$nombre = $_POST["txtusuario"];
	$password = $_POST["txtpassword"];

			$con = Conectar();
			
			$sql = "select * from usuario where nombreusuario = :nombreusuario and contrasena= :contrasena";
			
			$respuesta = $con->prepare($sql);
			$respuesta->execute(array('nombreusuario' => $nombre , 'contrasena' => $password));
			
			$Result = $respuesta->fetchAll(PDO::FETCH_ASSOC);
			

			$Json = json_encode($Result);
			
			
			
			if ( $Json != "[]" ){
			
				$_SESSION["usuario"] = $Json;
				header('Location: ../vistas/principal.php');
			
			}else{
	       
		   echo "usuario no encontrado ingrese nuevamente";	
		    
		     header('Location: ../vistas/error.php');
			} 
	
	
	

?>