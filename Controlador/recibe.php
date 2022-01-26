<?php
	
  include_once '../DAO/PersonaDAO.php';	
	
  $nombre = $_POST["txtnombre"];
  $Ap1 = $_POST["txtapellido1"];
  $Ap2 = $_POST["txtapellido2"];
  $telefono = $_POST["txttelefono"];
  $correo = $_POST["txtcorreo"];
  $Direccion = $_POST["txtdireccion"];
  $observaciones = $_POST["obs"];
  $empresa = $_POST["txtempresa"];
  
  
  //Conexion a una DB y alamcenando informacion
  $ObjPersonaDAO = new PersonaDAO();
  $respuesta = $ObjPersonaDAO->Insert($nombre, $Ap1, $Ap2, $telefono,$correo,$Direccion,$observaciones,$empresa);
  
  header("Location: ../vistas/VistaClientes.php");
  
 
  
 
?>

<html>

<head>
</head>

<body>
	<center>
		<table border="10">
			<tr>
				<td>
					<?php print $Frase; ?>
				</td>
			</tr>
		</table>
	</center>
</body>

</html>
