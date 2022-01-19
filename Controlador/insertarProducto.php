<html>

<head>
<?php
	include_once '../vistas/layout.php';
	include_once '../DAO/ProductoDAO.php';
?>
</head>
	<style>
		body{
			
			background-size: cover;
		}	
			
	</style>
<body>
<body background = "../resource/img/wp2.gif">
	<br><br><br>
		<center>
		<div class= "container" style = "width:100%">
			<form action="#" method="POST" >
				<table border="0" style = "width:80%">
					
					<tr>
						<td>Nombre: </td>
						<td><input class= "form-control" type="text" required autocomplete="off" name="txtnombre" id="txtnombre"/> </td>
					<tr>
					<tr>
						<td>Tipo De Producto: </td>
						<td><input class= "form-control" type="text" required autocomplete="off" name="tipoProducto" id="tipoProducto"/> </td>
					<tr>
					<tr>
						<td>Descripcion: </td>
						<td><input class= "form-control" type="text" required autocomplete="off" name="descripcion" id="descripcion"/> </td>
					<tr>
					<tr>
						<td>stock: </td>
						<td><input class= "form-control" type="text" required autocomplete="off" name="stock" id="stock"/> </td>
					<tr>
					<tr>
						<td>codigo de barra: </td>
						<td><input class= "form-control" type="text" required autocomplete="off" name="codigoBarra" id="codigoBarra"/> </td>
					
					<tr>
					
					</tr>
					<tr>
						<td colspan="2">
							<input class= "btn btn-primary" type="submit" value="Agregar nuevo Producto"/>
						</td>
						<td colspan="1">
							<input class= "btn btn-success" type="submit" value="Agregar Producto Via QR"/>
		
						</td>
					</tr>
					
					<tr>
						
					</tr>
				</table>
			</form>
		</div>
		</center>
</body>

</html>