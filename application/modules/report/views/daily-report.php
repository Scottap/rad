<div class="container-fluid">
	<h1 class="text-center">Registro diario</h1>
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
			<div class="leyenda"><span class="entrada"></span> = Entrada <span class="salida"></span> = Salida</div>
			<br>
			<form class="form-inline form-right form-search">
			  	<div class="form-group">
			  		<a id="btn_query" href="#" class="btn btn-success"> Buscar</a>
			    	<input id="query" type="text" class="form-control" id="exampleInputName2" placeholder="Buscador">
			  	</div>
			</form>
			<br>	
		</div>
	</div>
	
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
			<div class="table-responsive table-design">
				<?php if(!empty($report)): ?>
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

			    		<?php foreach ($report as $key => $value): ?>
			        		<tbody>
			        			<tr>
						            <th> <?php echo $value['id']; ?> </th>
						            <td><strong> <?php echo $value['hour']; ?> </strong></td>
						            <td>
						            	<?php if($value['action_id'] == 1): ?>
						            		<div class="entrada"></div>
						            	<?php else: ?>
											<div class="salida"></div>
						            	<?php endif; ?>	
					            	</td>
						            <td> <?php echo $value['employee_name']; ?> </td>
						            <td> <?php echo $value['cedula']; ?> </td>
						            <td> <?php echo $value['departament']; ?> </td>
						   		</tr>
						   	</tbody>
	          			<?php endforeach; ?>
					</table>
				<?php endif; ?>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<a style="display:block; margin-top:1em;" class="btn btn-success" href="reportes/descargarDiario">Descargar</a>
				</div>
			</div>
		</div>
	</div>
</div>
