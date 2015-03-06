	<div class="container-fluid">
		<header class="col-md-12">
			<h3 class="text-center">Empleados</h3>
		</header>
		<div class="col-md-12">
			<div class="table-responsive table-design">
				<?php if(!empty($all_employees)): ?>
				<table class="table">
					<thead>
	      				<tr class="table-head">
	        				<th>#</th>
	        				<th>Nombre</th>
	        				<th>Fecha de Nacimiento</th>
	        				<th>Cédula</th>
	        				<th>Código Único</th>
	        				<th>Departamento</th>
	        				<th></th>
	        				<th></th>
	        				<th></th>
	      				</tr>
	    			</thead>
	        		<tbody>
	          			<?php $i = 1; ?>
		        			<?php foreach ($all_employees as $key => $value): ?>
			          			<tr>
						            <td><?php echo $i++; ?></td>
						            <td><strong><?php echo $value['name']; ?></strong></td>
						            <td><?php echo $value['birthday']; ?></td>
						            <td><?php echo $value['cedula']; ?></td>
						            <td><?php echo $value['code']; ?></td>
									<td><?php echo $value['department_name']; ?></td>
						            <td><a href="empleados/actualizar/<?php echo $value['slug']; ?>" title="Editar"><span class="glyphicon glyphicon-edit"></span></a></td>      
						            <td><a href="empleados/eliminar/<?php echo $value['slug']; ?>" title="Eliminar"><span class="glyphicon glyphicon-trash "></span></a></td>    
			          			</tr>		
		          			<?php endforeach; ?>	
	          			<?php else: ?>
	          			<h4>No hay empleados O:</h4>
	          			<p>Para agregar un empleado, vaya <a href="empleados/agregar">aquí</a></p>
	          		<?php endif; ?>
	        		</tbody>
			  	</table>
			</div>
		</div>
	</div>