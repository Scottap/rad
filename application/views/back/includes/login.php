<!DOCTYPE html>
<html lang="en">
<head>
	<base href="<?php echo base_url(); ?>">
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap-theme.css">
	<link rel="stylesheet" href="http://rad/assets/back/css/style.css">
</head>
<body>
	<div class="row">
		<header class="col-md-12">
			<h1 class="text-center">RAD</h1>
			<h4 class="text-center">Registro de Asistencia Dactilar</h4>
		</header>
	</div>
	<section class="row">
		<div class="col-md-6 col-md-offset-3">
			<form class="form-login">
				<h2 class="text-center">Iniciar sesión</h2>
		  		<div class="form-group">
		    		<label>Usuario</label>
		    		<input type="text" class="form-control" name="usuario" autofocus>
		  		</div>
		  		<div class="form-group">
		    		<label>Contraseña</label>
		    		<input type="password" class="form-control" name="password">
		  		</div>
		  		<div class="alert alert-danger" role="alert">Error</div>
		  		<!-- <button type="button" class="btn btn-primary btn-lg btn-block blue-google">Iniciar</button> -->
				<a href="home.html" class="btn btn-primary btn-lg btn-block blue-google">Iniciar</a>
			</form>
		</div>
	</section>
	<?php echo base_url(); ?>
	<br><br><br><br><br><br><br><br><br><br><br>
	<a class="btn btn-primary blue-google" href="frontend.html">Ir a Inicio</a>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>