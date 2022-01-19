<?php
	include_once "../DAO/PersonaDAO.php";
	
	$objPersona = new PersonaDAO();
	
	$respuesta = $objPersona->Update($_POST["id"], 
										$_POST["nombre"], 
										$_POST["ap1"], 
										$_POST["ap2"], 
										$_POST["telefono"],
										$_POST["correo"] ,
										$_POST["direccion"],
										$_POST["obs"]);
	

	
	//echo $respuesta;
	header("Location: ../Vistas/Principal.php");
	
?>