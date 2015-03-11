<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">

	</head>
<body>
<div class="container-fluid">
	<h1 class="text-center">Registro del mes de <?php echo $report[0]['name']; ?></h1>
	<p>Desde el <strong><?php echo $fecha_inicio; ?></strong> hasta el <strong><?php echo $fecha_final; ?></strong> </p>
	<div class="row">
		<div class="col-xs-12 col-sm-12 col-md-8 col-lg-8 col-md-offset-2 col-lg-offset-2">
			<div class="table-responsive table-design">
				<?php if(!empty($report)): ?>
					<?php $i=1; ?>
					<table border="1" class="table">
						<thead>
		      				<tr class="table-head">
		        				<th>#</th>
		        				<th>Hora</th>
		        				<th>Fecha</th>
		        				<th>Acción</th>
		        				<th>Nombre</th>
		        				<th>Cedula</th>
		        				<th>Departamento</th>
		      				</tr>
		    			</thead>
			    		<?php foreach ($report as $key => $value): ?>
			        		<tbody>
			        			<tr>
						            <th> <?php echo $i++; ?> </th>
						            <td><strong> <?php echo $value['hour']; ?> </strong></td>
						            <td><strong> <?php echo $value['date']; ?> </strong></td>
						            <td>
						            	<?php if($value['action_id'] == 1): ?>
						            		Entrada
						            	<?php else: ?>
											Salida
						            	<?php endif; ?>	
					            	</td>
						            <td> <?php echo $value['name']; ?> </td>
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