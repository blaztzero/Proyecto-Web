<?php

include_once '../Controlador/conexion.php';

class PedidoDAO{
//Contructores
//Metodos
//Atributos
//Create, Read, Update, Delete => de la tabla Persona que esta en MySql

//Create
 
public function Insert($idUsuario, $idPersona, $idProducto, $metododepago,$paisDestino,$direccionEnvio){
	try{
		$sql = "insert into pedido (idusuario, idpersona, idProducto, metododepago, PaisDestino, DireccionEnvio) values(:idusuario,:idpersona,:idproducto,:metododepago,:paisDestino,:direccionEnvio)";
		
		$con = Conectar();
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute(array('idusuario' => $idUsuario, 'idpersona' => $idPersona, 'idproducto' => $idProducto, 'metododepago' => $metododepago, 'paisDestino' => $paisDestino, 'direccionEnvio' => $direccionEnvio));
		
		$respuesta = "Almacenado Correctamente";
		
	} catch(Exception $e){
		$respuesta = "Error: " . $e->getMessage();
	}
	
	return $respuesta;
}

public function Update($id, $idUsuario, $idPersona, $idProducto, $metododepago, $paisDestino,$direccionEnvio){
	try{
		$sql = "update producto set idusuario = :idusuario, idproducto = :idproducto, metododepago = :metododepago, paisDestino = :paisDestino , direccionEnvio = :direccionEnvio where id = :id";
		
		$con = Conectar();
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute(array('id' => $id,'idusuario' => $idUsuario, 'idpersona' => $idpersona, 'idproducto' => $idProducto, 'metododepago' => $metododepago, 'paisDestino' => $paisDestino, 'direccionEnvio' => $direccionEnvio));
		
		$respuesta = "producto Modificado Correctamente";
		
	} catch(Exception $e){
		$respuesta = "Error: " . $e->getMessage();
	}
	
	return $respuesta;
}

public function delete_persona($id){
	try{
		$sql = "delete from producto where id = :id";
		
		$con = Conectar();
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute(array('id' => $id));
		
		$respuesta = "producto Eliminado Correctamente";
		
	} catch(Exception $e){
		$respuesta = "Error: " . $e->getMessage();
	}
	
	return $respuesta;
}


public function BuscarPedidos(){
	try{
		
		$con = Conectar();
		$sql = "select * from pedido";
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute();
		
		$Result = $respuesta->fetchAll(PDO::FETCH_ASSOC);
		
		$Json = json_encode($Result);
	}
	catch(Exception $ex){
		$Json = "Error";
	}finally{
		$con = null;
	}
	return $Json;
}
public function ContarPedidos(){
	try{
		
		$con = Conectar();
		$sql = "select count(*)conteo from Pedido";
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute();
		
		$Result = $respuesta->fetchAll(PDO::FETCH_ASSOC);
		
		$Json = json_encode($Result);
		
		
	}
	catch(Exception $ex){
		$Json = "Error";
	}finally{
		$con = null;
	}
	return $Json;
}

}

?>