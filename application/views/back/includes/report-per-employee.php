<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Backend - Reporte específico</title>
	<link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="css/bootstrap-theme.min.css" />
	<link rel="stylesheet" href="css/style.css" />
	<link rel="stylesheet" href="css/icomoon.css" />
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
			       	<li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Reportes <span class="caret"></span></a>
			          	<ul class="dropdown-menu" role="menu">
				            <li><a href="report.html">Completo</a></li>
				            <li><a href="report-per-employee.html">Por empleados</a></li>
			          	</ul>
			       	</li>
			       	<li><a href="config.html">Configuración</a></li>
        			<li class="dropdown">
			        	<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">Flavio Ruiz <span class="caret"></span></a>
			          	<ul class="dropdown-menu" role="menu">
				            <li><a href="#">Mi perfil</a></li>
				            <li><a href="index.html">Cerrar sesión</a></li>
			          	</ul>
			       	</li>
      			</ul>
    		</div><!-- /.navbar-collapse -->
  		</div><!-- /.container-fluid -->
	</nav>
	<!-- /BARRA DE NAVEGACION -->
	<div class="container-fluid">
		<form action="" class="form-login">
			<div class="icon-smile-o text-center" style="font-size:128px"></div>
			<h1 class="text-center">Reporte por empleado</h1>
			<div class="form-group">
		    	<label>Departamento</label>
		    	<select class="form-control" name="departamento">
		    		<option value="">Seleccione</option>
		    		<option value="">Docente</option>
		    		<option value="">Administrativo</option>
		    		<option value="">Ambiente</option>
		    	</select>
		  	</div>
		  	<h2 class="text-center">O</h2>
			<div class="form-group">
			<input type="text" class="form-control" placeholder="Buscar...">  		
			</div>
		</form>			
	</div>
</body>
</html>