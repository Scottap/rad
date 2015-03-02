<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap-theme.css">
	<link rel="stylesheet" href="http://rad/assets/back/css/style.css">
</head>
	<div class="contaier-fluid">
		<header class="col-md-12">
			<h3 class="text-center">Usuarios de Sistema</h3>
		</header>
		<dir class="col-md-12">
			<div class="table-responsive table-design">
				<?php if(!empty($all_users)): ?>
				<table class="table">
					<thead>
	      				<tr class="table-head">
	        				<th>#</th>
	        				<th>Usuario</th>
	        				<th>Nombre</th>	        			
	        				<th></th>
	        				<th></th>
	      				</tr>
	    			</thead>
	        		<tbody>
	        		<?php $i = 1; ?>
	        		<?php foreach ($all_users as $key => $value): ?>
	          			<tr>
				            <td><?php echo $i++; ?></td>
				            <td><strong><?php echo $value['username']?></strong></td>
				            <td><?php echo $value['name']?></td>			           
				            <td><a href="usuarios/actualizar-usuario/<?php echo $value['slug']; ?>" title="Editar"><span class="glyphicon glyphicon-edit"></span></a></td>       
				            <td><a href="usuarios/eliminar-usuario/<?php echo $value['slug']; ?>" title="Eliminar"><span class="glyphicon glyphicon-trash "></span></a></td>    
	          			</tr>		
	          		<?php endforeach; ?>
	        		</tbody>	       		
			  	</table>
			  	<h4 class="text-center">¿Quieres editar o borrar tus datos? ¡Entra en <a href="usuarios/perfil">Mi Perfil</a>!</h4>
			  	<?php else: ?>
			  		<h3>No hay usuarios</h3>
				<?php endif; ?>
			</div>
		</dir>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>