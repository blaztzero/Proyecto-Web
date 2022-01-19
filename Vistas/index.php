<html>

<head>
	<?php
		include_once ("layout.php");
	?>
	<style>
		body{
			
			background-size: cover;
		}	
			
	</style>
</head>

<body background = "../resource/img/wp4.jpg">
	
	<form action="../Controlador/ValidaSession.php" method="POST">
	<center>
	<br><br><br>
		<table border="0" style = "width:20%">
			<tr>
			<th colspan= "2" align="center"><h2><font color = "white">Iniciar Session </font></h2></th>
			<tr>
			<tr>
			<th align = "left" ><font color = "white">Usuario: </font></th>
				<td><input class = "form-control" type="text" required autocomplete="off" name="txtusuario" /> </td>
			</tr>
			<tr>
				<th align = "left"><font color = "white">Contraseña: </font></th>
				<td><input class = "form-control" type="password" required autocomplete="off" name="txtpassword" /> </td>
			</tr>
			<tr>
			<td colspan= "3">
			<button class = "btn btn-primary " type="submit" name="btnEntrar">Iniciar Session </button>	
			</td>
		</table>
	</center>	
	</form>
	
</body>

</html>