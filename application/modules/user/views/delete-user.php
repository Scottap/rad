<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap-theme.css">
	<link rel="stylesheet" href="http://rad/assets/back/css/style.css">
</head>
<body>
	<section>
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login" method="POST" action="usuarios/eliminar/<?php echo $user['slug']; ?>">
				<h3 class="text-center">¿Eliminar a <?php echo $user['name'] ?>?</h3>
				<!--<figure class="center-image">
					<img width="140" src="img/hecto932.jpg" alt="Hector Flores" class="img-circle">
				</figure> -->
		  		<div class="form-group">
		    		<label>Usuario</label>
		    		<p><?php echo $user['username'];?></p>
		  		</div>
		  		<div class="form-group">
		    		<label>Nombre</label>
		    		<p><?php echo $user['name'];?></p>
		  		</div>
		  		<div class="alert alert-danger" role="alert">
		  			<p>
		  				Al eliminar a <?php echo $user['name'] ?> se perderán todos los datos del mismo en la base de datos.
		  				<strong>¿Está seguro/a que desea eliminar este usuario?</strong>
		  			</p>
				</div>
				<div class="center-image">
					<a href="usuarios/ver-usuarios" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Volver</a>
					<button type="submit" class="btn btn-success btn-lg red-google"><span class="glyphicon glyphicon-remove"></span> Eliminar</button>
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