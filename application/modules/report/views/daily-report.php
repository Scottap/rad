<div class="contaier-fluid">
		<h1 class="text-center">Registro diario</h1>
		<dir class="col-md-12">
			<div class="leyenda"><span class="entrada"></span> = Entrada <span class="salida"></span> = Salida</div>
			<br>
			<form class="form-inline form-right form-search">
			  	<div class="form-group">
			  		<a id="btn_query" href="#" class="btn btn-success"> Buscar</a>
			    	<input id="query" type="text" class="form-control" id="exampleInputName2" placeholder="Buscador">
			  	</div>
			</form>
			
			<br>
			<div class="table-responsive table-design">
				<?php if (!empty($report)): ?>
					<table class="table">
						<thead>
		      				<tr class="table-head">
		        				<th>#</th>
		        				<th>Hora</th>
		        				<th>Acción</th>
		        				<th>Nombre</th>
		        				<th>Cedula</th>
		        				<th>Departamento</th>
		      				</tr>
		    			</thead>
			    		<?php $i=count($report); ?>
			    		<?php foreach ($report as $key => $value)?>
			        		<tbody>
			        			<tr>
						            <th> <?php echo $i--; ?> </th>
						            <td><strong> <?php echo $value['time']; ?> </strong></td>
						            <td>
						            	<div class= <?php if($value['action_id'] == 1): ?>
						            					<?php echo "entrada"; ?>
						            				<?php else: ?>
						            					<?php echo "salida"; ?>
						            	</div>
					            	</td>
						            <td> <?php echo $all_employees['name'] ?> </td>
						            <td> <?php echo $all_employees['cedula'] ?> </td>
						   		</tr>
						   	</tbody>
	          			<?php endforeach; ?>
					</table>
				<?php endif; ?>
			</div>
		</div>
	</div>