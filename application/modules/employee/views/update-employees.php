	<section>
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login" method="POST" action="empleados/actualizar-empleado">
				<input type="hidden" name="employee_id" value="<?php echo $employeeData['id']; ?>"/>
				<h3 class="text-center">Actualizar al empleado <?php echo $employeeData['name']; ?></h3>
		  		<div class="form-group">
		    		<label>Nombre</label>
		    		<input type="text" class="form-control" name="nombre" value="<?php echo set_value('nombre', $employeeData['name']); ?>" autofocus>
		  			<?php echo form_error('nombre'); ?>
		  		</div>
		  		<div class="form-group">
		  			<label>Fecha de Nacimiento</label>
		  			<input type="date" name="birthday" class="form-control" value="<?php echo set_value('birthday'), $employeeData['birthday']; ?>">
		  			<?php echo form_error('birthday'); ?>
		  		</div>
		  		<div class="form-group">
		    		<label>Departamento</label>
		    		<select class="form-control" name="departament_id">
		    			<option value="">Seleccione</option>
		    			<?php foreach($departaments as $key => $value): ?>
		    				<?php if($value['id'] == set_value('departament_id', $employeeData['departament_id']) ): ?>
		    					<option value="<?php echo $value['id']; ?>" selected><?php echo $value['name']; ?></option>
		    				<?php else: ?>
		    					<option value="<?php echo $value['id']; ?>"><?php echo $value['name']; ?></option>
		    				<?php endif; ?>
		    			<?php endforeach; ?>
		    		</select>
		    		<?php echo form_error('departament_id'); ?>
		  		</div>
		  		<div class="form-group">
		    		<label>Cédula</label>
		    		<input type="text" class="form-control" name="cedula" value="<?php echo set_value('cedula', $employeeData['cedula']); ?>">
		  			<?php echo form_error('cedula'); ?>	
		  		</div>
		  		<div class="alert alert-danger" role="alert">Error</div>
		  		<button type="submit" class="btn btn-primary btn-lg blue-google"><span class="icon-pencil"></span> Actualizar</button> 
		  		<button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Volver</button>
			</form>
		</div>
	</section>