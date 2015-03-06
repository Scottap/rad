	<section>
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login" action="usuarios/actualizar" method="POST">
			<input type="hidden" name="user_id" value="<?php echo $user['id']; ?>">
				<h3 class="text-center">Actualizar a <?php echo $user['name']; ?></h3>
				<!-- <figure class="center-image">
					<img width="140" src="img/hecto932.jpg" alt="Hector Flores" class="img-circle">
				</figure> -->
		  		<div class="form-group">
		    		<label>Nombre de Usuario</label>
		    		<input type="text" class="form-control" name="username" autofocus value="<?php echo $user['username']; ?>">
		    		<?php echo form_error('username'); ?>
		  		</div>
		  		<div class="form-group">
		    		<label>Contraseña Actual (En el caso de que quiera cambiar su contraseña actual)</label>
		    		<input type="password" class="form-control" name="password" value="">
		    		<?php echo form_error('password'); ?>
		  		</div>
		  		<div class="form-group">
		    		<label>Contraseña Nueva (En el caso de que quiera cambiar su contraseña actual)</label>
		    		<input type="password" class="form-control" name="newPass" >
		    		<?php echo form_error('newPass'); ?>
		  		</div>
		  		<div class="form-group">
		    		<label>Repita la contraseña nueva</label>
		    		<input type="password" class="form-control" name="newPass_confirmation">
		    		<?php form_error('newPass_confirmation'); ?>
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