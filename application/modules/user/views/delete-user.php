<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap-theme.css">
	<link rel="stylesheet" href="http://rad/assets/back/css/style.css">
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
				<h3 class="text-center">Eliminar usuario</h3>
				<figure class="center-image">
					<img width="140" src="img/hecto932.jpg" alt="Hector Flores" class="img-circle">
				</figure>
		  		<div class="form-group">
		    		<label>Usuario</label>
		    		<p>hecto932</p>
		  		</div>
		  		<div class="form-group">
		    		<label>Nombre</label>
		    		<p>Héctor Flores</p>
		  		</div>
		  		<div class="alert alert-danger" role="alert">
		  			<p>
		  				Al eliminar este usuario se perderán todos los datos del mismo en la base de datos.
		  				<strong>¿Está seguro/a que desea eliminar este usuario?</strong>
		  			</p>
				</div>
				<div class="center-image">
					<a href="list-user.html" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Volver</a>
					<a href="list-user.html" class="btn btn-primary btn-lg red-google"><span class="glyphicon glyphicon-remove"></span> Eliminar</a>
				</div>
			</form>
		</div>
	</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>