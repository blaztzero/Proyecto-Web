<html>

<head>
<?php
include_once 'layout.php';
include_once '../DAO/PersonaDAO.php';
?>
</head>
<?php
	session_start();

	
		
		if( isset($_SESSION["usuario"]) == true )
		{
			$usuario = $_SESSION["usuario"];
			echo "
					<br><br>
					<h2>                                        bienvenido Sr.".$usuario[0]  . "</h2>";
			
			
			
		}else{
			
			echo ("no encontre session");
			header('Location: ../vistas/errorLogin.php');
		}
?>
<body>


<br><br>
<div class="jumbotron" >
<center>
	<a href="../Controlador/insertarPersona.php" class="btn btn-primary">Nuevo Cliente</a>
	<br><br>
	<table class="table table-striped" border='1' style = "width:50%">
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Apellido 1</td>
			<td>Apelldio 2</td>
			<td>telefono</td>
			<td>Correo</td>
			<td>Direccion</td>
			<td>Observacion</td>
			<td></td>
			<td></td>
		</tr>
		<?php
			//Obtener un instancia de la clase PersonaDAO
			$objPersona = new PersonaDAO();
			$Json = $objPersona->BuscarPersonas();
		
			foreach(json_decode($Json) as $objper){
			?>
			<tr>
				<td> <?php print $objper->idpersona; ?> </td>
				<td> <?php print $objper->nombre; ?> </td>
				<td> <?php print $objper->ap1; ?> </td>
				<td> <?php print $objper->ap2; ?> </td>
				<td> <?php print $objper->telefono; ?> </td>
				<td> <?php print $objper->correo; ?> </td>
				<td> <?php print $objper->direccion; ?> </td>
				<td> <?php print $objper->observacion; ?> </td>
				<td><a class="btn btn-danger" href="eliminar.php?id=<?php print $objper->id; ?>">Eliminar</a></td>
				<td><a class="btn btn-success" href="modicar.php?id=<?php print $objper->id; ?>&nombre=<?php print $objper->nombre; ?>&ap1=<?php print $objper->ap1; ?>&ap2=<?php print $objper->ap2; ?>&sexo=<?php print $objper->sexo; ?>&direccion=<?php print $objper->direccion; ?>">Modificar</a></td>
			</tr>
			<?php	
			}
			?>
	</table>
	
	
</center>
</div>
</body>



</html>