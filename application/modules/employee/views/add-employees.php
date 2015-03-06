	<section>
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login" name="add" action="empleados/agregar-empleado" method="POST">
				<h2 class="text-center">Nuevo Empleado</h2>
				<div class="alert alert-warning" role="alert">
					Todos los campos con asteriscos (*) son obligatorios.
				</div>
		  		<div class="form-group">
		    		<label>Nombre * </label>
		    		<input type="text" value="<?php echo set_value('name'); ?>" class="form-control" name="name" autofocus>
					<?php echo form_error('name'); ?>		  		
		  		</div>
		  		<div class="form-group">
		    		<label>Fecha de nacimiento </label>
		    		<input type="date" value="<?php echo set_value('birthday'); ?>" class="form-control" name="birthday">
		    		<?php echo form_error('birthday'); ?>
		  		</div>
		  		<div class="form-group">
		  			<label>Cédula * </label>
		  			<input type="text" class="form-control" name="cedula" value="<?php echo set_value('cedula'); ?>">
		  			<?php echo form_error('cedula'); ?>
		  		</div>
		  		<div class="form-group" form="emploform">
		    		<label>Departamento * </label>
		    		<select class="form-control" name="departament_id">
		    			<option value="">Seleccione</option>
		    			<?php foreach($departaments as $key => $value): ?>
		    				<option value="<?php echo $value['id']; ?> <?php set_value('departament_id'); ?>"><?php echo $value['name']; ?>	</option>
		    			<?php endforeach; ?>
		    		</select>
		    		<?php echo form_error('departament_id'); ?>
		  		</div>	
		  		<div class="form-group">
		  			<label>Horas</label> <br>
		  			<input type="text" value="<?php echo set_value('hours'); ?>" name="hours" class="form-control">
		  		</div>	  		
		  		<div class="form-group">
		  			<label>Código único * </label> <small style='font-size:10.5px'>No edite este número</small> <br>
		  			<input name="code" type="text" value="<?php echo mt_rand(021294, 999999); ?> <?php echo set_value('code'); ?>" class="form-control	">
		  			<?php echo form_error('code'); ?>
		  		</div>
		  		<div class="alert alert-danger" role="alert">Error</div>
		  		<button type="submit" class="btn btn-primary btn-lg btn-block blue-google"><span class="icon-database"></span> Agregar</button>
			</form>
		</div>
	</section>