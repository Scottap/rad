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
			<form class="form-login" method="POST" action="empleados/actualizar">
				<h3 class="text-center">Actualizar al empleado <?php echo $employeeData['name']; ?></h3>
				<div class="alert alert-warning" role="alert">
				</div>
		  		<div class="form-group">
		    		<label>Nombre</label>
		    		<input type="text" class="form-control" name="nombre" value="<?php echo set_value('name'); ?>" focused>
		  		</div>
		  		<div class="form-group">
		    		<label>Departamento</label>
		    		<select class="form-control" name="departament_id">
		    			<option value="">Seleccione</option>
		    			<?php foreach($departaments as $key => $value): ?>
		    				<option value="<?php echo $value['id']; ?> <?php set_value('departament_id'); ?>"><?php echo $employeeData['name']; ?>	</option>
		    			<?php endforeach; ?>
		    		</select>
		  		</div>
		  		<div class="form-group">
		    		<label>Cedula</label>
		    		<input type="text" class="form-control" name="cedula" value="<?php set_value('cedula'); ?>">
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