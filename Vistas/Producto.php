<html>

<head>
<?php
include_once 'layout.php';
include_once '../DAO/ProductoDAO.php';
include_once 'navbar.php';
?>
</head>
<?php
	//session_start();

	
		
		if( isset($_SESSION["usuario"]) == true )
		{
				$usuario = $_SESSION["usuario"];
			
			$usu = json_decode($usuario);
			
			// /* echo " */
					// <br><br><center>
					// <h2><font color = 'white'>Bienvenido Sr. ". $usu[0]->nombres . " " . $usu[0]->ap1 . " " . $usu[0]->ap2 ."</font></h2></center><br><br>";
					
		}else{
			
			echo ("no encontre session");
			header('Location: ../vistas/errorLogin.php');
		}
?>
<body>
<center>
<body background = "../resource/img/wp3.jpg">
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
			<th>stock Disponible</th>
			<th>Precio Neto</th>
			<th>Codigo De Barra</th>
			<th></th>
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
				
				<td><a class="btn btn-danger" href="eliminar.php?id=<?php print $objper->id; ?>">Eliminar</a></td>
				<td><a class="btn btn-success" href="modicar.php?id=<?php print $objper->id; ?>&nombre=<?php print $objper->nombre; ?>&ap1=<?php print $objper->ap1; ?>&ap2=<?php print $objper->ap2; ?>&sexo=<?php print $objper->sexo; ?>&direccion=<?php print $objper->direccion; ?>">Modificar</a></td>
				<td><a class="btn btn-primary" href="factura.php">Vender Producto</a></td>
			</tr>
			
			<?php	
			}
			?>
				
	</table>
	
</div>	
</center>		
</center>
<img src="../resource/img/gif.gif">
</body>

<script>	
	$(document).ready(function () {
  $('#tablaproductos').DataTable({
    
    
    language: {
      "sProcessing": "Procesando...",
      "sLengthMenu": "Mostrar _MENU_ resultados",
      "sZeroRecords": "No se encontraron resultados",
      "sEmptyTable": "Ningun dato disponible en esta tabla",
      "sInfo": "Mostrando resultados _START_-_END_ de  _TOTAL_",
      "sInfoEmpty": "Mostrando resultados del 0 al 0 de un total de 0 registros",
      "sInfoFiltered": "(filtrado de un total de _MAX_ registros)",
      "sSearch": "Buscar ",
      "sLoadingRecords": "Cargando...",
      "oPaginate": {
        "sFirst": "Primero",
        "sLast": "Ultimo",
        "sNext": "Siguiente",
        "sPrevious": "Anterior"
      },
      "iDisplayLength": 50, 
      "processing": true,
      "serverSide": true,
    }
  });
});
</script>

</html>
