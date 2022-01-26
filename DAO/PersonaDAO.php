<?php

include_once '../Controlador/conexion.php';

class PersonaDAO{
//Contructores
//Metodos
//Atributos
//Create, Read, Update, Delete => de la tabla Persona que esta en MySql

//Create
 
public function Insert($nombre, $ap1, $ap2, $telefono, $correo, $Direccion, $observacion,$empresa){
	try{
		$sql = "insert into persona (nombre, ap1, ap2, telefono, correo, direccion, observacion, empresa) values(:nombre,:ap1,:ap2,:telefono,:correo,:direccion,:observacion,:empresa)";
		
		$con = Conectar();
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute(array('nombre' => $nombre, 'ap1' => $ap1, 'ap2' => $ap2, 'telefono' => $telefono, 'correo' => $correo, 'direccion' => $Direccion, 'observacion' => $observacion ,'empresa' => $empresa));
		
		$respuesta = "Almacenado Correctamente";
		
	} catch(Exception $e){
		$respuesta = "Error: " . $e->getMessage();
	}
	
	return $respuesta;
}

public function Update($id, $nombre, $ap1, $ap2, $telefono, $correo, $Direccion, $observacion,$empresa){
	try{
		$sql = "update persona set nombre = :nombre, ap1 = :ap1, ap2 = :ap2, telefono = :telefono , correo = :correo, direccion = :direccion, observacion = :observacion, empresa = :empresa where idpersona = :id";
		
		$con = Conectar();
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute(array('id' => $id,'nombre' => $nombre, 'ap1' => $ap1, 'ap2' => $ap2, 'telefono' => $telefono, 'correo' => $correo, 'direccion' => $Direccion, 'observacion' => $observacion,'empresa' => $empresa));
		
		$respuesta = "Persona Modificada Correctamente";
		
	} catch(Exception $e){
		$respuesta = "Error: " . $e->getMessage();
	}
	
	return $respuesta;
}

public function delete_persona($id){
	try{
		$sql = "delete from persona where idpersona = :id";
		
		$con = Conectar();
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute(array('id' => $id));
		
		$respuesta = "Persona Eliminada Correctamente";
		
	} catch(Exception $e){
		$respuesta = "Error: " . $e->getMessage();
	}
	
	return $respuesta;
}


public function BuscarPersonas(){
	try{
		
		$con = Conectar();
		$sql = "select * from persona";
		
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
public function BuscarPersonasPorID($id){
	try{
		
		$con = Conectar();
		$sql = "select * from persona where idpersona = :id";
		
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
public function ContarClientes(){
	try{
		
		$con = Conectar();
		$sql = "select count(*)conteo from persona";
		
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