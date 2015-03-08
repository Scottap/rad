<!DOCTYPE html>
<html lang="en">
	<head>
		<base href="<?php echo base_url(); ?>">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="author" content="">
		<title><?php echo $title; ?></title>
		<link rel="stylesheet" href="assets/back/css/bootstrap.min.css">
		<link rel="stylesheet" href="assets/back/css/bootstrap-theme.min.css">
		<link rel="stylesheet" href="assets/back/css/style.css">
		<link rel="stylesheet" href="assets/back/css/icomoon.css">
	</head>
	<body>

	<!-- BARRA DE NAVEGACION -->
	<nav class="navbar navbar-inverse">
  		<div class="container-fluid">
    		<!-- Brand and toggle get grouped for better mobile display -->
    		<div class="navbar-header">
      			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-9">
            		<span class="sr-only">Toggle navigation</span>
           		 	<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
            		<span class="icon-bar"></span>
      			</button>
      			<a class="navbar-brand" href="home">RAD</a>
    		</div>
    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
      			<ul class="nav navbar-nav navbar-right">
        			<li><a href="frontend">Ir a Frontend</a></li>
        			<li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
			          	<ul class="dropdown-menu" role="menu">
				            <li><a href="usuarios/agregar-usuario">Agregar</a></li>
				            <li><a href="usuarios/ver-usuarios">Ver usuarios</a></li>
			          	</ul>
			       	</li>
			       	<li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Empleados <span class="caret"></span></a>
			          	<ul class="dropdown-menu" role="menu">
				            <li><a href="empleados/agregar">Nuevo empleado</a></li>
				            <li><a href="empleados/ver">Ver empleados</a></li>
			          	</ul>
			       	</li>
				    <li><a href="reportes">Reportes</a></li>
			       	<li><a href="config.html">Configuración</a></li>
        			<li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><?php echo $userData['name']; ?> <span class="caret"></span></a>
			          	<ul class="dropdown-menu" role="menu">
				            <li><a href="profile.html">Mi perfil</a></li>
				            <li><a href="usuarios/cerrar-sesion">Cerrar sesión</a></li>
			          	</ul>
			       	</li>
      			</ul>
    		</div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
	</nav>
	<!-- /BARRA DE NAVEGACION -->
</header>