	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap-theme.css">
	<link rel="stylesheet" href="http://rad/assets/back/css/style.css">
</head>
<body>
	<section>
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login" action="usuarios/crear" method="POST">
				<h2 class="text-center">Nuevo usuario</h2>
				<div class="alert alert-warning" role="alert">
					Todos los campos con astericos (*) son obligatorios.
				</div>
		  		<div class="form-group">
		    		<label>Usuario * </label>
		    		<input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" autofocus required>
		  		</div>
		  		<div class="form-group">
		    		<label>Nombre *</label>
		    		<input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" required>
		  		</div>
		  		<div class="form-group">
		    		<label>Contraseña * </label>
		    		<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" required>
		  		</div>
		  		<div class="form-group">
		    		<label>Repita la contraseña * </label>
		    		<input type="password" class="form-control" name="repassword" required>
		  		</div>
		  		<div class="form-group">
		    		<label>Imagen</label>
		    		<input class="form-control" type="file" name="file_image"/>
		  		</div>
		  		<div class="alert alert-danger" role="alert">Error</div>
		  		<button type="submit" class="btn btn-success btn-lg btn-block">Registrar</button>
			</form>
		</div>
	</section>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>
