<?php

	$id = $_GET["idpersona"];
	$nombre = $_GET["nombre"];
	$ap1 = $_GET["ap1"];
	$ap2 = $_GET["ap2"];
	$telefono = $_GET["telefono"];
	$correo = $_GET["correo"];
	$direccion = $_GET["direccion"];
	$obs = $_GET["observacion"];
	
	
?>
<html>
	<head>
	<?php
	include_once '../vistas/layout.php';
	include_once '../vistas/navbar.php';

	?>	
	<?php
	//session_start();

		if( isset($_SESSION["usuario"]) == true )
		{
			$usuario = $_SESSION["usuario"];
			
			$usu = json_decode($usuario);
			
		/* 	echo "<br><br><center><h2><font color = 'white'>
			Bienvenido Sr. ". $usu[0]->nombres . " " . $usu[0]->ap1 . " " . $usu[0]->ap2 ."
			</font></h2></center>";
			 */
			
			
		}else{
			
			echo ("no encontre session");
			session_destroy();
			header('Location: ../vistas/errorLogin.php');
		}
?>
	<style>
		body{
			
			background-size: cover;
		}	
			
	</style>
	</head>
	<body>
	<body background = "../resource/img/FondoProductos.jpg">
	
		<div class= "container">
		
		<form action="updatePersona.php" method="POST" style = "width:100%">
			<center>
				<h1><font color = 'white'>Modificar Cliente </font></h1>
				<br>
				<input type="hidden" name="id" value="<?php print $id ?>" />
				
				<table class="table table-striped table-dark" border='1' style = "width:90%">
					<tr>
						<td>Nombre:</td>
						<td><input class= "form-control" required autocomplete="off" type="text" name="nombre" value="<?php print $nombre ?>" style = "width:100%"/></td>
					<tr>
					<tr>
						<td>Apellido Paterno:</td>
						<td><input class= "form-control" required autocomplete="off" type="text" name="ap1" value="<?php print $ap1 ?>" style = "width:100%"/></td>
					<tr>
					<tr>
						<td>Apellido materno:</td>
						<td><input class= "form-control" required autocomplete="off" type="text" name="ap2" value="<?php print $ap2 ?>"style = "width:100%"/></td>
					<tr>
					<tr>
						<td>Telefono:</td>
						<td><input class= "form-control" required autocomplete="off" type="text" name="telefono" value="<?php print $telefono ?>" style = "width:100%"/></td>
					<tr>
					<tr>
						<td>correo:</td>
						<td><input class= "form-control" required autocomplete="off" type="text" name="correo" value="<?php print $correo ?>" style = "width:100%"/></td>
					<tr>
					<tr>
						<td>Direccion:</td>
						<td><input class= "form-control" required autocomplete="off" type="text" name="direccion" value="<?php print $direccion ?>" style = "width:100%"/></td>
					<tr>
					<tr>
						<td>obs:</td>
						<td>
							<select class= "form-control" required name="obs" style = "width:100%">
								<option value='Cliente Final'>Cliente Final</option>;	
								<option value='Cliente empresa'>Cliente Empresa</option>;
								
							</select>
						</td>
					<tr>
					
					<tr>
						<td colspan="2">
						<br>
							<input class= "form-control"type="submit" value="Guardar Modificaciones" />
						</td>
					<tr>
				</table>
			</center>
			
		</form>
		</div>
	</body>
</html>