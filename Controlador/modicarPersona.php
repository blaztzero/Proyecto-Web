<?php

	$id = $_GET["id"];
	$nombre = $_GET["nombre"];
	$ap1 = $_GET["ap1"];
	$ap2 = $_GET["ap2"];
	$telefono = $_GET["telefono"];
	$correo = $_GET["correo"];
	$direccion = $_GET["direccion"];
	$obs = $_GET["obs"];
	
	
?>
<html>
	<head></head>
	<body>
	<br><br>
		
		<form action="update.php" method="GET">
			<center>
				<h1>Modificar Cliente </h1>
				<br>
				<input type="hidden" name="id" value="<?php print $id ?>" />
				
				<table	border="0">
					<tr>
						<td>Nombre:</td>
						<td><input required autocomplete="off" type="text" name="nombre" value="<?php print $nombre ?>" /></td>
					<tr>
					<tr>
						<td>Apellido Paterno:</td>
						<td><input required autocomplete="off" type="text" name="ap1" value="<?php print $ap1 ?>" /></td>
					<tr>
					<tr>
						<td>Apellido materno:</td>
						<td><input required autocomplete="off" type="text" name="ap2" value="<?php print $ap2 ?>" /></td>
					<tr>
					<tr>
						<td>Telefono:</td>
						<td><input required autocomplete="off" type="text" name="telefono" value="<?php print $telefono ?>" /></td>
					<tr>
					<tr>
						<td>correo:</td>
						<td><input required autocomplete="off" type="text" name="correo" value="<?php print $correo ?>" /></td>
					<tr>
					<tr>
						<td>Direccion:</td>
						<td><input required autocomplete="off" type="text" name="direccion" value="<?php print $Direccion ?>" /></td>
					<tr>
					<tr>
						<td>obs:</td>
						<td>
							<select required name="obs">
								<?php 
									if($sexo == "Cliente Final"){
										echo "<option value='Cliente Final'>Cliente Final</option>";	
										echo "<option value='Cliente empresa'>Cliente Empresa</option>";
									}else if($sexo == "Cliente empresa"){
										echo "<option value='Cliente empresa'>Cliente empresa</option>";
										echo "<option value='Cliente final'>Cliente final</option>";									
									}
									
									
								?>
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
		
	</body>
</html>