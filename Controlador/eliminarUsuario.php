<?php
include_once 'PersonaDAO.php';

	$id = $_GET["id"];
	$objPersona = new PersonaDAO();
	
	$respuesta = $objPersona->delete_persona($id);
	
	//echo $respuesta;
	header("Location: lista.php");
	
?>
<html>
<head></head>
<body>
	<a href="lista.php">Volver a la lista</a>
</body>
</html>

