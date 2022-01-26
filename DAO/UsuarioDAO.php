<?php

include_once 'conexion.php';

class UsuarioDAO{
	
	 
	public function Insert($nombre, $ap1, $ap2, $nombreUsuario, $contrasena){
		try{
			$sql = "insert into usuario (nombre, ap1, ap2, nombreusuario, contrasena) values(:nombre,:ap1,:ap2,:nombreUsuario,:contrasena)";
			
			$con = Conectar();
			
			$respuesta = $con->prepare($sql);
			$respuesta->execute(array('nombre' => $nombre, 'ap1' => $ap1, 'ap2' => $ap2, 'nombreUsuario' => $nombreUsuario,'contrasena' => $contrasena));
			
			$respuesta = "Almacenado Correctamente";
			
		} catch(Exception $e){
			$respuesta = "Error: " . $e->getMessage();
		}
		
		return $respuesta;
	}
	
	public function BuscarUsuarios(){
		try{
			
			$con = Conectar();
			$sql = " select * from usuario ";
			
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
	
	public function Update($id, $nombre, $ap1, $ap2, $nombreUsuario, $contrasena){
	try{
		$sql = "update usuario set nombre = :nombre, ap1 = :ap1, ap2 = :ap2, nombreUsuario = :nombreUsuario , contrasena = :contrasena where id = :id";
		
		$con = Conectar();
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute(array('id' => $id,'nombre' => $nombre, 'ap1' => $ap1, 'ap2' => $ap2, 'nombreUsuario' => $nombreUsuario, 'contrasena' => $contrasena));
		
		$respuesta = "usuario Modificado Correctamente";
		
	} catch(Exception $e){
		$respuesta = "Error: " . $e->getMessage();
	}
	
	return $respuesta;
}

public function delete_usuario($id){
	try{
		$sql = "delete from usuario where id = :id";
		
		$con = Conectar();
		
		$respuesta = $con->prepare($sql);
		$respuesta->execute(array('id' => $id));
		
		$respuesta = "Usuario Eliminado Correctamente";
		
	} catch(Exception $e){
		$respuesta = "Error: " . $e->getMessage();
	}
	
	return $respuesta;
}





?>