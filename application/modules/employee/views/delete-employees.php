	<section>
		<div class="col-md-8 col-md-offset-2">
			<form class="form-login" method = "POST" action="empleados/eliminar">
				<h3 class="text-center">Eliminar a <?php echo $employeeData['name']; ?></h3>
		  		<div class="form-group">
		    		<label>Nombre</label>
		    		<p><?php echo $employeeData['name']; ?></p>
		  		</div>
		  		<div class="form-group">
		    		<label>Fecha de Nacimiento</label>
		    		<p><?php echo $employeeData['birthday']; ?></p>
		  		</div>
		  		<div class="form-group">
		    		<label>Departamento</label>
		    		<p></p>
		  		</div>
		  		<div class="form-group">
		  			<label>Código único</label>
		  			<p><?php echo $employeeData['code']; ?></p>
		  		</div>
		  		<div class="alert alert-danger" role="alert">
		  			<p>
		  				Al eliminar este empleado se perderán todos los datos del mismo en la base de datos.
		  				<strong>¿Está seguro/a que desea eliminar a <?php echo $employeeData['name']; ?>?</strong>
		  			</p>
				</div>
				<div class="center-image">
					<button type="submit" class="btn btn-primary btn-lg"><span class="glyphicon glyphicon-arrow-left"></span> Volver</button>
					<button href="empleados" class="btn btn-primary btn-lg red-google"><span class="glyphicon glyphicon-remove"></span> Eliminar</button>
				</div>
			</form>
		</div>
	</section>