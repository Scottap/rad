<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo $title ?></title>
	<link rel="stylesheet" href="assets/back/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/back/css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="assets/back/css/style.css">
	<link rel="stylesheet" href="assets/back/css/icomoon.css">
</head>
<body>
	<section>
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login">
				<h3 class="text-center">Actualizar a <?php echo $data['name']; ?></h3>
				<div class="alert alert-warning" role="alert">
				</div>
				<figure class="center-image">
					<img width="140" src="img/user.png" alt="Hector Flores" class="img-circle">
				</figure>
		  		<div class="form-group">
		    		<label>Usuario</label>
		    		<input type="text" class="form-control" name="usuario" value="hecto932" autofocus>
		  		</div>
		  		<div class="form-group">
		    		<label>Departamento</label>
		    		<select class="form-control" name="departamento">
		    			<option value="">Seleccione</option>
		    		</select>
		  		</div>
		  		<div class="form-group">
		    		<label>Nombre</label>
		    		<input type="text" class="form-control" name="nombre" value="Hector Flores">
		  		</div>
		  		<div class="form-group">
		    		<label>Cedula</label>
		    		<input type="text" class="form-control" name="cedula" value="20162504">
		  		</div>
		  		<div class="form-group">
		    		<label>Imagen</label>
		    		<input class="form-control" type="file" name="file_image"/>
		  		</div>
		  		<div class="alert alert-danger" role="alert">Error</div>
		  		<button type="submit" class="btn btn-primary btn-lg btn-block blue-google">Actualizar</button> 
			</form>
		</div>
	</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  
</body>
</html>