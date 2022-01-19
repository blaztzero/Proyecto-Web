<?php
include_once '../DAO/PersonaDAO.php';

	$id = $_GET["idpersona"];
	$objPersona = new PersonaDAO();
	
	$respuesta = $objPersona->delete_persona($id);
	
	echo $respuesta;
	//header("Location: ../vistas/principal.php");
	
?>
<html>
<head></head>
<body>
	<a href="lista.php">Volver a la lista</a>
</body>
</html>

