<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo base_url(); ?>">
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<meta http-equiv="X-UA-Compatible" content="IE=edge"/>
	<title><?php echo $title;?></title>
	<link rel="stylesheet" href="assets/back/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/back/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="assets/back/css/style.css"/>
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
      			<a class="navbar-brand" href="home.html">RAD</a>
    		</div>
    		<!-- Collect the nav links, forms, and other content for toggling -->
    		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-9">
      			<ul class="nav navbar-nav navbar-right">
        			<li><a href="home.html">Inicio</a></li>
        			<li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Usuarios <span class="caret"></span></a>
			          	<ul class="dropdown-menu" role="menu">
				            <li><a href="add-user.html">Agregar</a></li>
				            <li><a href="list-user.html">Ver usuarios</a></li>
			          	</ul>
			       	</li>
			       	<li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Empleados <span class="caret"></span></a>
			          	<ul class="dropdown-menu" role="menu">
				            <li><a href="add-employees.html">Nuevo empleado</a></li>
				            <li><a href="list-employees.html">Ver empleados</a></li>
			          	</ul>
			       	</li>
				    <li><a href="report.html">Reportes</a></li>
			       	</li>
			       	<li><a href="config.html">Configuración</a></li>
        			<li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Flavio Ruiz <span class="caret"></span></a>
			          	<ul class="dropdown-menu" role="menu">
				            <li><a href="profile.html">Mi perfil</a></li>
				            <li><a href="index.html">Cerrar sesión</a></li>
			          	</ul>
			       	</li>
      			</ul>
    		</div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
	</nav>
	<!-- /BARRA DE NAVEGACION -->
	<section >
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login">
				<h2 class="text-center">Nuevo usuario</h2>
				<div class="alert alert-warning" role="alert">
					Todos los campos con astericos (*) son obligatorios.
				</div>
		  		<div class="form-group">
		    		<label>Usuario * </label>
		    		<input type="text" class="form-control" name="usuario" autofocus>
		  		</div>
		  		<div class="form-group">
		    		<label>Nombre *</label>
		    		<input type="text" class="form-control" name="nombre" >
		  		</div>
		  		<div class="form-group">
		    		<label>Contraseña * </label>
		    		<input type="password" class="form-control" name="password">
		  		</div>
		  		<div class="form-group">
		    		<label>Repita la contraseña * </label>
		    		<input type="password" class="form-control" name="repassword">
		  		</div>
		  		<div class="form-group">
		    		<label>Imagen</label>
		    		<input class="form-control" type="file" name="file_image"/>
		  		</div>
		  		<div class="alert alert-danger" role="alert">Error</div>
		  		<!-- <button type="button" class="btn btn-primary btn-lg btn-block blue-google">Iniciar</button> -->
				<a href="home.html" class="btn btn-success btn-lg btn-block green-google">Guardar</a>
			</form>
		</div>
	</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</body>
</html>