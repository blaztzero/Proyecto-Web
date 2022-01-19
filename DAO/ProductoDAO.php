<?php

include_once '../Controlador/conexion.php';

class ProductoDAO{
//Contructores
//Metodos
//Atributos
//Create, Read, Update, Delete => de la tabla Persona que esta en MySql

//Create
 
public function Insert($nombre, $tipoProducto, $Descripcion, $Stock, $Precio, $codigoBarra){
	try{
		$sql = "insert into producto (nombre, tipoProducto, Descripcion, Stock, precio, codigoBarra) values(:nombre,:tipoProducto,:Descripcion,:Stock,:precio,:codigoBarra)";
		
		$con = Conectar();
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute(array('nombre' => $nombre, 'tipoProducto' => $tipoProducto, 'Descripcion' => $Descripcion, 'Stock' => $Stock, 'Precio' => $Precio, 'codigoBarra' => $codigoBarra));
		
		$respuesta = "Almacenado Correctamente";
		
	} catch(Exception $e){
		$respuesta = "Error: " . $e->getMessage();
	}
	
	return $respuesta;
}

public function Update($id, $nombre, $tipoProducto, $Descripcion, $Stock, $codigoBarra){
	try{
		$sql = "update producto set nombre = :nombre, tipoProducto = :tipoProducto, Descripcion = :Descripcion, stock = :stock , codigoBarra = :codigoBarra where id = :id";
		
		$con = Conectar();
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute(array('id' => $id,'nombre' => $nombre, 'tipoProducto' => $tipoProducto, 'Descripcion' => $Descripcion, 'stock' => $stock, 'codigoBarra' => $codigoBarra));
		
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


public function BuscarProductos(){
	try{
		
		$con = Conectar();
		$sql = "select * from producto";
		
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