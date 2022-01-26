<html>

<head>
<?php
		include_once 'layout.php';
		include_once '../DAO/PersonaDAO.php';
		include_once '../DAO/ProductoDAO.php';
		include_once '../DAO/PedidoDAO.php';
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
		
			$objPersona = new PersonaDAO();
			$ConteoPersonas = $objPersona->ContarClientes();
			$numeroClientes = json_decode($ConteoPersonas);
			$objProducto = new ProductoDAO();
			$ConteoProductos = $objProducto->ContarProductos();
			$numeroProductos = json_decode($ConteoProductos);
			$objPedido = new PedidoDAO();
			$ConteoPedidos = $objPedido->ContarPedidos();
			$numeroPedidos = json_decode($ConteoPedidos);
?>


<body>
<style>
		body{
			
			background-size: cover;
		}	
			
	</style>

<body background = "../resource/img/wp3.jpg">

<center>

<br><br>
<br><br>
<br><br></center>
<div class="container-md bg-light text-dark" >
<br><br>
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-info">
              <div class="inner">
                <h3><?php print $numeroPedidos[0]->conteo; ?></h3>

                <p>Nuevos Pedidos</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="../vistas/VistaClientes.php" class="small-box-footer">
                Agendar Pedidos <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-success">
              <div class="inner">
                <h3>53<sup style="font-size: 20px">%</sup></h3>

                <p>Envios Aprobados</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="../vistas/VistaPedidos.php" class="small-box-footer">
                Mostrar Pedido <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-warning">
              <div class="inner">
                <h3><?php print $numeroClientes[0]->conteo; ?></h3>

                <p>Clientes</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="../controlador/insertarPersona.php" class="small-box-footer">
                Lista de Clientes <i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3 col-6">
            <!-- small card -->
            <div class="small-box bg-submit">
              <div class="inner">
                <h3><?php print $numeroProductos[0]->conteo ?> </h3>

                <p>Gestion de productos</p>
              </div>
              <div class="icon">
                <i class="fas fa-chart-pie"></i>
              </div>
              <a href="../vistas/producto.php" class="small-box-footer">
                Ingresar Productos<i class="fas fa-arrow-circle-right"></i>
              </a>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->

</div>
<center>
	<a href="../vistas/producto.php" class="btn btn-primary">Buscar Productos</a>
	<a href="../Controlador/insertarProducto.php" class="btn btn-success">Agregar Productos</a>
	
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
	<br>
</center>
<h1> <font color = "white">    Sistema de Gestion de Pedidos AgroExport</font></h1>
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
