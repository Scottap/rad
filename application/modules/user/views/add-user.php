	<section>
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login" action="usuarios/crear" method="POST">
				<h2 class="text-center">Nuevo usuario</h2>
				<div class="alert alert-warning" role="alert">
					Todos los campos con astericos (*) son obligatorios.
				</div>
		  		<div class="form-group">
		    		<label>Usuario * </label>
		    		<input type="text" class="form-control" name="username" value="<?php echo set_value('username'); ?>" autofocus>
		    		<?php echo form_error('username'); ?>
		  		</div>
		  		<div class="form-group">
		    		<label>Nombre *</label>
		    		<input type="text" class="form-control" name="name" value="<?php echo set_value('name'); ?>" >
		  			<?php echo form_error('name'); ?>
		  		</div>
		  		<div class="form-group">
		    		<label>Contraseña * </label>
		    		<input type="password" class="form-control" name="password" value="<?php echo set_value('password'); ?>" >
		  			<?php echo form_error('password'); ?>
		  		</div>
		  		<div class="form-group">
		    		<label>Repita la contraseña * </label>
		    		<input type="password" class="form-control" name="repassword">
		  			<?php echo form_error('repassword'); ?>
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