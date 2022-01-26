<?php
	
  include_once '../DAO/PersonaDAO.php';	
  include_once '../DAO/ProductoDAO.php';	
    include_once '../DAO/PedidoDAO.php';	
	
  $idProducto = $_GET["idProducto"];
  $idPersona = $_GET["idPersona"];
  $idUsuario = $_GET["idusuario"];
  $paisDestino = $_GET["paisDestino"];
  $direccionEnvio = $_GET["direccionEnvio"];
  $metododepago = $_GET["metododepago"];
  
  
  
  //Conexion a una DB y alamcenando informacion
  $ObjPersonaDAO = new PersonaDAO();
  $buscarCliente = $ObjPersonaDAO->BuscarPersonasPorID($idPersona);
  $ObjProductoDAO = new ProductoDAO();
  $buscarProducto = $ObjProductoDAO->BuscarProductoPorID($idProducto);
  $ObjPedido = new PedidoDAO();
  $ingresarPedido = $ObjPedido->Insert($idUsuario,$idPersona,$idProducto,$metododepago,$paisDestino,$direccionEnvio);
  print $ingresarPedido;
  //print $idUsuario.$idPersona.$idProducto.$metododepago.$paisDestino.$direccionEnvio;
 // $respuesta = $ObjPersonaDAO->Insert($nombre, $Ap1, $Ap2, $telefono,$correo,$Direccion,$observaciones,$empresa);
  
  header("Location: ../vistas/VistaPedidos.php");
  
 
  
 
?>
