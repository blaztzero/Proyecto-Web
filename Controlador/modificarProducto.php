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

	?>	
	<style>
		body{
			
			background-size: cover;
		}	
			
	</style>
	</head>
	<body>
	<body background = "../resource/img/FondoInsertarClientes.jpg">
	<br><br>
		<div class= "container" style = "width:100%">
		<form action="update.php" method="POST" style = "width:100%">
			<center>
				<h1>Modificar Cliente </h1>
				<br>
				<input type="hidden" name="id" value="<?php print $id ?>" />
				
				<table class="table table-striped table-dark" border='1' style = "width:90%">
					<tr>
						<td>Nombre:</td>
						<td><input required autocomplete="off" type="text" name="nombre" value="<?php print $nombre ?>" style = "width:100%"/></td>
					<tr>
					<tr>
						<td>Apellido Paterno:</td>
						<td><input required autocomplete="off" type="text" name="ap1" value="<?php print $ap1 ?>" style = "width:100%"/></td>
					<tr>
					<tr>
						<td>Apellido materno:</td>
						<td><input required autocomplete="off" type="text" name="ap2" value="<?php print $ap2 ?>"style = "width:100%"/></td>
					<tr>
					<tr>
						<td>Telefono:</td>
						<td><input required autocomplete="off" type="text" name="telefono" value="<?php print $telefono ?>" style = "width:100%"/></td>
					<tr>
					<tr>
						<td>correo:</td>
						<td><input required autocomplete="off" type="text" name="correo" value="<?php print $correo ?>" style = "width:100%"/></td>
					<tr>
					<tr>
						<td>Direccion:</td>
						<td><input required autocomplete="off" type="text" name="direccion" value="<?php print $direccion ?>" style = "width:100%"/></td>
					<tr>
					<tr>
						<td>obs:</td>
						<td>
							<select required name="obs" style = "width:100%">
								<option value='Cliente Final'>Cliente Final</option>;	
								<option value='Cliente empresa'>Cliente Empresa</option>;
								
							</select>
						</td>
					<tr>
					
					<tr>
						<td colspan="2">
						<br>
							<input type="submit" value="Guardar Modificaciones" />
						</td>
					<tr>
				</table>
			</center>
			
		</form>
		</div>
	</body>
</html>