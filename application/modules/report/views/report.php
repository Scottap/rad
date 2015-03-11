<div class="contaier-fluid">
	<div class="col-md-10 col-md-offset-1">		   	
	   	<form class="form-login" action="reportes/exportar" method="POST">
			<h2 class="text-center"><span class="icon-calendar"></span> Reporte</h2>
	  		<div class="form-group" action="reporte/exportar">
	  			<label><strong>Tipo de reporte</strong></label>
	  		</div>
	  		<div class="radio">
		  		<label>
		    		<input type="radio" name="typeReport" id="optionsRadios1" value="daily" checked>
		    			Diario
		  		</label>
			</div>
			<div class="radio">
		  		<label>
		    		<input class="mensual" type="radio" name="typeReport" id="mensual" value="monthly">
		    		Mensual
		    		<div class="form-mensual">
		    			<form class="form-inline">
			    			<div class="form-group">
					  			<label for="exampleInputEmail1">Mes</label>
					  			<!-- 
					  			<input class="form-control" type="text" name="month" placeholder="Indique el mes que desea buscar"/>
					  			-->
					  			<select name="month" class="form-control">
					  				<option value="1">Enero</option>
					  				<option value="2">Febrero</option>
					  				<option value="3">Marzo</option>
					  				<option value="4">Abril</option>
					  				<option value="5">Mayo</option>
					  				<option value="6">Junio</option>
					  				<option value="7">Julio</option>
					  				<option value="8">Agosto</option>
					  				<option value="9">Septiembre</option>
					  				<option value="10">Octubre</option>
					  				<option value="11">Noviembre</option>
					  				<option value="12">Diciembre</option>
					  			</select>	
							</div>
			    		</form>
		    		</div>
		  		</label>
		  		<br>
			<div class="radio">
				<label>
					<input class="employees" type="radio" name="typeReport" id="optionsRadios3" value="employee">
					Por empleado						
					<div class="">
						<form class>
							<div class="form-group">
								<label>Cedula</label>
								<input class="form-control" type="text" name="cedula"> 
							</div class="form-group date">
							  	<label>Desde</label>
							  	<input class="form-control" type="date" name="desde" />
							</div>
							<div class="form-group date">
							  	<label>Hasta</label>
							  	<input class="form-control" type="date" name="hasta" />
							</div>
						</form>
					</div>
				</label>
			</div>
			<button type="submit" class="btn btn-success btn-lg btn-block green-google"><span class="glyphicon glyphicon-save-file"></span> Generar reporte </button>
			</div>
		</form>
	</div>
</div>