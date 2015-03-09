<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

	</head>
<body>
<div class="container-fluid">
	<h1 class="text-center">Registro diario</h1>
	<h3>Fecha: <?php echo date('d-m-Y'); ?></h3>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
			<div class="table-responsive table-design">
				<?php if(!empty($report)): ?>
					<table border="1" class="table">
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
			    		<?php foreach ($report as $key => $value): ?>
			        		<tbody>
			        			<tr>
						            <th> <?php echo $value['id']; ?> </th>
						            <td><strong> <?php echo $value['hour']; ?> </strong></td>
						            <td>
						            	<?php if($value['action_id'] == 1): ?>
						            		Entrdada
						            	<?php else: ?>
											Salida
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
		</div>
	</div>
</div>
</body>