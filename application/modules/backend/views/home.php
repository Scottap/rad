<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<title><?php echo $title; ?></title>
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="http://rad/assets/back/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="http://rad/assets/back/css/style.css"/>
	<link rel="stylesheet" href="http://rad/assets/back/css/icomoon.css"/>

</head>
<body>
	<?php $i = 1; ?>
	<div class="contaier-fluid">
		<header class="col-md-12">
			<h1 class="text-center">Registro diario</h1>
			<h4>¡Bienvenido <?php echo $userData['name']. " ". date("d-m-y H:i:s"); ?></h4>
		</header>
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
				<?php if(isset($lastTenReports)): ?>
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
	        		<tbody>
	        		<?php foreach($lastTenReports as $key => $value): ?>
	          			<tr>
				            <td><?php echo $i++; ?></td>
				            <td><strong><?php echo $value['hour']; ?></strong></td>
				            <td><?php echo $value['action']; ?></td>
				            <td><?php echo $value['name']; ?></td>
				            <td><?php echo $value['cedula']; ?></td>
				            <td><?php echo $value['departament']; ?></td>
	          			</tr>
	        		</tbody>
	        	<?php endforeach; ?>
			  	</table>
			  <?php endif; ?>
			</div>
		</dir>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/mainApplication.js"></script>
  </body>
</html>