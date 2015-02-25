<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title>Backend - Reporte</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/icomoon.css">

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
	<div class="contaier-fluid">
		<header class="col-md-12"></header>
		<div class="col-md-10 col-md-offset-1">
		   	
		   		<form class="form-login">
					<h3 class="text-center"><span class="icon-calendar"></span> Reporte</h3>
		  			<div class="form-group">
		  				<label><strong>Tipo de reporte </strong></label>
		  			</div>
		  			<div class="radio">
				  		<label>
				    		<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
				    			Diario
				  		</label>
					</div>
					<div class="radio">
				  		<label>
				    		<input class="mensual" type="radio" name="optionsRadios" id="optionsRadios2" value="option2">
				    		Mensual
				    		<div class="form-mensual">
				    			<form>
					    			<div class="form-group">
							  			<label>Desde</label>
							  			<input class="form-control" type="date" name="desde" />
									</div>
									<div class="form-group">
							  			<label>Hasta</label>
							  			<input class="form-control" type="date" name="hasta" />
									</div>
					    		</form>
				    		</div>
				  		</label>
				  		<br>
					<div class="radio">
						<label>
							<input class="employees" type="radio" name="optionsRadios" id="optionsRadios3" value="option3">
							Por empleado	
						
							<div class="form-for-employees">
								<form class>
									<div class="form-group">
										<label>Cedula</label>
										<input class="form-control" type="text" name="cedula"> 
									</div>
									<div class="form-group">
									  	<label>Desde</label>
									  	<input class="form-control" type="date" name="desde" />
									</div>
									<div class="form-group">
									  	<label>Hasta</label>
									  	<input class="form-control" type="date" name="hasta" />
									</div>
								</form>
							</div>
						</label>
					</div>
					<a href="home.html" class="btn btn-success btn-lg btn-block green-google"><span class="icon-file-excel-o"></span> Guardar como Excel</a>
					</div>
				</form>
		   	
		</div>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mainApplication.js"></script>
</body>
</html>