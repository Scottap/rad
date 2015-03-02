<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1"/>
	<link rel="stylesheet" href="assets/back/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="assets/back/css/bootstrap-theme.min.css"/>
	<link rel="stylesheet" href="assets/back/css/style.css"/>
	<link rel="stylesheet" href="assets/back/css/icomoon.css"/>

</head>
<body>
	<div class="contaier-fluid">
		<header class="col-md-12">
			<h1 class="text-center">Registro diario</h1>
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
	          			<tr>
				            <th>4</th>
				            <td><strong>06:30pm</strong></td>
				            <td><div class="salida"></div></td>
				            <td>Alexandra Hidalgo</td>
				            <td>25476897</td>
				            <td>Administradora</td>
	          			</tr>
	          			<tr>
				            <th>3</th>
				            <td><strong>05:45pm</strong></td>
				            <td><div class="salida"></div></td>
				            <td>Flavio Ruiz</td>
				            <td>26162603</td>
				            <td>Chat</td>
	          			</tr>
	          			<tr>
				            <th>2</th>
				            <td><strong>03:30pm</strong></td>
				            <td><div class="entrada"></div></td>
				            <td>Flavio Ruiz</td>
				            <td>26162603</td>
				            <td>Chat</td>
	          			</tr>
	          			<tr>
				            <th>1</th>
				            <td><strong>02:30pm</strong></td>
				            <td><div class="entrada"></div></td>
				            <td>Alexandra Hidalgo</td>
				            <td>25476897</td>
				            <td>Administradora</td>
	          			</tr>
	        		</tbody>
			  	</table>
			</div>
		</dir>
	</div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="assets/back/js/bootstrap.min.js"></script>
    <script src="assets/back/js/mainApplication.js"></script>
  </body>
</body>
</html>