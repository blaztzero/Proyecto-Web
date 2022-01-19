<html>

<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</head>

<body>
<?php
include_once 'PersonaDAO.php';
?>

<br><br>
<div class="jumbotron" >
<center>
	<a href="index.html" class="btn btn-primary">Nueva Persona</a>
	<br><br>
	<table class="table table-striped" border='1'>
		<tr>
			<td>ID</td>
			<td>Nombre</td>
			<td>Apellido 1</td>
			<td>Apelldio 2</td>
			<td>Sexo</td>
			<td>direccion</td>
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
				<td> <?php print $objper->id; ?> </td>
				<td> <?php print $objper->nombre; ?> </td>
				<td> <?php print $objper->ap1; ?> </td>
				<td> <?php print $objper->ap2; ?> </td>
				<td> <?php print $objper->sexo; ?> </td>
				<td> <?php print $objper->direccion; ?> </td>
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