<html>

<head>
<?php
		include_once 'layout.php';
		include_once '../DAO/PersonaDAO.php';
		include_once '../DAO/PedidoDAO.php';
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
			
			/* echo "<br><br><center><h2><font color = 'white'>
			Bienvenido Sr. ". $usu[0]->nombres . " " . $usu[0]->ap1 . " " . $usu[0]->ap2 ."
			</font></h2></center><br><br>"; */
			
			
			
		}else{
			
			echo ("no encontre session");
			session_destroy();
			header('Location: ../vistas/errorLogin.php');
		}
?>


<body>
<style>
		body{
			
			background-size: cover;
		}	
			
	</style>

<body background = "../resource/img/wp3.jpg">
<center>


<br><br></center>
<div class="container-fluid bg-light text-dark" >
<div class="table-responsive">

	
	
	<table id="tabla_Clientes" class="table table-striped table-dark " border='1' >
		<thead class="table table-striped table-active">
			<tr>
			<th>ID</th>
			<th>Usuario</th>
			<th>Cliente</th>
			
			<th>Producto</th>
			<th>MetodoPago</th>
			<th>Pais de Destino</th>
			<th>Direccion</th>
			<th>Fecha Pedido</th>
			<th></th>
			
			
		</tr>
		</thead>
		<?php
			//Obtener un instancia de la clase PersonaDAO
			$objPedido = new PedidoDAO();
			$JsonPedido = $objPedido->BuscarPedidos();
		
			foreach(json_decode($JsonPedido) as $objpedido){
			?>
			<tr>
				<td> <?php print $objpedido->idpedido; ?> </td>
				<td> <?php print $objpedido->idusuario; ?> </td>
				<td> <?php print $objpedido->idpersona; ?> </td>
				
				<td> <?php print $objpedido->idProducto; ?> </td>
				<td> <?php print $objpedido->metododepago; ?> </td>
				<td> <?php print $objpedido->PaisDestino; ?> </td>
				<td> <?php print $objpedido->DireccionEnvio; ?> </td>
				<td> <?php print $objpedido->FechaPedido; ?> </td>
				
				
				<td><a class="btn btn-primary" href="#">Generar Pedidos</a></td>
			</tr>
			<?php	
			//<input type="button" onclick="EliminarPersona()" value="Eliminar" /> 
			}
			?>
	</table>
</div>
<center>
	<a href="../vistas/producto.php" class="btn btn-primary">Buscar Productos</a>
	<a href="../Controlador/insertarProducto.php" class="btn btn-success">Agregar Productos</a>
	
</center>

</body>
<script>	
	$(document).ready(function () {
  $('#tabla_Clientes').DataTable({
    
    
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
<script type="text/javascript">
function EliminarPersona() {
//Ingresamos un mensaje a mostrar
var mensaje = confirm("¿estas Seguro de eliminar?");
//Detectamos si el usuario acepto el mensaje
if (mensaje) {
alert("¡Gracias por aceptar!");
window.locationf="http://";
}
//Detectamos si el usuario denegó el mensaje
else {
alert("¡Haz denegado el mensaje!");
}
}
</script>


</html>
