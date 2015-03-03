<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="assets/back/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/back/css/bootstrap-theme.css">
	<link rel="stylesheet" href="assets/back/css/style.css">
	<link rel="stylesheet" href="assets/back/css/icomoon.css">
</head>
<body>
	<section>
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login" action='usuarios/actualizar/<?php echo $user['slug']; ?>' method="POST">
				<h3 class="text-center">Actualizar a <?php echo $user['name']; ?></h3>
				<!-- <figure class="center-image">
					<img width="140" src="img/hecto932.jpg" alt="Hector Flores" class="img-circle">
				</figure> -->
		  		<div class="form-group">
		    		<label>Nombre de Usuario</label>
		    		<input type="text" class="form-control" name="username" autofocus>
		  		</div>
		  		<div class="form-group">
		    		<label>Contraseña Actual (En el caso de que quiera cambiar su contraseña actual)</label>
		    		<input type="password" class="form-control" name="password" >
		  		</div>
		  		<div class="form-group">
		    		<label>Contraseña Nueva (En el caso de que quiera cambiar su contraseña actual)</label>
		    		<input type="password" class="form-control" name="newPass" >
		  		</div>
		  		<div class="form-group">
		    		<label>Repita la contraseña nueva</label>
		    		<input type="password" class="form-control" name="newPass_confirmation">
		  		</div>
		  		<div class="form-group">
		    		<label>Imagen</label>
		    		<input class="form-control" type="file" name="file_image"/>
		  		</div>
		  		<div class="alert alert-danger" role="alert">Error</div>
		  		<button type="submit" class="btn btn-primary btn-lg btn-block green-google"><span class="icon-floppy-o"></span> Actualizar</button> 
			</form>
		</div>
	</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>