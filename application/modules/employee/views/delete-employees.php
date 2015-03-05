<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="assets/back/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/back/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="assets/back/css/style.css">
	<link rel="stylesheet" href="assets/back/css/icomoon.css">
</head>
<body>
	<section >
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login" method = "POST" action="empleados/eliminar">
				<h3 class="text-center">Eliminar a <?php echo $all_employees['name']; ?></h3>
		  		<div class="form-group">
		    		<label>Nombre</label>
		    		<p><?php echo $all_employees['name']; ?></p>
		  		</div>
		  		<div class="form-group">
		    		<label>Fecha de Nacimiento</label>
		    		<p><?php echo $all_employees['birthday']; ?></p>
		  		</div>
		  		<div class="form-group">
		    		<label>Departamento</label>
		    		<p></p>
		  		</div>
		  		<div class="form-group">
		  			<label>Código único</label>
		  			<p><?php echo $all_employees['code']; ?></p>
		  		</div>
		  		<div class="alert alert-danger" role="alert">
		  			<p>
		  				Al eliminar este empleado se perderán todos los datos del mismo en la base de datos.
		  				<strong>¿Está seguro/a que desea eliminar a <?php echo $all_employees['name']; ?>?</strong>
		  			</p>
				</div>
				<div class="center-image">
					<button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Volver</button>
					<button href="empleados" class="btn btn-primary btn-lg red-google"><span class="glyphicon glyphicon-remove"></span> Eliminar</button>
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