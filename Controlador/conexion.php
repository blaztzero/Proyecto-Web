<?php

	function Conectar(){
		//Debo crear la conexion a la base de datos.
		try{
			//Codigo que se ejecuta en TRY siempre cuando se requiere
			
			$con = new PDO("mysql:host=localhost;dbname=clientedb_inacap", "root", "");
			
		} catch(PDOException $e){
			//En caso de error solamente entramos aca	
			echo $e->getMessege();
		}
		
		return $con;
	}

?>