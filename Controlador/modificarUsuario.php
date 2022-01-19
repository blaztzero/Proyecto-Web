<?php

	$id = $_GET["id"];
	$nombre = $_GET["nombre"];
	$ap1 = $_GET["ap1"];
	$ap2 = $_GET["ap2"];
	$sexo = $_GET["sexo"];
	$Direccion = $_GET["direccion"];
	/*
	echo $id . "<br>";
	echo $nombre . "<br>";
	echo $ap1 . "<br>";
	echo $ap2 . "<br>";
	echo $sexo;
	*/
	
?>
<html>
	<head></head>
	<body>
	<br><br>
		
		<form action="update.php" method="GET">
			<center>
				<h1>Modificar Persona </h1>
				<br>
				<input type="hidden" name="id" value="<?php print $id ?>" />
				
				<table	border="0">
					<tr>
						<td>Nombre:</td>
						<td><input required autocomplete="off" type="text" name="nombre" value="<?php print $nombre ?>" /></td>
					<tr>
					<tr>
						<td>Apellido 1:</td>
						<td><input required autocomplete="off" type="text" name="ap1" value="<?php print $ap1 ?>" /></td>
					<tr>
					<tr>
						<td>Apellido 2:</td>
						<td><input required autocomplete="off" type="text" name="ap2" value="<?php print $ap2 ?>" /></td>
					<tr>
					<tr>
						<td>Sexo:</td>
						<td>
							<select required name="sexo">
								<?php 
									if($sexo == "F"){
										echo "<option value='F'>Femenino</option>";	
										echo "<option value='M'>Masculino</option>";
									}else if($sexo == "M"){
										echo "<option value='M'>Masculino</option>";
										echo "<option value='F'>Femenino</option>";									
									}
									
									
								?>
							</select>
						</td>
					<tr>
					<tr>
						<td>Direccion:</td>
						<td><input required autocomplete="off" type="text" name="direccion" value="<?php print $Direccion ?>" /></td>
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