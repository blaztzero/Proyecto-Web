<?php

	$idPersona = $_GET["idpersona"];
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
				<h1><font color = 'white'>Agendar Pedido </font></h1>
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
					  <select id="metodoPago" class="form-control">
						<option selected>Pago Efectivo</option>
						<option>Tarjeta De Credito</option>
						<option>Transferencia Bancaria</option>
						<option>Cheque 30 Dias</option>
					  </select>
					</div>
					<div class="form-group col-md-2">
					  <label for="inputZip">ID</label>
					  <input type="text" class="form-control" id="idPersona" value="<?php print $idPersona ?>">
					</div>
					<div class="form-group col-md-6">
					  <label for="inputCity">Direccion De Envio</label>
					  <input type="text" class="form-control" id="direccionEnvio" value="">
					</div>
					<div class="form-group col-md-4">
					  <label for="inputState">Pais Destino</label>
					  <select id="paisDestino" class="form-control">
						<option selected>Chile</option>
						<option>Argentina</option>
						<option>Brasil</option>
						<option>Peru</option>
						<option>Francia</option>
						<option>Colombia</option>
						<option>Espania</option>
						<option>EEUU</option>
						<option>Dinamarca</option>
						<option>Italia</option>
						<option>Uruguay</option>
						<option>China</option>
						<option>Japon</option>
						<option>Rusia</option>
						<option>Portugal</option>
						<option>Grecia</option>
						<option>Mexico</option>
						<option>Canada</option>
						<option>Holanda</option>
						<option>Republica Checa</option>
						<option>Korea del sur</option>
						<option>Ecuador</option>
						<option>Nueva zelanda</option>
						<option></option>
					  </select>
					</div>
					<div class="form-group col-md-4">
					  <label for="inputState">Tipo De Envio</label>
					  <select id="paisDestino" class="form-control">
						<option selected>Aereo (mas costoso) 20 dias aprox</option>
						<option>Maritimo (medio) 60 dias aprox</option>
						<option>Terrestre(economico) 120 dias aprox</option>
						
					  </select>
					</div>
				  </div>
				  
				 
				</form>
					</div>
		<center>

<br><br>

<br><br>
</center>
<div class="container-md bg-light text-dark" >

	<table id="tablaproductos" class="table table-striped" border='1' >
		<thead class="table table-info">
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
				<td><a class="btn btn-success" href="../Controlador/recibePedido.php?idProducto=<?php print $objper->id; ?>&idPersona=<?php print $idPersona;?>&idusuario=<?php print $usu[0]->idusuario;?>&paisDestino=paisDestino&direccionEnvio=direccionEnvio&metododepago=metodoPago">Agendar Pedido</a></td>
			</tr>
			
			<?php	
			}
			?>
				
	</table>
	
</div>	
<center>
<a href="../Controlador/insertarProducto.php" class="btn btn-primary">Nuevo Producto</a>
<a href="../vistas/principal.php" class="btn btn-success">Lista De Clientes</a>
 
</center>		
	</body>
</html>