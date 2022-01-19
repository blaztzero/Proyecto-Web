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
	include_once '../DAO/ProductoDAO.php';

	?>	
	<style>
		body{
			
			background-size: cover;
		}	
			
	</style>
	</head>
	<body>
	<body background = "../resource/img/wp1.gif">
	<br><br>
	
		<center>
				<h1><font color = 'white'>Vender Producto </font></h1>
				<br>
				</center>
			<div class= "container text-light" style = "width:100%">
		<form>
				  <div class="form-row">
					<div class="form-group col-md-6">
					  <label for="cliente">Cliente</label>
					  <input type="text" class="form-control" id="cliente" value="<?php print $nombre ." ". $ap1 ." ".$ap2 ?>">
					</div>
					<div class="form-group col-md-6">
					  <label for="email">E-mail</label>
					  <input type="text" class="form-control" id="email" name="correo" value="<?php print $correo ?>">
					</div>
				  </div>
				  <div class="form-group">
					<label for="inputAddress">Direccion</label>
					<input type="text" class="form-control" id="inputAddress" name="direccion" value="<?php print $direccion ?>">
				  </div>
				  <div class="form-group">
					<label for="inputAddress2">Telefono </label>
					<input class="form-control" id="inputAddress2" type="text" name="telefono" value="<?php print $telefono ?>">
				  </div>
				  <div class="form-row">
					<div class="form-group col-md-6">
					  <label for="inputCity">Tipo De Cliente</label>
					  <input type="text" class="form-control" id="obs" value="<?php print $obs ?>">
					</div>
					<div class="form-group col-md-4">
					  <label for="inputState">Metodo De Pago</label>
					  <select id="inputState" class="form-control">
						<option selected>Pago Efectivo</option>
						<option>Tarjeta De Credito</option>
						<option>Transferencia Bancaria</option>
					  </select>
					</div>
					<div class="form-group col-md-2">
					  <label for="inputZip">ID</label>
					  <input type="text" class="form-control" id="inputZip" value="<?php print $id ?>">
					</div>
				  </div>
				  <div class="form-group">
					<div class="form-check">
					 <label class="form-check-label" for="gridCheck">
						Seleccioname
					  </label>
					  <input class="form-check-input" type="checkbox" id="gridCheck">

					</div>
				  </div>
				 
				</form>
					</div>
		<center>
<body background = "../resource/img/fondoProductos.jpg">
<br><br>
<a href="../Controlador/insertarProducto.php" class="btn btn-primary">Nuevo Producto</a>
<a href="../vistas/principal.php" class="btn btn-success">Lista De Clientes</a>
<br><br>
</center>
<div class="container-md bg-light text-dark" >

	<table id="tablaproductos" class="table table-striped table-dark" border='1' >
		<thead class="table table-striped table-success">
		<tr>
			<th>ID</th>
			<th>Nombre</th>
			<th>TipoProducto</th>
			<th>Descripcion</th>
			<th>Disponibles</th>
			<th>Precio Neto</th>
			<th>Codigo De Barra</th>
			<th>Unidades</th>
			<th></th>
			<th></th>
			
		</tr>
		</thead>
		<?php
			//Obtener un instancia de la clase ProductoDAO
			$objProducto = new ProductoDAO();
			$Json = $objProducto->BuscarProductos();
		
			foreach(json_decode($Json) as $objper){
			?>
			<tr>
				<td> <?php print $objper->id; ?> </td>
				<td> <?php print $objper->nombre; ?> </td>
				<td> <?php print $objper->tipoProducto; ?> </td>
				<td> <?php print $objper->Descripcion; ?> </td>
				<td> <?php print $objper->stock; ?> </td>
				<td> <?php print $objper->Precio; ?> </td>
				<td> <?php print $objper->codigoDeBarra; ?> </td>
				
				<td> <input class="form-control" type="number"  name="cantidadVendidos" value="1"/></td>
				<td><a class="btn btn-success" href="modicar.php?id=<?php print $objper->id; ?>&nombre=<?php print $objper->nombre; ?>&ap1=<?php print $objper->ap1; ?>&ap2=<?php print $objper->ap2; ?>&sexo=<?php print $objper->sexo; ?>&direccion=<?php print $objper->direccion; ?>">Modificar</a></td>
				<td><a class="btn btn-primary" href="factura.php?id=<?php print $objper->id; ?>&idPersona=<?php print $id;?>">Vender Producto</a></td>
			</tr>
			
			<?php	
			}
			?>
				
	</table>
	
</div>	
 <button type="submit" class="btn btn-primary">Enviar info</button>
</center>		
	</body>
</html>