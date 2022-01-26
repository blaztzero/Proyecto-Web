<html>

<head>
<?php
include_once '../vistas/layout.php';
include_once '../DAO/PersonaDAO.php';
include_once '../vistas/navbar.php';
?>

<?php
//	session_start();

	
		
		if( isset($_SESSION["usuario"]) == true )
		{
			$usuario = $_SESSION["usuario"];
			
			$usu = json_decode($usuario);
			
			/* echo "
					<br><br><center>
					<h2><font color = 'white'>Bienvenido Sr. ". $usu[0]->nombres . " " . $usu[0]->ap1 . " " . $usu[0]->ap2 ."</font></h2></center><br><br>";
			 */
			
			
		}else{
			
			echo ("no encontre session");
			header('Location: ../vistas/errorLogin.php');
		}
?>
</head>
	<style>
		body{
			
			background-size: cover;
		}	
			
	</style>
<body>
<style>
		body{
			
			background-size: cover;
		}	
			
	</style>

<body background = "../resource/img/water-47.gif">
	<br>
		<center>
		<div class= "container" style = "width:100%">
		<form action="recibe.php" method="POST" >
			<table border="0" style = "width:80%">
				<center>
				<h1><font color = 'white'>Ingresar Nuevo Cliente </font></h1>
				<br><br><br>
				<tr>
					<td>Nombre: </td>
					<td><input class= "form-control" type="text" required autocomplete="off" name="txtnombre" id="txtnombre"/> </td>
				<tr>
				<tr>
					<td>Apellido Paterno: </td>
					<td><input class= "form-control" type="text" required autocomplete="off" name="txtapellido1" id="txtapellido1"/> </td>
				<tr>
				<tr>
					<td>Apellido Materno: </td>
					<td><input class= "form-control" type="text" required autocomplete="off" name="txtapellido2" id="txtapellido2"/> </td>
				<tr>
				<tr>
					<td>Telefono: </td>
					<td><input class= "form-control" type="text" required autocomplete="off" name="txttelefono" id="txttelefono"/> </td>
				<tr>
				<tr>
					<td>Correo: </td>
					<td><input class= "form-control" type="email" required autocomplete="off" name="txtcorreo" id="txtcorreo"/> </td>
				<tr>
				<tr>
					<td>Direccion: </td>
					<td><input class= "form-control" type="text" required autocomplete="off" name="txtdireccion" id="txtdireccion"/> </td>
				<tr>
				<tr>
					<td>Observaciones: </td>
					<td>							<select class= "form-control" required name="obs" style = "width:100%">
								<option value='Cliente Final'>Cliente Final</option>;	
								<option value='Cliente empresa'>Cliente Empresa</option>;
								
							</select></td>
				<tr>
				<tr>
				<tr>
					<td>Empresa: </td>
					<td><input class= "form-control" type="text" required autocomplete="off" name="txtempresa" id="txtempresa"/> </td>
				<tr>
				</tr>
				<tr>
					<td colspan="2">
						<input class= "btn btn-primary" type="submit" value="Guardar Cliente"/>
					</td>
				</tr>
			</table>
		</form>
		</div>
		</center>
</body>

</html>