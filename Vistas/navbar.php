<?php
	session_start();

	
		
		if( isset($_SESSION["usuario"]) == true )
		{
				$usuario = $_SESSION["usuario"];
			
			$usu = json_decode($usuario);
			
			
									
		}else{
			
			echo ("no encontre session");
			header('Location: ../vistas/errorLogin.php');
		}
?>
<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Administracion de Sistema</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="../vistas/main.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="../vistas/principal.php">Buscar Clientes</a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../vistas/producto.php">Buscar Productos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="../vistas/principal.php" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Modulo de Ventas
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true"><?php print "Bienvenido Sr. ". $usu[0]->nombres . " " . $usu[0]->ap1 . " " . $usu[0]->ap2 .""?></a>
        </li>
		<li class="nav-item">
          <a class="nav-link" href="../vistas/cerrarSeccion.php">Cerrar Session</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>