<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/bootstrap-theme.min.css">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="css/icomoon.css">

</head>
<body>
	<section>
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login" id="emploform" name="add" action="empleados/agregar/<?php echo $data['slug'] ?>">
				<h2 class="text-center">Nuevo Empleado</h2>
				<div class="alert alert-warning" role="alert">
					Todos los campos con asteriscos (*) son obligatorios.
				</div>
		  		<div class="form-group">
		    		<label>Nombre * </label>
		    		<input type="text" class="form-control" name="name" autofocus>
		  		</div>
		  		<div class="form-group">
		    		<label>Fecha de nacimiento </label>
		    		<input type="date" class="form-control" name="birthday" >
		  		</div>
		  		<div class="form-group">
		  			<label>Cédula * </label>
		  			<input type="number" class="form-control" name="cedula">
		  		</div>
		  		<div class="form-group" form="emploform">
		    		<label>Departamento * </label>
		    		<select class="form-control" name="departament">
		    			<option value="">Seleccione</option>
		    			<?php foreach($departament_id as $key => $value): ?>
		    				<option value=""><?php echo $data['departament']; ?></option>
		    			<?php endforeach; ?>
		    		</select>
		  		</div>	
		  		<div class="form-group">
		  			<label>Horas</label>
		  			<input type="text">
		  		</div>	  		
		  		<div class="form-group">
		  			<label>Código único * </label>
		  			<input name="code" type="text" value="Cliquee el botón para generar su código especial"> <button type="button" onClick="randomString();">cambiar </button>
		  		</div>
		  		<div class="form-group">
		    		<label>Imagen</label>
		    		<input class="form-control" type="file" name="file_image"/>
		  		</div>
		  		<div class="alert alert-danger" role="alert">Error</div>
		  		<button type="button" class="btn btn-primary btn-lg btn-block blue-google"><span class="icon-database"></span> Agregar</button>
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